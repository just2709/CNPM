<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function changePassword()
    {
        return view('user.change_password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'string', 'min:8'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ],[
            'current_password.required' => 'Vui lòng không để trống',
            'password.required' => 'Vui lòng không để trống',
            'current_password.min' => 'Mật khẩu phải có tối thiểu 8 ký tự',
            'password.min' => 'Mật khẩu phải có tối thiểu 8 ký tự',
            'password.confirmed' => 'Mật khẩu nhập lại không khớp'
        ]);
        $currentPasswordStatus = Hash::check($request->current_password, auth()->user()->password);
        if($currentPasswordStatus) {
            User::findOrFail(Auth::user()->id)->update([
                'password' => Hash::make($request->password)
            ]);
            return redirect('/');
        } else {
            return redirect()->back()->with('message', 'Sai mật khẩu');
        }
    }
}
