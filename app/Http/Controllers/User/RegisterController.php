<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Kiểm tra xem "password" và "confirmPassword" có khớp nhau không
        if ($request->input('password') !== $request->input('confirmpassword')) {
            return redirect()->back()->with('error', 'Mật khẩu và mật khẩu xác nhận không khớp.')->withInput();
        }

        // Sử dụng Validator để kiểm tra dữ liệu
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,Email', // Kiểm tra email không trùng lặp
            'username' => 'required|unique|regex:/^[a-zA-Z0-9_ -]+$/:users,UserName', // Kiểm tra username 
            'password' => 'required|string|min:6', // Mật khẩu phải có ít nhất 6 ký tự
        ]);

        // Kiểm tra xem có lỗi không
        if ($validator->fails()) {
            $errors = $validator->errors();

            if ($errors->has('email')) {
                return redirect()->back()->with('error', 'Email đã tồn tại.')->withInput();
            }

            if ($errors->has('username')) {
                return redirect()->back()->with('error', 'Username đã tồn tại.')->withInput();
            }
        }

        // Lưu tài khoản mới vào cơ sở dữ liệu
        $user = new User();
        $user->Email = $request->input('email');
        $user->UserName = $request->input('username');
        $user->Password = Hash::make($request->input('password'));
        $user->save();

        // Trả về thông báo thành công nếu đăng ký thành công
        return view('frontend.home.home')->with('success', 'Tài khoản mới đã được thêm thành công.');
    }
}
