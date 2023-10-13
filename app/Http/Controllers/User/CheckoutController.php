<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\orders;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('frontend/checkout.checkout');
    }

    // public function processPayment(Request $request)
    // {


    //     return redirect()->route('checkout')->with('success', 'Thanh toán thành công!');
    // }

    // public function processCheckout(Request $request)
    // {
    //     $order = orders::find(auth()->user()->id);

    //     $order->recipient = $request->input('nameget');
    //     $order->phone = $request->input('phoneget');
    //     $order->address = $request->input('addressget');
    //     // $order = $request->input('payment_method');

    //     return redirect()->route('checkout')->with('success', 'Đặt hàng thành công!');
    // }
}
