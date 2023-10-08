<?php

namespace App\Http\Controllers\Admin\Dashboard\Warehouse;

use App\Http\Controllers\Controller;
use App\Models\warehouses;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WarehouseController extends Controller
{
    public function index()
    {

        $warehouses = warehouses::with('products')->get();
        // $products = $warehouses->products;
        return view('dashboard.warehouse.warehouse', compact('warehouses'));
    }

    public function edit($id)
    {
        $warehouse = warehouses::findOrFail($id);
        return view('dashboard.warehouse.edit', compact('warehouse'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:0', // Kiểm tra giá trị quantity
        ]);

        $warehouse = warehouses::findOrFail($id);
        $warehouse->quantity = $request->input('quantity');

        if ($warehouse->save()) {
            // Sử dụng câu lệnh SQL để cập nhật status dựa trên quantity
            warehouses::where('quantity', 0)->update(['status' => 2]);
            warehouses::where('quantity', '>=', 1)->update(['status' => 1]); // Sử dụng '>'
            // Nếu lưu thành công, chuyển hướng đến trang dashboard.warehouse.warehouse
            return redirect()->route('dashboard.warehouse.index')->with('success', 'Quantity updated successfully.');
        } else {
            // Nếu lưu thất bại, quay lại trang trước đó với thông báo lỗi
            return redirect()->back()->with('error', 'Failed to update quantity.');
        }
    }
}
