<?php

namespace App\View\Components;

use App\Models\Order;
use Illuminate\View\Component;

class OrderSidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.order-sidebar',[
            'orders'=>Order::where("status","successful")->count()
        ]);
    }
}
