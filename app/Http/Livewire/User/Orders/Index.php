<?php

namespace App\Http\Livewire\User\Orders;

use App\Models\Order;
use Exception;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use LivewireAlert;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $cancelId;
    public $status = 'all';

    public function cancelId($id)
    {
        $this->cancelId = $id;
    }
    public function render()
    {
        if($this->status === 'all' ) {
            $orders = Order::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->paginate(10);
        } else {
            $orders = Order::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->where('status', $this->status)->paginate(10);
        }
        return view('livewire.user.orders.index', compact('orders'));
    }

    public function cancel() 
    {
        $order = Order::where('user_id', auth()->user()->id)->where('id', $this->cancelId)->first();
        try {
            $order->status = 'Đã hủy';
            $order->update();
            $this->alert('success', 'Đơn hàng được hủy thành công');
        } catch (Exception $e) {
            $this->alert('warning', 'Lỗi');
        }
        
    }
}
