<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CareController extends Controller
{
    public function care()
    {
        return view('user.care');
    }
}
