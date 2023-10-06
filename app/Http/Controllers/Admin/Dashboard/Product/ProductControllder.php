<?php

namespace App\Http\Controllers\Admin\Dashboard\Product;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductControllder extends Controller
{


    public function index()
    {
        $categories = Categories::all();
        $products = Products::all();

        $products = Products::with('categories')->get();
        return view('dashboard.product.index', compact('products', 'categories'));
    }

    public function create()
    {
        $categories = Categories::all();
        return view('dashboard.product.create',  compact('categories'));
    }

    //create

    public function store(Request $request)
    {
        $request->validate([
            'Id_Product' => 'required|string|unique:products,Id_Product',
            'ProductName' => 'required|string',
            'Description' => 'required|string',
            'Price' => 'required|numeric|min:0',
            'Sale' => 'required|numeric|min:0|max:100',
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Status' => 'required|integer|in:1,2',
            'quantity' => 'required|integer|min:1',
            'expire' => 'required|date|after_or_equal:now',
        ]);

        // Kiểm tra xem có hình ảnh được tải lên không
        if (!$request->hasFile('Image')) {
            return redirect()->back()->with('error', 'Please upload an image.')->withInput();
        }

        // Xử lý lưu hình ảnh vào thư mục public/images
        $image = $request->file('Image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        // Lưu sản phẩm vào cơ sở dữ liệu với đường dẫn đến hình ảnh
        $product = new Products;
        $product->Id_Product = $request->input('Id_Product');
        $product->ProductName = $request->input('ProductName');
        $product->Description = $request->input('Description');
        $product->Price = $request->input('Price');
        $product->Sale = $request->input('Sale');
        $product->Image = 'images/' . $imageName; // Lưu đường dẫn đến hình ảnh
        $product->Status = $request->input('Status');
        $product->quantity = $request->input('quantity');
        $product->expire = $request->input('expire');
        $product->save();

        // Kiểm tra xem danh mục có được chọn không
        if ($request->has('categories')) {
            // Gán danh mục cho sản phẩm
            $product->categories()->attach($request->input('categories'));
        }

        return redirect()->route('dashboard.product.index')->with('success', 'Product created successfully.');
    }

    public function destroy($ProductId)
    {
        // Tìm product cần xóa
        $product = Products::findOrFail($ProductId);

        // Thực hiện xóa
        $product->delete();

        // Chuyển hướng hoặc trả về trang danh sách product sau khi xóa
        return redirect()->route('dashboard.product.index')->with('success', 'product deleted successfully.');
    }
}
