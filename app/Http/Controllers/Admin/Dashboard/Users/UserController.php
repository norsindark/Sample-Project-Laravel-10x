<?php

namespace App\Http\Controllers\Admin\Dashboard\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function __construct()
    {
    }

    // index 

    public function index()
    {
        // Lấy danh sách người dùng từ cơ sở dữ liệu
        $users = User::all();

        if (!empty($users)) {
            return view('dashboard.users.index', compact('users'));
        } else {
            $nocation = 'empty users';
            return view('dashboard.users.index', compact('nocation'));
        }

        // hiển thị danh sách người dùng
        //
        return view('dashboard.users.index', compact('users'));
    }

    // edit

    public function edit($id)
    {
        // Lấy thông tin người dùng theo ID
        $user = User::findOrFail($id);

        // Trả về view chỉnh sửa với dữ liệu người dùng
        return view('dashboard.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Validate dữ liệu đầu vào
        $rules = [
            'username' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|email',
            'role' => 'required|int|in:1,2',
            'status' => 'required|int|in:1,2,3',
            'address' => 'nullable|string',
        ];

        // Kiểm tra xem người dùng đã nhập mật khẩu mới hay không
        if ($request->filled('password')) {
            $rules['password'] = 'required|string';
        }

        $request->validate($rules);

        // Lấy thông tin người dùng theo ID
        $user = User::findOrFail($id);

        // Cập nhật thông tin người dùng
        $data = [
            'username' => $request->input('username'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
            'status' => $request->input('status'),
            'address' => $request->input('address'),
        ];

        // Kiểm tra xem người dùng đã nhập mật khẩu mới hay chưa
        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->input('password'));
        }

        $user->update($data);

        // Chuyển hướng về trang danh sách người dùng sau khi cập nhật
        return redirect()->route('dashboard.user.index')->with('success', 'Update success.');
    }


    // create 

    public function create()
    {
        return view('dashboard.users.create');
    }

    public function store(Request $request)
    {
        // Define validation rules
        $rules = [
            'email' => 'required|email|unique:users,Email',
            'username' => 'required|unique:users,UserName',
            'password' => 'required|min:6',
            'role' => 'required',
            'status' => 'required',
            'name' => 'required',
            'address' => 'required',
        ];

        // Create validation messages
        $messages = [
            'email.required' => 'Email is required.',
            'email.email' => 'Invalid email format.',
            'email.unique' => 'Email already exists.',
            'username.required' => 'Username is required.',
            'username.unique' => 'Username already exists.',    
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 6 characters long.',
            'role.required' => 'Role is required.',
            'status.required' => 'Status is required.',
            'name.required' => 'Name is required.',
            'address.required' => 'Address is required.',
        ];

        // Validate the request data
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // If validation passes, create and save the new user
        $user = new User();
        $user->Email = $request->input('email');
        $user->UserName = $request->input('username');
        $user->Password = Hash::make($request->input('password'));
        $user->Role = $request->input('role');
        $user->Status = $request->input('status');
        $user->Name = $request->input('name');
        $user->Address = $request->input('address');
        $user->save();

        // Redirect the user after successfully adding the new account
        return redirect()->route('dashboard.user.index')->with('success', 'New account added successfully.');
    }

    public function destroy($id)
    {
        // Lấy người dùng cần xóa từ cơ sở dữ liệu
        $user = User::find($id);

        // Kiểm tra xem người dùng tồn tại
        if (!$user) {
            return redirect()->route('dashboard.users.index')->with('error', 'Người dùng không tồn tại.');
        }

        // xóa
        $user->delete();
        return redirect()->route('dashboard.user.index')->with('success', 'Người dùng đã được xóa thành công.');
    }
}
