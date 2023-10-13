<?php

namespace App\Http\Controllers\User\ManagerUser;

use App\Http\Controllers\Controller;
use App\Models\orders;
use Illuminate\Http\Request;

class ManagerOderController extends Controller
{
    //
    public function index()
    {
        $user = auth()->user();
        $orders = $user->orders;

        return view('frontend.manageruser.manageroder', compact('orders'));
    }

    public function removeOrder(Request $request, $orderId)
    {

        // $request->validate([
        //     'status' => 'required|in:5',
        // ]);

        $order = orders::findOrFail($orderId);
        if ($order->status == 1) {
            $order->status = $request->input('status');
            $order->save();
        }
        // else if ($order->status == 5){

        // } 
        
        else {
            return redirect()->route('manageroder')->with('error', 'Đơn hàng đã được xác nhận, không thể hủy. Vui lòng liên hệ quản lý để được giúp đỡ.');
        }
        return redirect()->route('manageroder')->with('success', 'Trạng thái đơn hàng đã được cập nhật.');
    }
}
