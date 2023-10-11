<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Products;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $products = Products::all();
        $categories = Categories::all();
        $product_images = ProductImage::all();

        return view('frontend.category.category', compact('categories', 'products', 'product_images'));
    }

    public function getProducts($categoryName,$categoryId)
    {
        if ($categoryId == 0 && $categoryName) {
            $products = Products::all();
        } else {
            $products = Products::whereHas('categories', function ($query) use ($categoryId) {
                $query->where('category_product.CategoryId', $categoryId);
            })->get();
        }
        $product_images = ProductImage::all();
        $categories = Categories::all();
        return view('frontend.category.category', compact('products', 'categories', 'product_images'));
    }
}
