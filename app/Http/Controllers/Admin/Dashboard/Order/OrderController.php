<?php

namespace App\Http\Controllers\Admin\Dashboard\Order;

use App\Http\Controllers\Controller;
use App\Models\orders;
use App\Models\order_details;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        return view('dashboard.order.order');
    }

    public function createOrder(Request $request)
    {

        $cartItems = json_decode($request->input('cartItems'), true);
        $totalPrice = $request->input('totalPrice'); 
        // dd($totalPrice);

        // if (auth()->user()->name === null || auth()->user()->address === null || auth()->user()->phone === null) {
        //     return back()->with('error', 'Vui lòng cập nhật đầy đủ thông tin cá nhân để tiếp tục đặt hàng');
        // }

        $order = new Orders();
        $order->total_price = $totalPrice;
        // $order->recipient = auth()->user()->name;
        // $order->address = auth()->user()->address;
        // $order->phone = auth()->user()->phone;
        $order->user_id = auth()->user()->id; 
        $order->save();

        foreach ($cartItems as $cartItem) {
            // dd($cartItem);
            $orderDetail = new order_details();
            $orderDetail->order_id = $order->id;
            $orderDetail->product_id = $cartItem['product_id']; 
            $orderDetail->quantity = $cartItem['quantity'];
            $orderDetail->price = $cartItem['price']; 
            $orderDetail->save();
        }

        return redirect()->route('thanh-toan')->with('success', 'Đã đặt hàng thành công!');
    }
}
