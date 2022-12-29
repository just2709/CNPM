<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
  integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>
<link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendors/base/vendor.bundle.base.css') }}" />
<!-- endinject -->
<!-- plugin css for this page -->
<link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}" />
<!-- End plugin css for this page -->
<!-- inject:css -->
<link rel="stylesheet" href="{{ asset('admin/css/style.css') }}" />
<!-- endinject -->
<div class="container py-3 py-md-5 border border-dark border-2">
  <div class="row">
    <div class="col-md-12">
      <div class="p-3">
        <div class="d-flex justify-content-between">
          <h4>Hóa đơn bán hàng</h4>
          <p>
            Ngày đặt hàng: <span class="fw-bold fs-6">{{$order->created_at->format('H:i d-m-Y')}}</span>
          </p>
        </div>

        <div class="row my-3">
          <div class="col-4">
            <div class="card bg-light p-2">
              <h5 class="border-bottom">Từ:</h5>
              <p>Cửa hàng cây cảnh mini</p>
              <p>Số 3 Cầu Giấy, Láng Thượng, Đống Đa, Hà Nội</p>
              <p>SĐT: 0987654321</p>
            </div>
          </div>
          <div class="col-4">
            <div class="card bg-light p-2">
              <h5 class="border-bottom">Tới:</h5>
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
        </div>
        <div class="card">
          <div class="table-responsive text-center">
            <table class="table table-striped table-hover table-bordered">
              <thead>
                <tr>
                  <th scope="col">STT</th>
                  <th scope="col">Sản phẩm</th>
                  <th scope="col">Số lượng</th>
                  <th scope="col">Giá</th>
                  <th scope="col">Thành tiền</th>
                </tr>
              </thead>
              <tbody>
                @forelse($order->orderDetails as $detail)
                <tr>
                  <td>
                    {{ $loop->iteration }}
                  </td>
                  <td>
                    <p class="fw-semibold">
                      {{$detail->product->name}}
                      @if($detail->productColor)
                      <span class="fw-lighter"> | Màu:{{$detail->productColor->color->name}}</span>
                      @endif
                    </p>
                  </td>
                  <td>
                    {{ $detail->quantity}}
                  </td>
                  <td>
                    {{ $detail->price}}
                  </td>
                  <td>
                    {{ $detail->quantity * $detail->price }}
                  </td>
                </tr>
                @empty
                <td colspan="6">Chưa có sản phẩm nào</td>
                @endforelse
                <td class="text-end" colspan="5">
                  <span class="fw-bold">Tổng: {{ number_format($order->total)}}</span
                  >đ
                </td>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card d-flex mt-2 flex-row">
          <div class="w-50 w-50 m-3 p-2 pb-5 text-center">
            <h6>Tổng</h6>
            <h1>
              <span class="fw-bold">{{ number_format($order->total + 20000)}}</span
              >đ
            </h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

