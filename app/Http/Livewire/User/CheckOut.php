<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\UserDetail;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CheckOut extends Component
{
    use LivewireAlert;

    public $cart, $total;
    public $fullname, $email, $phone, $city, $district, $ward, $detailAddress; 
    public $payment_method = 'onDelivery';

    public function rules()
    {
        return [
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'city' => 'required',
            'district' => 'required',
            'ward' => 'required',
            'detailAddress' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'fullname.required' => 'Vui vòng điền họ và tên',
            'email.required' => 'Vui lòng điền email',
            'email.email' => 'Không đúng định dạng',
            'phone.required' => 'Vui lòng điền số điện thoại',
            'city.required' => 'Vui lòng điền tỉnh/thành phố',
            'district.required' => 'Vui lòng điền quận/huyện',
            'ward.required' => 'Vui lòng điền phường/xã',
            'detailAddress.required' => 'Vui lòng điền địa chỉ cụ thể cụ thể',
        ];
    }

    public function totalMoney()
    {

        $this->cart = Cart::where('user_id', auth()->user()->id)->get();
        $total = 0;
        foreach($this->cart as $item)
        {
            $total += $item->product->sell_price * $item->quantity;
        }
        return $total;
    }

    public function placeOrder()
    {
        $this->validate();
        DB::beginTransaction();
        try {
            $order = Order::create([
                'user_id' => auth()->user()->id,
                'tracking_no' => Str::random(20),
                'full_name' => $this->fullname,
                'email' => $this->email, 
                'phone' => $this->phone, 
                'pincode' => '0000', 
                'city' => $this->city, 
                'district' => $this->district, 
                'ward' => $this->ward, 
                'detailAddress' => $this->detailAddress, 
                'status' => 'Chờ xác nhận', 
                'payment_mode' => $this->payment_method,
                'payment_id' => 0,
                'total' => $this->total
            ]);

            foreach ($this->cart as $item)
            {
                $orderDetail = OrderDetail::create([
                    'order_id' => $order->id,
                    'product_id' => $item->product_id,
                    'product_color_id' => $item->product_color_id,
                    'quantity' => $item->quantity,
                    'price' => $item->product->sell_price
                ]);
                if($item->product_color_id != null) {
                    $item->productColor()->where('id', $item->product_color_id)->decrement('quantity', $item->quantity);
                } else {
                    $item->product()->where('id', $item->product_id)->decrement('quantity', $item->quantity);
                }
            }
            

            DB::commit();
        } catch(Exception $e) {
            DB::rollback();
            $this->alert('warning', 'Lỗi');
        }
        
    }

    public function codOrder()
    {
        DB::beginTransaction();
        try {
            // dd(auth()->user()->id);
            $this->placeOrder();
            Cart::where('user_id', auth()->user()->id)->delete();
            DB::commit();
            $this->alert('success', 'Tiến hành đặt hàng thành công');
            return redirect('/');
        } catch(Exception $e) {
            DB::rollback();
            if(empty($this->fullname) || empty($this->phone) || empty($this-> city) || empty($this->district) || empty($this->ward) || empty($this->detailAddress))
            {
                $this->alert('warning', 'Vui lòng nhập đủ thông tin');
            }
            else {
                $this->alert('warning', 'Lỗi');
            }
        }
    }

    public function mount() 
    {
        $user_detail = UserDetail::where('user_id', Auth()->user()->id)->first();
        
        $this->fullname = $user_detail->full_name ?? '';
        $this->phone = $user_detail->phone ?? '';
        $this->city = $user_detail->city ?? '';
        $this->district = $user_detail->district ?? '';
        $this->ward = $user_detail->ward ?? '';
        $this->detailAddress = $user_detail->detailAddress ?? '';
    }

    public function render()
    {
        $this->email = auth()->user()->email;
        $this->total = $this->totalMoney();
        
        return view('livewire.user.check-out');
    }
}
