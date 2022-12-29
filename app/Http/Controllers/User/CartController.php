<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart()
    {
        if(Auth::check())
        {
            return view('user.cart');
        } else {
            return redirect('login');
        }

    }
}
