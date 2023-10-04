<?php

namespace App\Http\Controllers\Admin\Dashboard\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;

class UserController extends Controller
{
    public function __construct()
    {
    }

    public function create()
    {
        return view('dashboard.create');
    }

    public function store(Request $request)
    {
        // Validate và lưu tài khoản mới vào cơ sở dữ liệu
        $user = new Users();
        $user->Email = $request->input('email');
        $user->UserName = $request->input('username');
        $user->Password = Hash::make($request->input('password'));
        $user->Role = $request->input('role');
        $user->Status = $request->input('status');
        $user->name = $request->input('name');
        $user->save();

        // Điều hướng người dùng sau khi thêm tài khoản (ví dụ: chuyển hướng về danh sách người dùng)
        return redirect()->route('dashboard.index')->with('success', 'Tài khoản mới đã được thêm thành công.');
    }

    public function destroy($id)
    {
        // Lấy người dùng cần xóa từ cơ sở dữ liệu
        $user = Users::find($id);

        // Kiểm tra xem người dùng tồn tại
        if (!$user) {
            return redirect()->route('dashboard.index')->with('error', 'Người dùng không tồn tại.');
        }

        // Kiểm tra xem người dùng đã xác nhận xóa hay không
        if (request()->has('confirmed') && request('confirmed') == 'true') {
            // Thực hiện xóa người dùng
            $user->delete();
            return redirect()->route('dashboard.index')->with('success', 'Người dùng đã được xóa thành công.');
        } else {
            return redirect()->route('dashboard.index')->with('warning', 'Bạn đã hủy bỏ việc xóa người dùng.');
        }
    }
}
