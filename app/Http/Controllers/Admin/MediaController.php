<?php

namespace App\Http\Controllers\Admin;

use App\Helper\CommonHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateMediaRequest;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MediaController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = Media::query()->get();
        return view('admin.media.list', compact('data'));
    }

    public function create(): View
    {
        return view('admin.media.create');
    }

    public function save(CreateMediaRequest $request)
    {
        $inputs = $request->validated();

        if (!empty($inputs['external_url'])) {
            $inputs['media_url'] = $inputs['external_url'];
            $inputs['type'] = Media::EXTERNAL;
        } else if ($request->file('image')) {
            $inputs['media_url'] = CommonHelper::uploadFile($request->file('image'), 'media');
            $inputs['type'] = Media::INTERNAL;
        }
        unset($inputs['external_url']);
        unset($inputs['image']);

        Media::query()->create($inputs);

        return response()->json(['message' => 'Media created successfully', 'redirectTo' => route('admin.media')], 200);
    }

    public function edit(Media $media, $modal='no')
    {
        return view('admin.media.create', compact('media'));
    }

    public function update(Media $media, CreateMediaRequest $request)
    {
        $inputs = $request->validated();

        if ($inputs['type'] == Media::EXTERNAL) {
            CommonHelper::removeOldFile('public/media/' . $media->media_url);
            $inputs['media_url'] = $inputs['external_url'];
        } else {
            if ($request->file('image')) {
                CommonHelper::removeOldFile('public/media/' . $media->media_url);
                $inputs['media_url'] = CommonHelper::uploadFile($request->file('image'), 'media');
            } else if ($inputs['image']) {
                $inputs['media_url'] = $inputs['image'];
            }
            $inputs['type'] = Media::INTERNAL;
        }
        unset($inputs['external_url']);
        unset($inputs['image']);

        $media->update($inputs);

        return response()->json(['message' => 'Media updated successfully', 'redirectTo' => route('admin.media')], 200);
    }

    public function delete(Media $media)
    {
        CommonHelper::removeOldFile('public/media/' . $media->media_url);
        $media->delete();
        return response()->json(['message' => 'Media deleted successfully!', 'reload' => true]);
    }

    public function getMediaDropdown(Request $request)
    {
        $input = $request->all();

        $medias = Media::selectRaw('id,name as text');

        if(isset($input['search'])){
            $medias->where('name','like','%'.$input['search'].'%');
        }

        $medias = $medias->latest()->simplePaginate(200);

        $data['more'] = $medias->hasMorePages();
        $data['results'] = $medias->toArray()['data'];

        return response()->json($data, 200);
    }
}
