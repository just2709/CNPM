<?php

namespace App\Http\Livewire\User\Cart;

use App\Models\Cart;
use Exception;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Index extends Component
{
    use LivewireAlert;

    public $cart;
    public $total;
    public $deleteId;

    public function mount()
    {
    }
    
    public function render()
    {
        $this->cart = Cart::where('user_id', Auth()->user()->id)->get();
        return view('livewire.user.cart.index');
    }

    public function decreQuantity(int $cartID)
    {
        $cart = Cart::where('id', $cartID)->where('user_id', auth()->user()->id)->first();
        if($cart)
        {
            if($cart->quantity > 1)
            {
                $cart->decrement('quantity');
                $this->alert('success', 'Cập nhật thành công số lượng');
            } else {
                $this->alert('warning', 'Bình tĩnh');
            }
            
        } else {
            $this->alert('warning', 'Lỗiii');
        }
        
    }

    public function increQuantity(int $cartID)
    {
        $cart = Cart::where('id', $cartID)->where('user_id', auth()->user()->id)->first();
        if($cart)
        {
            if($cart->product_color_id != null)
            {
                if($cart->productColor->quantity > $cart->product->quantity){
                    $cart->increment('quantity');
                    $this->alert('success', 'Cập nhật thành công số lượng');
                }
                else {
                    $this->alert('warning', 'Sản phẩm này chỉ còn '.$cart->productColor->quantity.' sản phẩm');
                }
            } else {
                if($cart->product->quantity > $cart->quantity){
                    $cart->increment('quantity');
                    $this->alert('success', 'Cập nhật thành công số lượng');
                } else {
                    $this->alert('warning', 'Sản phẩm này chỉ còn '.$cart->product->quantity.' sản phẩm');
                }
            }
        } else {
            $this->alert('warning', 'Lỗiii');
        }
    }
    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        try {
            $id = $this->deleteId;
            $cart = Cart::where('user_id', auth()->user()->id)->where('id', $id);
            if($cart) {
                $cart->delete();
                $this->alert('success', 'Xóa thành công', [
                    'position' => 'center',
                    'timer' => 1500,
                    'toast' => false,
                ]);
            } else {
                $this->alert('waning', 'Có gì đó không ổn');
            }
        } catch (Exception $e) {
            $this->alert('error', 'Lỗi. Vui lòng thử lại sau', [
                'position' => 'center',
                'timer' => 1500,
                'toast' => false,
            ]);
        }
        
    }

}
