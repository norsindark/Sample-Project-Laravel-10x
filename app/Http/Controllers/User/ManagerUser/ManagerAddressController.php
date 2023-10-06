<?php

namespace App\Http\Controllers\User\ManagerUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagerAddressController extends Controller
{
    //
    public function index() {
        return view('frontend.manageruser.manageraddress');
    }
}
