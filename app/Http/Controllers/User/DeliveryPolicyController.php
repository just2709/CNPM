<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeliveryPolicyController extends Controller
{
    public function delivery_policy()
    {
        return view('user.delivery_policy');
    }
}
