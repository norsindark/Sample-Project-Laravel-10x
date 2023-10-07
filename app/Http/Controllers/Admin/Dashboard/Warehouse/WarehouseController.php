<?php

namespace App\Http\Controllers\Admin\Dashboard\Warehouse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function index() {
        return view('dashboard.warehouse.warehouse');
    }
}
