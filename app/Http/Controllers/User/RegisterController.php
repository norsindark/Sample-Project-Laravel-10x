<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Kiểm tra xem "password" và "confirmPassword" có khớp nhau không
        if ($request->input('password') !== $request->input('confirmpassword')) {
            // Trả về thông báo lỗi nếu không khớp
            return redirect()->back()->with('error', 'Mật khẩu và mật khẩu xác nhận không khớp.');
        }

        // Validate và lưu tài khoản mới vào cơ sở dữ liệu
        $user = new Users();
        $user->Email = $request->input('email');
        $user->UserName = $request->input('username');
        $user->Password = Hash::make($request->input('password'));
        $user->save();

        // Trả về thông báo thành công nếu đăng ký thành công
        return view('frontend.home.home')->with('success', 'Tài khoản mới đã được thêm thành công.');
    }
}
