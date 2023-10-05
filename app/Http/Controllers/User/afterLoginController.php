<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class afterLoginController extends Controller
{
    //
    public function afterLogin() {
        return view('frontend.home.afterLogin');
    }
}
