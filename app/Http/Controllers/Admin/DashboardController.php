<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;


class DashboardController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        // Lấy danh sách người dùng từ cơ sở dữ liệu
        $users = Users::all();
        // $users = DB::select('SELECT * FROM users');

        if (!empty($users)) {
            return view('dashboard.index', compact('users'));
        } else {
            $nocation = 'empty users';
            return view('dashboard.index', compact('nocation'));
        }

        // dd($users);
        // Trả về trang hiển thị danh sách người dùng
        return view('dashboard.index', compact('users'));
    }
}
