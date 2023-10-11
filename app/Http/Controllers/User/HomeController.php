<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Categories;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Categories::all();
        $this->middleware('guest')->except('frontend');
        return view('frontend.home.home', compact('categories'));
    }

    public function CheckRoleUser()
    {
        if (!Auth::user()) {
            return redirect()->route('home');
        }

        if (Auth::user()->role == 1) {
            return redirect()->route('dashboard.index');
        }

        if (Auth::user()->role == 2) {
            return redirect()->route('home');
        }
    }

    // public function dropListCategory()
    // {
    //     $categories = Categories::all();
    //     return view('frontend.components.hearder', compact('categories'));
    // }
}
