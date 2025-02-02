<?php

namespace App\Http\Livewire\User\Cart;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CartCount extends Component
{
    public $cartCount;

    protected $listeners = ['CartAddedUpdated' => 'checkCartCount'];

    public function checkCartCount()
    {
        if(Auth::check())
        {
            return $this->cartCount = Cart::where('user_id', Auth()->user()->id)->count();
        } else {
            return $this->cartCount = 0;
        }

    }
    public function render()
    {
        $this->cartCount = $this->checkCartCount();
        return view('livewire.user.cart.cart-count', ['cartCount' => $this->cartCount]);
    }
}
