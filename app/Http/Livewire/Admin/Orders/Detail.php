<?php

namespace App\Http\Livewire\Admin\Orders;

use App\Models\Order;
use Exception;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Detail extends Component
{
    public $order_id;
    public $selected_status = 'current';
    use LivewireAlert;


    public function render()
    {
        $order = Order::where('id', $this->order_id)->first();
        return view('livewire.admin.orders.detail', compact('order'));
    }

    public function updateStatus()
    {
        try {
            $order = Order::where('id', $this->order_id)->first();
            if($this->selected_status !== 'current')
            {
                $order->status = $this->selected_status;
            }
            $order->update();
            $this->alert('success', 'Cập nhật trạng thái thành công', [
                'position' => 'center',
                'timer' => 2000,
                'toast' => false,
            ]);
        } catch (Exception $e) {
            $this->alert('error', 'Lỗi. Vui lòng thử lại sau', [
                'position' => 'center',
                'timer' => 2000,
                'toast' => false,
            ]);
        }
        
    }
}
