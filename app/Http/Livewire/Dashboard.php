<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Dashboard extends Component
{
    public $url_orderQuantityByYear;
    public $url_turnoverByYear;
    public $picked_year;
    public $month;

    public function mount()
    {
        $this->month = Carbon::now()->format('Y-m');
        // $this->month = '2022-10';
        $this->picked_year = Carbon::now()->year;
    }

    public function render()
    {
        $time = explode("-",$this->month);
        $this->url_orderQuantityByYear = route("orderQuantityByYear", ['year' => $this->picked_year]);
        $this->url_turnoverByYear = route("turnoverByYear", ['year' => $this->picked_year]);

        $sold = Order::where('status', 'Đã giao')->whereYear('created_at', $time['0'])->whereMonth('created_at', $time['1'])->count();
        $turnover = Order::where('status', 'Đã giao')->whereYear('created_at', $time['0'])->whereMonth('created_at', $time['1'])->sum('total');
        $customers = User::where('role_as', '0')->whereYear('created_at', $time['0'])->whereMonth('created_at', $time['1'])->count();


        $top5Customers = DB::table('users')
            ->selectRaw('users.id, users.name, users.email, sum(total) as total, count(*) as quantity')
            ->where('role_as', '0')
            ->whereYear('orders.created_at', $time['0'])
            ->whereMonth('orders.created_at', $time['1'])
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->whereNull('orders.deleted_at')
            ->where('status', 'Đã giao')
            ->groupBy('users.id', 'users.name', 'users.email')
            ->orderBy('total', 'desc')
            ->take(5)
            ->get();
        
        $top5Products = DB::table('products')
            ->selectRaw('products.id, products.name, sum(order_detail.quantity) as total')
            ->join('order_detail', 'products.id', '=', 'order_detail.product_id')
            ->whereYear('order_detail.created_at', $time['0'])
            ->whereMonth('order_detail.created_at', $time['1'])
            ->whereNull('order_detail.deleted_at')
            ->groupBy('products.id', 'products.name')
            ->orderBy('total', 'desc')
            ->take(5)
            ->get();
        // dd($top5Products->pluck('id'));
        return view('livewire.dashboard', compact('sold', 'turnover', 'customers', 'top5Customers', 'top5Products'));
    }
}
