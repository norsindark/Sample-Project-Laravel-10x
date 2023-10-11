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
}
