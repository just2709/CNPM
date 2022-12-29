<?php

namespace App\Http\Livewire\User\Orders;

use App\Models\Order;
use Livewire\Component;

class Detail extends Component
{
    public $order_id;
    public function render()
    {
        $order = Order::where('user_id', auth()->user()->id)->where('id', $this->order_id)->first();
        return view('livewire.user.orders.detail', compact('order'));
    }
}
