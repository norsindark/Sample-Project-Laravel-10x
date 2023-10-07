<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;

class LoginController extends Controller
{

    public function Login()
    {
        if (!Auth::user()) {
            session(['user_logged_in' => false]);
            return redirect()->back()->withInput()->withErrors(['username' => 'Thông tin đăng nhập không chính xác.']);
        }

        if (Auth::user()->role == 1) {
            return redirect()->route('dashboard');
        }

        if (Auth::user()->role == 2) {

            session(['user_logged_in' => true]);

            return redirect()->route('afterLogin');
        }
    }

    // logout
    public function logout()
    {
        Auth::logout();
        session(['user_logged_in' => false]);
        return redirect()->route('home');
    }

    // ...
}
