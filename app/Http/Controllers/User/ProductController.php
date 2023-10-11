<?php

namespace App\Http\Controllers\User;

use App\Models\Products;
use App\Models\Categories;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('frontend/product.product');
    }

    public function getProducts($categoryId) {
        if ($categoryId === 'all') {
            $products = Products::all();
        } else {
            $products = Products::whereHas('categories', function ($query) use ($categoryId) {
                $query->where('category_id', $categoryId);
            })->get();
        }
    
        return view('frontend.category.category', compact('products'));
    }
    
    
}
