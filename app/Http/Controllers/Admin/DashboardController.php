<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Models\User;


class DashboardController extends Controller
{
    public function __construct()
    {
        // check role 
    }

    //index

    public $data=[];
    public function index() {
        
        $users = DB::select('SELECT * FROM users');
        // $userName = [];
        // foreach($users as $user) {
        //     $userName = $user->UserName;
        // }

        // dd($userName);
        return view('dashboard.index', compact('users'));
    }
}
