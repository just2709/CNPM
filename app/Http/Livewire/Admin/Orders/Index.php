<?php

namespace App\Http\Livewire\Admin\Orders;

use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
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
    public $from;
    public $to;
    public $customers;
    public $selected_customer_id = 'all';
    public $perpage = '20';


    public function mount()
    {
        $this->customers = User::where('role_as', '0')->get();
    }

    public function cancelId($id)
    {
        $this->cancelId = $id;
    }

    public function updatingCategory()
    {
        $this->resetPage();
    }
    public function render()
    {
        $query = Order::orderBy('created_at', 'desc');
        if($this->from || $this->to) {
            // $date = Carbon::createFromFormat('j F, Y', $data['due_date']);
            // dd($this->from);

            // dd($from);
            if($this->from && $this->to) {
                $from = Carbon::createFromFormat('Y-m-d', $this->from)->startOfDay();
                $to = Carbon::createFromFormat('Y-m-d', $this->to)->endOfDay();

                $query->where('created_at', '>=', $from);
                $query->where('created_at', '<=', $to);
            } else if($this->to) {
                $to = Carbon::createFromFormat('Y-m-d', $this->to)->endOfDay();
                $query->where('created_at', '<=', $to);
            } else {
                $from = Carbon::createFromFormat('Y-m-d', $this->from)->startOfDay();
                $query->where('created_at', '>=', $from);
            }
        }
        if($this->status === 'all' ) {
            $query = $query;
        } else {
            $query->where('status', $this->status);
        }

        if($this->selected_customer_id === 'all') {
            $query = $query;
        } else {
            $query->where('user_id', $this->selected_customer_id);
        }
        
        $orders = $query->paginate($this->perpage);
        $this->resetPage();
        return view('livewire.admin.orders.index', compact('orders'));
    }

    public function cancel() 
    {
        $order = Order::where('id', $this->cancelId)->first();
        try {
            $order->status = 'Đã hủy';
            $order->update();
            $this->alert('success', 'Đơn hàng được hủy thành công', [
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
