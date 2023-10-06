<?php

namespace App\Http\Controllers\Admin\Dashboard\Product;

use App\Http\Controllers\Controller;

class ProductControllder extends Controller
{

    public function index() {
        return view('dashboard.product.index');
    }
}
