<?php

namespace App\Http\Controllers\User;

use App\Models\Products;
use App\Models\Categories;
use App\Http\Controllers\Controller;
use App\Models\warehouses;
use App\Models\ProductImage;

class ProductController extends Controller
{

    public function productDetails($productsName, $ProductId)
    {
        $product = Products::findOrFail($ProductId);
        $product_images = ProductImage::all();

        $warehouses = $product->warehouses;

        $quantityInWarehouse = 0;

        foreach ($warehouses as $warehouse) {
            $quantityInWarehouse += $warehouse->quantity;
        }

        $error = null;

        if ($quantityInWarehouse <= 0) {
            $error = "Sản phẩm đã hết hàng!";
            return view('frontend.product.product', compact('product', 'product_images', 'quantityInWarehouse','error'));
        }

        return view('frontend.product.product', compact('product', 'product_images', 'quantityInWarehouse','error'));
    }
}
