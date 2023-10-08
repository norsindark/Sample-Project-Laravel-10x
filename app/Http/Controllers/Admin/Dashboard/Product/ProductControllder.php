<?php

namespace App\Http\Controllers\Admin\Dashboard\Product;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Events\ProductCreated;
use App\Models\warehouses;

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
            'expire' => 'required|date|after_or_equal:now',
            'quantity' => 'required|integer|min:1', // Số lượng sản phẩm
        ]);

        // Kiểm tra xem có hình ảnh được tải lên không
        if (!$request->hasFile('Image')) {
            return redirect()->back()->with('error', 'Please upload an image.')->withInput();
        }

        // Xử lý lưu hình ảnh vào thư mục public/images
        $image = $request->file('Image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        // Số lượng sản phẩm được nhập bởi người dùng
        $quantity = $request->input('quantity');

        // Tạo sản phẩm mới và lưu vào bảng "products"
        $product = new Products;
        $product->Id_Product = $request->input('Id_Product');
        $product->ProductName = $request->input('ProductName');
        $product->Description = $request->input('Description');
        $product->Price = $request->input('Price');
        $product->Sale = $request->input('Sale');
        $product->Image = 'images/' . $imageName; // Lưu đường dẫn đến hình ảnh
        $product->expire = $request->input('expire');
        $product->save();

        // Kiểm tra xem danh mục có được chọn không
        if ($request->has('categories')) {
            // Gán danh mục cho sản phẩm
            $product->categories()->attach($request->input('categories'));
        }

        // Kiểm tra và cập nhật số lượng trong bảng "warehouses"
        // $warehouse = warehouses::where('Id_Product', $product->Id_Product)->first();

        // if ($warehouse) {
        //     // Nếu sản phẩm đã tồn tại trong kho, tăng số lượng
        //     $warehouse->quantity += $quantity;
        //     $warehouse->save();
        // } else {
        //     // Nếu sản phẩm chưa tồn tại, thêm một bản ghi mới
        //     warehouses::create([
        //         'Id_Product' => $product->Id_Product,
        //         'quantity' => $quantity,
        //         // Các trường khác của kho hàng nếu cần
        //     ]);
        // }

        // event created warehouse

        for ($i = 0; $i < $quantity; $i++) {
            event(new ProductCreated($product));
        }

        return redirect()->route('dashboard.product.index')->with('success', 'Products created successfully.');
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


    //show form edit
    public function edit($ProductId)
    {
        $categories = Categories::all();
        $product = Products::findOrFail($ProductId);

        return view('dashboard.product.edit',  compact('product', 'categories'));
    }

    public function update(Request $request, $ProductId)
    {
        // Validate the form data
        $request->validate([
            'ProductName' => 'required',
            'Description' => 'required',
            'Price' => 'required|numeric',
            'Sale' => 'required|numeric',
            'expire' => 'required|date',
            'categories' => 'required|array',
            'Image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Tối đa 2MB và chỉ cho phép các định dạng hình ảnh phù hợp
        ]);

        // tìm sp = id
        $product = Products::findOrFail($ProductId);

        // update vào fields
        $product->ProductName = $request->input('ProductName');
        $product->Description = $request->input('Description');
        $product->Price = $request->input('Price');
        $product->Sale = $request->input('Sale');
        // $product->quantity = $request->input('quantity');
        $product->expire = $request->input('expire');
        // $product->Status = $request->input('Status');

        // kiểm tra img trc khi update
        if ($request->hasFile('Image')) {

            $image = $request->file('Image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // update hình của sp vào field
            $product->Image = 'images/' . $imageName;
        }

        // lưu sp
        $product->save();

        // đồng bộ hóa danh mục-sp mqh nhiều-nhiều
        $product->categories()->sync($request->input('categories'));

        // chuyển về index
        return redirect()->route('dashboard.product.index', ['ProductId' => $product->ProductId])
            ->with('success', 'Product updated successfully');
    }
}
