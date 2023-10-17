<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Products;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // public function index()
    // {
    //     $products = Products::all()->paginate(9);
    //     $categories = Categories::all();
    //     $product_images = ProductImage::all();

    //     return view('frontend.category.category', compact('categories', 'products', 'product_images'));
    // }

    // public function getProducts($categoryName,$categoryId)
    // {
    //     if ($categoryId == 0 && $categoryName) {
    //         $products = Products::all();
    //     } else {
    //         $products = Products::whereHas('categories', function ($query) use ($categoryId) {
    //             $query->where('category_product.CategoryId', $categoryId);
    //         })->get();
    //     }
    //     $product_images = ProductImage::all();
    //     $categories = Categories::all();
    //     return view('frontend.category.category', compact('products', 'categories', 'product_images'));
    // }



    public function index(Request $request)
    {
        $query = Products::query();
        $categories = Categories::all();
        $product_images = ProductImage::all();

        if ($request->has('sort')) {
            if ($request->input('sort') == 'low_to_high') {
                $query->orderBy('Price', 'asc');
            } elseif ($request->input('sort') == 'high_to_low') {
                $query->orderBy('Price', 'desc');
            }
        }

        $products = $query->paginate(9);

        return view('frontend.category.category', compact('categories', 'products', 'product_images'));
    }

    public function getProducts($categoryName, $categoryId)
    {
        $categories = Categories::find($categoryId);
        $product_images = ProductImage::all();
        $query = Products::query();

        if ($categoryId != 0) {
            $query->whereHas('categories', function ($query) use ($categoryId) {
                $query->where('category_product.CategoryId', $categoryId);
            });
        }

        $Sproducts = $query->get();

        return view('frontend.category.category', compact('categories', 'Sproducts', 'product_images'));
    }
}
