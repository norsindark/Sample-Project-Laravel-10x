<?php

namespace App\Http\Controllers\Admin\Dashboard\Warehouse;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function index() {

        $warehouses = Products::all();
        return view('dashboard.warehouse.warehouse', compact('warehouses'));
    }
}
