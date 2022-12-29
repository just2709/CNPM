<div class="container py-3 py-md-5">
  <div class="row">
    <div class="col-md-12">
      <div class="p-3">
        <h4>
          Chi tiết đơn hàng - <span class="fw-bold">{{ $order->status}}</span>
        </h4>
        <div class="row my-3">
          <div class="col-4">
            <div class="card bg-light p-2">
              <h5 class="border-bottom">Thông tin người nhận</h5>
              <p class="fw-bold">{{ $order->full_name }}</p>
              <p>Địa chỉ: {{ $order->detailAddress.'-'.$order->ward.'-'.$order->district.'-'.$order->city}}</p>
              <p>Điện thoại: {{ $order->phone}}</p>
            </div>
          </div>
          <div class="col-4">
            <div class="card bg-light p-2">
              <h5 class="border-bottom">Hình thức giao hàng</h5>
              <p>Giao trước {{ $order->created_at->addDays(5)->format('H:i d-m-Y') }}</p>
              <p>Đơn vị vẩn chuyển: <span class="fw-bold">Express</span></p>
              <p>Phí vận chuyển: 20.000đ</p>
            </div>
          </div>
          <div class="col-4">
            <div class="card bg-light p-2">
              <h5 class="border-bottom">Hình thức thanh toán</h5>
              <p>{{ $order->payment_mode === 'onDelivery' ? 'Thanh toán khi nhận hàng' : $order->payment_mode}}</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="table-responsive text-center">
            <table class="table table-striped table-hover table-bordered">
              <thead>
                <tr>
                  <th scope="col">STT</th>
                  <th scope="col">Ảnh</th>
                  <th scope="col">Sản phẩm</th>
                  <th scope="col">Số lượng</th>
                  <th scope="col">Giá</th>
                  <th scope="col">Thành tiền</th>
                </tr>
              </thead>
              <tbody>
                @forelse($order->orderDetails as $detail)
                <tr>
                  <th>
                    {{ $loop->iteration }}
                  </th>
                  <th style="width: 100px">
                    @if(count($detail->product->productImages) > 0)
                    <img class="w-100" src="{{ asset($detail->product->productImages{0}['image'] ) }}" />
                    @else
                    <img class="w-100" src="https://whetstonefire.org/wp-content/uploads/2020/06/image-not-available.jpg" />
                    @endif
                  </th>
                  <th>
                    <p class="fw-semibold">
                      {{$detail->product->name}}
                      @if($detail->productColor)
                      <span class="fw-lighter"> | Màu:{{$detail->productColor->color->name}}</span>
                      @endif
                    </p>
                  </th>
                  <th>
                    {{ $detail->quantity}}
                  </th>
                  <th>
                    {{ $detail->price}}
                  </th>
                  <th>
                    {{ $detail->quantity * $detail->price }}
                  </th>
                </tr>
                @empty
                <h4>Chưa có đơn hàng nào</h4>
                @endforelse
              </tbody>
            </table>
          </div>
          <h4>Tổng cộng: <span class="text-danger fw-bold">{{ number_format($order->total + 20000)}}</span>đ</h4>
        </div>
      </div>
    </div>
  </div>
</div>
