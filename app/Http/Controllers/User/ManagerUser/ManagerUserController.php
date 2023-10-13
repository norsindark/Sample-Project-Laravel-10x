<?php

namespace App\Http\Controllers\User\ManagerUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Models\Categories;
use App\Models\User;
use App\Models\Users;


class ManagerUserController extends Controller
{
    //
    public function index()
    {
        $user = auth()->user()->id;
        return view('frontend.manageruser.manageruser');
    }

    public function edit()
    {
        $user = auth()->user();
        return view('frontend.manageruser.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $id = auth()->user()->id;
        $user = Users::findOrFail($id);

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'phone' => 'required|regex:/^\d{9,15}$/',
        ]);

        if ($request->filled('password')) {
            $rules['password'] = 'required|string';
        }

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
        ];

        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->input('password'));
        }

        $user->update($data);
        return redirect()->route('edit-profile')->with('success', 'Thông tin người dùng đã được cập nhật thành công.');
    }
}
