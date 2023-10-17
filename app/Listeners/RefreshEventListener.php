<?php

namespace App\Listeners;

use App\Events\RefreshEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Http\Controllers\User\HomeController;

class RefreshEventListener
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
    public function handle(RefreshEvent $event): void
    {
        // Gọi hàm updateProductCount mỗi khi sự kiện RefreshEvent được kích hoạt
        $controller = new HomeController(); 
        $controller->updateProductCount();
    }
}
