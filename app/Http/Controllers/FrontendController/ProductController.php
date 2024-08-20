<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('frontEnd.pages.shop.shop', compact('products', 'categories'));
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $related_product = Product::with('category')->where("category_id", $product->category_id)->get();
        // return $related_product;
        return view("frontEnd.pages.shop.product-detail", compact('product', 'related_product'));
    }
}
