<?php

namespace App\Http\Controllers\Admin;

use App\Helper\CommonHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePageItemRequest;
use App\Http\Requests\CreatePageRequest;
use App\Models\Page;
use App\Models\PageItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PageController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = Page::query()->with('parent')->get();
        return view('admin.page.list', compact('data'));
    }

    public function create(): View
    {
        return view('admin.page.create');
    }

    public function save(CreatePageRequest $request)
    {
        $data = $request->validated();

        if ($request->file('image')) {
            $data['image'] = CommonHelper::uploadFile($request->file('image'), 'page');
        }

        if ($request->file('cover_photo')) {
            $data['cover_photo'] = CommonHelper::uploadFile($request->file('cover_photo'), 'page/cover_photo');
        }

        Page::query()->create($data);

        return response()->json(['message' => 'Page created successfully', 'redirectTo' => route('admin.pages')], 200);
    }

    public function edit(Page $page, $modal='no')
    {
        $page->load('parent');
        return view('admin.page.create', compact('page'));
    }

    public function update(Page $page, CreatePageRequest $request)
    {
        $data = $request->validated();

        if ($request->file('image')) {
            $data['image'] = CommonHelper::uploadFile($request->file('image'), 'page', $page->image);
        }

        if ($request->file('cover_photo')) {
            $data['cover_photo'] = CommonHelper::uploadFile($request->file('cover_photo'), 'page/cover_photo', $page->cover_photo);
        } else if(empty($data['cover_photo']) && !empty($page->cover_photo)) {
            CommonHelper::removeOldFile('public/page/cover_photo/' . $page->cover_photo);
        }

        $page->update($data);

        return response()->json(['message' => 'Page updated successfully', 'redirectTo' => route('admin.pages')], 200);
    }

    public function delete(Page $page)
    {
        DB::transaction();
        try {
            $items = $page->items();
            $image = $page->image;
            $coverImage = $page->cover_photo;

            if ($page->delete()) {
                CommonHelper::removeOldFile('public/page/' . $image);
                CommonHelper::removeOldFile('public/page/cover_photo/' . $coverImage);
                foreach ($items as $item) {
                    if ($item->type != PageItem::VIDEO) {
                        CommonHelper::removeOldFile('public/page/media/image/' . $item->url);
                        CommonHelper::removeOldFile('public/page/media/file/' . $item->url);
                    }
                    $item->delete();
                }
            }
            DB::commit();

            return response()->json(['message' => 'Page deleted successfully!', 'reload' => true]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => $e->getMessage(), 'reload' => false], $e->getCode());
        }
    }

    public function getPageDropdown(Request $request)
    {
        $input = $request->all();

        $pages = Page::query()->selectRaw('id,name as text');

        $pages->whereNull('parent_id');

        if(isset($input['search'])){
            $pages->where('name','like','%'.$input['search'].'%');
        }

        $pages = $pages->latest()->simplePaginate(200);

        $data['more'] = $pages->hasMorePages();
        $data['results'] = $pages->toArray()['data'];

        return response()->json($data, 200);
    }

    public function createItem(Page $page): View
    {
        return view('admin.page.item_create_frm', compact('page'));
    }

    public function saveItem(Page $page, CreatePageItemRequest $request)
    {
        $inputs = $request->validated();

        if ($inputs['type'] == PageItem::VIDEO) {
            $inputs['url'] = $inputs['video_url'];
        } else if ($inputs['type'] == PageItem::IMAGE) {
            $inputs['url'] = CommonHelper::uploadFile($request->file('image'), 'page/media/image');
        } else if ($inputs['type'] == PageItem::PDF) {
            $inputs['url'] = CommonHelper::uploadFile($request->file('file'), 'page/media/file');
        }

        unset($inputs['video_url']);
        unset($inputs['image']);
        unset($inputs['file']);

        $page->items()->create($inputs);

        return response()->json(['message' => 'Item added successfully', 'redirectTo' => route('admin.page.edit', $page->id)], 200);
    }

    public function editItem(Page $page, PageItem $item, $modal='no')
    {
        return view('admin.page.item_create_frm', compact('page', 'item'));
    }

    public function updateItem(Page $page, PageItem $item, CreatePageItemRequest $request)
    {
        $inputs = $request->validated();

        if ($inputs['type'] == PageItem::VIDEO) {
            $inputs['url'] = $inputs['video_url'];
            if (!empty($item->url)) {
                CommonHelper::removeOldFile('public/page/media/image/' . $item->url);
                CommonHelper::removeOldFile('public/page/media/file/' . $item->url);
            }
        } else if ($inputs['type'] == PageItem::IMAGE) {
            if ($request->file('image')) {
                CommonHelper::removeOldFile('public/page/media/image/' . $item->url);
                $inputs['url'] = CommonHelper::uploadFile($request->file('image'), 'page/media/image');
            } else if ($inputs['image']) {
                $inputs['url'] = $inputs['image'];
            }
        } else if ($inputs['type'] == PageItem::PDF) {
            if ($request->file('file')) {
                CommonHelper::removeOldFile('public/page/media/file/' . $item->url);
                $inputs['url'] = CommonHelper::uploadFile($request->file('file'), 'page/media/file');
            } else if ($inputs['file']) {
                $inputs['url'] = $inputs['file'];
            }
        }

        unset($inputs['video_url']);
        unset($inputs['image']);
        unset($inputs['file']);

        $item->update($inputs);

        return response()->json(['message' => 'Item updated successfully', 'reload' => true], 200);
    }

    public function deleteItem(Page $page, PageItem $item,)
    {
        // Remove Old file
        if (in_array($item->type, [PageItem::IMAGE, PageItem::PDF])) {
            CommonHelper::removeOldFile('public/page/media/image/' . $item->url);
            CommonHelper::removeOldFile('public/page/media/file/' . $item->url);
        }

        $item->delete();
        return response()->json(['message' => 'Item deleted successfully!', 'reload' => true]);
    }
}
