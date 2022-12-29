<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Models\Order;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.orders.index');
    }

    public function detail($id)
    {
        return view('admin.orders.detail', compact('id'));
    }

    public function print($id)
    {
        $order = Order::where('id', $id)->first();
        return view('admin.orders.receipt', compact('order'));
    }

    public function sendMail($orderId)
    {
        $order = Order::findOrFail($orderId);
        try {
            Mail::to($order->email)->send(new SendMail($order));
            return redirect('admin/orders/'.$orderId);
        } catch (Exception $e) {
            dd($e);
        }
    }
}
