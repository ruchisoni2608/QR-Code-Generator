<?php

namespace App\Http\Controllers\Client;

use App\Helper\CommonHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategoryRequest;
use App\Models\Category;
use App\Models\ConfigOption;
use App\Models\Page;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function __construct()
    {
    }

    public function about()
    {
        $page = Page::query()->where(['slug' => Page::ABOUT, 'status' => 1])->first();

        return view('client.about', compact('page'));
    }

    public function show(string $slug)
    {
        $page = Page::query()->with(['subPages', 'items'])
                    ->where(['slug' => $slug, 'status' => 1])
                    ->first();
        return view('client.page', compact('page'));
    }
}
