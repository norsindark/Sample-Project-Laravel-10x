<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Cart;
use Illuminate\Http\Request;

use App\Models\Products;
use App\Models\cartItem;
use App\Models\ProductImage;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Categories::all();
        $this->middleware('guest')->except('frontend');
        return view('frontend.home.home', compact('categories'));
    }

    public function CheckRoleUser()
    {
        if (Auth::user()->email_verified_at == null) {
            Auth::logout();
            return redirect()->back()->with('error', 'Vui lòng xác thực email để đăng nhập!');
        }
        if (Auth::user()->role == 1) {
            return redirect()->route('dashboard.index');
        }
        if (Auth::user()->role == 2) {
            return redirect()->route('home');
        }
    }

    public function getCartData()
    {

        $userId = auth()->id();

        // check cart of user
        $cart = Cart::where('user_id', $userId)->first();

        // if empty create new cart
        if (!$cart) {
            $cart = Cart::create(['user_id' => $userId]);
        }

        $cartItems = $cart->items;

        return $cartItems;
    }

    public function getImage()
    {
        $product_images = ProductImage::all();

        return $product_images;
    }

    public function getProduct()
    {
        $products = Products::all();

        return $products;
    }

    public function updateProductCount()
    {
        $categories = Categories::all();

        foreach ($categories as $category) {
            $productCount = $category->products->count();
            $category->update(['product_count' => $productCount]);
        }

        return $categories;
    }

    public function getTotalPrice()
    {

        $userId = auth()->id();

        $cart = Cart::where('user_id', $userId)->first();

        $cartItems = $cart->items;

        // total price
        $totalPrice = 0;
        foreach ($cartItems as $cartItem) {
            $totalPrice += $cartItem->quantity * $cartItem->price;
        }

        return $totalPrice;
    }

    public function getQuantityWarehouse()
    {
        $product = Products::all();

        // $product_images = ProductImage::all();

        $warehouses = $product->warehouses;

        $quantityInWarehouse = 0;

        foreach ($warehouses as $warehouse) {
            $quantityInWarehouse += $warehouse->quantity;
        }

        return $quantityInWarehouse;
    }


    public function search(Request $request)
    {
        $search = $request->input('search');
        $sProducts = Products::where('ProductName', 'like', "%$search%")->get();
        return view('frontend.product.search', compact('sProducts', 'search'));
    }

    public function getProductNew()
    {
        $products = Products::orderBy('created_at', 'desc')->get();

        return $products;
    }


    public function getSale()
    {
        $bestSale = Products::orderBy('Sale', 'desc')->get();

        return $bestSale;
    }

    // public function getCategoryProduct()
    // {
    //     $category = Categories::all();
    //     // $products = Products::all();

    //     $getCategoryProduct = $category->products()->getTable();
    //     return $getCategoryProduct;
    // }
}
