<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        $this->middleware('guest')->except('frontend');
        return view('frontend.home.home');
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
}
