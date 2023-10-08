<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\ProductCreated;
use App\Models\Warehouse;

class CreateWarehouseEntry
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
        // Tạo bản ghi kho hàng dựa trên sản phẩm được tạo
        Warehouse::create([
            'ProductId' => $event->product->ProductId,
            'Id_Product' => $event->product->Id_Product,
            // Các trường khác của kho hàng nếu cần
        ]);
    }
}
