<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function listByCategory(Category $category)
    {
        $products = $category->products;
        return view('products.list', compact('category', 'products'));
    }

    public function details(Product $product)
    {
        return view('products.details', compact('product'));
    }
}
