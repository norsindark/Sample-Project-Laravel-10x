<?php

namespace App\Http\Controllers\User\ManagerUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagerUserController extends Controller
{
    //
    public function index()
    {
        return view('frontend.manageruser.manageruser');
    }

    
}
