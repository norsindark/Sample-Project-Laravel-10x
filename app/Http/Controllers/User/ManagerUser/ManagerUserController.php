<?php

namespace App\Http\Controllers\User\ManagerUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ManagerUserController extends Controller
{
    //
    public function index()
    {
        // $user = User::findOrFail($id);
        return view('frontend.manageruser.manageruser');
    }

    
}
