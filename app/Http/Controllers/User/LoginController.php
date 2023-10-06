<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;

class LoginController extends Controller
{
    // ...

    // Hiển thị trang đăng nhập
    // public function showLoginForm()
    // {
    //     return view('auth.login');
    // }

    // Xử lý đăng nhập
    public function login(Request $request)
    {
        // Kiểm tra thông tin đăng nhập
        $credentials = $request->only('username', 'password');


        if (Auth::attempt($credentials)) {

            // Đăng nhập thành công
            $user = Auth::user(); // Lấy thông tin người dùng đã đăng nhập

            if ($user->role == 1) {
                // Nếu là "admin" (role = 1), chuyển hướng đến /dashboard/home
                return redirect()->route('dashboard.index');
            } elseif ($user->role == 2) {
                // Nếu là "user" (role = 2), chuyển hướng đến /nhathuoc/afterLogin
                session(['user_logged_in' => true]);
                return redirect()->route('afterLogin');
            }
        } else {
            // Đăng nhập thất bại
            return redirect()->back()->withInput()->withErrors(['username' => 'Thông tin đăng nhập không chính xác.']);
        }

    }


    // // Đăng xuất
    // public function logout(Request $request)
    // {
    //     Auth::logout();
    //     return redirect('/');
    // }

    // ...
}
