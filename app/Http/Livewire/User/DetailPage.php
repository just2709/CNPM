<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class DetailPage extends Component
{
    use LivewireAlert;

    public $product_id;
    public $quantity = 1;
    public $color;
    public $quantityOfProductColor = 0;
    public $quantityOfProductNoColor = 0;

    public $product;

    public $related_products;

    public function mount()
    {
        $this->product = Product::where('id', $this->product_id)->firstOrFail();
        $this->related_products = Product::where('material_id', $this->product->material_id)->take(12)->get();
    }


    public function render()
    {
        if($this->quantity <= 0)
        {
            $this->quantity = 1;
        }
        if($this->color)
        {
            $productColor = $this->product->productColor()->where('id', $this->color)->firstOrFail();
            $this->quantityOfProductColor = $productColor->quantity;
        } else {
            $this->quantityOfProductNoColor = $this->product->quantity;
        }
        $product = $this->product;
        return view('livewire.user.detail-page', compact('product'));
    }

    public function addToCart(int $productID)
    {
        if(Auth::check())
        {
            if($this->product->where('id', $productID)->where('status', '0')->exists())
            {

                //truong hop san pham co mau
                if($this->product->productColor()->count() >= 1)
                {
                    if($this->quantityOfProductColor != null)
                    {
                        if(Cart::where('user_id', auth()->user()->id)
                            ->where('product_id', $productID)
                            ->where('product_color_id', $this->color)
                            ->exists())
                        {
                            $this->alert('warning', 'Sản phẩm này đã có trong giỏ hàng');
                        }
                        else
                        {
                            $productColor = $this->product->productColor()->where('id', $this->color)->first();
                            if($productColor->quantity > 0)
                            {
                                if($productColor->quantity >= $this->quantity)
                                {
                                    Cart::create([
                                        'user_id' => auth()->user()->id,
                                        'product_id' => $productID,
                                        'product_color_id' => $this->color,
                                        'quantity' => $this->quantity
                                    ]);
                                    $this->emit('CartAddedUpdated');
                                    $this->alert('success', 'Thêm thành công sản phẩm', [
                                        'position' => 'center',
                                        'timer' => 1500,
                                        'toast' => false,
                                    ]);
                                } else {
                                    // chi con lai ... san pham
                                    $this->alert('warning', 'Sản phẩm này chỉ còn '.$productColor->quantity.' sản phẩm');
                                }
                            } else {
                                $this->alert('success', 'Số lượng phải lớn hơn 0');
                            }
                        }
                        
                    } else if($this->color == null && $this->quantityOfProductColor === 0) {
                        $this->alert('warning', 'Vui lòng chọn màu');
                    } else {
                        $this->alert('warning', 'Sản phẩm có màu này không còn');
                    }
                }
                else
                {
                    if(Cart::where('user_id', auth()->user()->id)->where('product_id', $productID)->exists())
                    {
                        $this->alert('warning', 'Sản phẩm đã có trong giỏ hàng');
                    } else {
                        if($this->product->quantity > 0) {
                            if($this->product->quantity >= $this->quantity) {
                                Cart::create([
                                    'user_id' => auth()->user()->id,
                                    'product_id' => $productID,
                                    'quantity' => $this->quantity
                                ]);
                                $this->emit('CartAddedUpdated');
                                $this->alert('success', 'Thêm thành công sản phẩm', [
                                    'position' => 'center',
                                    'timer' => 1500,
                                    'toast' => false,
                                ]);
                            } else {
                                $this->alert('warning', 'Sản phẩm này chỉ còn '.$this->product->quantity.' sản phẩm');
                            }
                        } else {
                            $this->alert('warning', 'Sản phẩm này chỉ còn '.$this->product->quantity.' sản phẩm');
                        }
                    }
                    
                }
            } else {
                $this->alert('warning', 'Có gì đó không ổn!!!');
            }
            
        }
        else
        {
            return redirect('login');
        }
    }
}
