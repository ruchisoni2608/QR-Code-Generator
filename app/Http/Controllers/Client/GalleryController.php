<?php

namespace App\Http\Controllers\Client;

use App\Helper\CommonHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategoryRequest;
use App\Models\Category;
use App\Models\ConfigOption;
use App\Models\Media;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $medias = Media::query()->where('status', 1)->get();
        $tags = $medias->pluck('tag', 'tag_slug');
        return view('client.gallery', compact('medias', 'tags'));
    }
}
