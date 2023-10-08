<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\ProductCreated;
use App\Models\warehouses;

class UpdateWarehouse
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ProductCreated $event)
    {
        $product = $event->product;

        // Kiểm tra xem sản phẩm đã tồn tại trong warehouses chưa
        $warehouse = Warehouses::where('Id_Product', $product->Id_Product)->first();

        if ($warehouse) {
            // Nếu sản phẩm đã tồn tại trong warehouses, tăng quantity
            $warehouse->quantity += 1;
            $warehouse->save();
        } else {
            // Nếu sản phẩm chưa tồn tại, tạo một bản ghi mới trong warehouses
            Warehouses::create([
                'Id_Product' => $product->Id_Product,
                'quantity' => 1, // Khởi tạo quantity là 1 khi thêm sản phẩm mới
                'status' => 1,   // Khởi tạo status là 1 khi thêm sản phẩm mới
            ]);
        }
    }
}
