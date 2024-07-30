<?php

namespace App\Http\Controllers\Client;

use App\Helper\CommonHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategoryRequest;
use App\Models\Category;
use App\Models\ConfigOption;
use App\Models\Product;
use App\Models\Slider;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function __construct()
    {
    }

    public function index(Category $category, Request $request)
    {
        $categories = Category::select('id', 'name', 'slug', 'parent_id')->where('status', 1)->get()->toArray();
        $categoryService = new CategoryService();

        $categoryArray = $categoryService->getParentChildTree($categories);
        $categoryMenu = $categoryService->getTreeHtml($categoryArray);


        $products = Product::query()->where('status', 1);

        if(!empty($request->category)) {
            $categoryIds = Category::query()->where('parent_id', $category->id)->get()->pluck('id');
            $categoryIds[] = $category->id;
            $products->whereIn('category_id', $categoryIds);
        }

        $products = $products->orderBy('priority')->get();
        return view('client.product', compact('products', 'categoryArray', 'categoryMenu', 'category'));
    }

    public function show(string $slug)
    {
        $product = Product::query()->where('slug', $slug)->first();
        return view('client.product-detail', compact('product'));
    }
}
