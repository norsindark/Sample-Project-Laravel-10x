<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Kiểm tra xem người dùng đã đăng nhập chưa
        if (Auth::check()) {
            // Kiểm tra vai trò của người dùng
            $user = Auth::user();
            if ($user->role == $role) {
                // Nếu người dùng có vai trò mong muốn, cho họ tiếp tục truy cập
                return $next($request);
            }
        }

        // trả về lỗi
        return redirect('/home'); 
    }
}
