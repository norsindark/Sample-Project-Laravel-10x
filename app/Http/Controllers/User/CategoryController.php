<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {

        $categories = Categories::all();
        return view('frontend.home.home', compact('categories'));
    }
}
