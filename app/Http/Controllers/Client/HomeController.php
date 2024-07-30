<?php

namespace App\Http\Controllers\Client;

use App\Helper\CommonHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategoryRequest;
use App\Models\Category;
use App\Models\ConfigOption;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    //     public function index()
    //     {
    //         $data['slider'] = Slider::query()->with('items')->where('id', 1)->first();
    //         $data['settings'] = ConfigOption::query()->whereIn('key', ['home-about-content'])->get()->keyBy('key');
    //         $data['products'] = Product::query()->get();
    //         $data['categories'] = Category::query()
    //                                 ->select('id', 'name', 'slug', 'image')
    //                                 ->whereNull('parent_id')
    //                                 ->where('status', 1)
    //                                 ->get();

    // //        dd($data['products']);
    // //        dd($data['settings']['home-about-content']->value);
    //         return view('client.index', compact('data'));
    //     }
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('dashboard', compact('blogs'));
    }
    public function show(Blog $blog): View
    {
        return view('blogdetail', compact('blog'));
    }
}
