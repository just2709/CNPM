<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('user.orders.index');
    }

    public function detail($id)
    {
        return view('user.orders.detail', compact('id'));
    }
}
