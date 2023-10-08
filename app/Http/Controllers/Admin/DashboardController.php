<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;
use App\Models\Products;
use App\Models\warehouses;


class DashboardController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $warehouses = warehouses::all();
        return view('dashboard.home.home', compact('warehouses'));
    }

}
