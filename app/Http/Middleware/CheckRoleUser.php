<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; // Import để sử dụng Auth

class CheckRoleUser
{
    public function handle(Request $request, Closure $next): Response
    {
        // Kiểm tra xem người dùng đã đăng nhập chưa
        if (Auth::check()) {
            // Lấy thông tin người dùng hiện tại
            $user = Auth::user();

            // Kiểm tra vai trò của người dùng (giả sử bạn có một trường role trong bảng users)
            if ($user->role == 1) {
                // Cho phép vào trang Dashboard
                return $next($request);
            }
        }

        // Nếu không đúng vai trò, chuyển hướng về trang Index
        return redirect(route('index'));
    }
}
