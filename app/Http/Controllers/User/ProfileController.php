<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user_detail = UserDetail::where('user_id', Auth()->user()->id)->first();
        return view('user.profile', compact('user_detail'));
    }

    public function update(Request $request)
    {
        $user_id = Auth()->user()->id;
        UserDetail::updateOrCreate(
            [
                'user_id' => $user_id,
            ],
            [
                'full_name' => $request->fullname,
                'phone' => $request->phone,
                'city' => $request->city,
                'district' => $request->district,
                'ward' => $request->ward,
                'detailAddress' => $request->detailAddress,
                'user_id' => $user_id
            ], 
        );
        return redirect('/profile');
    }
}
