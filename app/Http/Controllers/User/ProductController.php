<?php

namespace App\Http\Controllers\User;

use App\Models\Products;
use App\Models\Categories;
use App\Http\Controllers\Controller;
use App\Models\ProductImage;

class ProductController extends Controller
{
    public function productDetails($productsName, $ProductId)
    {
        $product = Products::findOrFail($ProductId);
        $product_images = ProductImage::all();
        return view('frontend.product.product', compact('product', 'product_images'));
    }
}
