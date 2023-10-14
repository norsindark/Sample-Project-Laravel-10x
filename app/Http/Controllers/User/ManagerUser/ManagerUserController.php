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

    // public function update(Request $request)
    // {
    //     $id = auth()->user()->id;
    //     $user = User::findOrFail($id);

    //     // $request->validate([
    //     //     'name' => 'required|string',
    //     //     'email' => 'required|email',
    //     //     'address' => 'required|string',
    //     //     'phone' => 'required|regex:/^\d{9,15}$/',
    //     // ]);

    //     $rules = [
    //         // 'email' => 'email|unique:users,Email',
    //         'name' => 'required',
    //         'address' => 'required',
    //         'phone' => 'required|regex:/^\d{9,15}$/',
    //     ];

    //     $messages = [
    //         // 'email.email' => 'Invalid email format.',
    //         // 'email.unique' => 'Email already exists.',
    //         // 'username.unique' => 'Username already exists.',    
    //         'name.required' => 'Please update your full name.',
    //         'address.required' => 'Address is required.',
    //     ];

    //     if ($request->has('email')) {
    //         $rules['email'] = 'email|unique:users,Email';
    //         $messages['email.email'] = 'Invalid email format.';
    //         $messages['email.unique'] = 'Email already exists.';
    //     }


    //     $validator = Validator::make($request->all(), $rules, $messages);

    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }

    //     if ($request->filled('password')) {
    //         $rules['password'] = 'required|string';
    //     }

    //     $data = [
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         'address' => $request->input('address'),
    //         'phone' => $request->input('phone'),
    //     ];

    //     if ($request->filled('password')) {
    //         $data['password'] = bcrypt($request->input('password'));
    //     }

    //     $user->update($data);
    //     return redirect()->route('edit-profile')->with('success', 'Thông tin người dùng đã được cập nhật thành công.');
    // }

    public function update(Request $request)
    {
        $id = auth()->user()->id;
        $user = User::findOrFail($id);

        $rules = [];
        $messages = [];

        // mail
        if ($request->filled('email')) {
            $rules['email'] = 'email|unique:users,Email';
            $messages['email.email'] = 'Invalid email format.';
            $messages['email.unique'] = 'Email already exists.';
        }

        //pass
        if ($request->filled('password')) {
            $rules['password'] = 'required|string|min:6';
            // $messages['password.min:6'] = 'more than 6 charater.';
        }

        //phone
        if ($request->filled('phone')) {
            $rules['phone'] = 'regex:/^\d{9,15}$/';
        }

        // address
        if ($request->filled('address')) {
            $rules['address'] = 'string';
        }

        // name
        if ($request->filled('name')) {
            $rules['name'] = 'string';
        }

        if ($rules !== [] && $messages !== []) {
            $validator = Validator::make($request->all(), $rules, $messages);
        } else {
            $validator = [];
        }

        if ($validator !== []) {
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        }

        $data = [];

        //pass
        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->input('password'));
        }

        //phone
        if ($request->filled('phone')) {
            $data['phone'] = ($request->input('phone'));
        }

        // address
        if ($request->filled('address')) {
            $data['address'] = ($request->input('address'));
        }

        //name
        if ($request->filled('name')) {
            $data['name'] = ($request->input('name'));
        }

        //mail
        if ($request->filled('email')) {
            $data['email'] = $request->input('email');
        }

        // dd($data);

        if ($data == []) {
            return redirect()->route('edit-profile')->with('error', 'Không có gì để cập nhật.');
        } else {
            $user->update($data);
        }
        return redirect()->route('edit-profile')->with('success', 'Thông tin người dùng đã được cập nhật thành công.');
    }
}
