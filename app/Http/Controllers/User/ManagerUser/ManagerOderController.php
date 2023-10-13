<?php

namespace App\Http\Controllers\User\ManagerUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagerOderController extends Controller
{
    //
    public function index()
    {
        $user = auth()->user()->id;
        return view('frontend.manageruser.manageroder', compact('user'));
    }

   
}
