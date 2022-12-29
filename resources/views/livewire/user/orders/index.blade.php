@if(count($orders) == 0)
<div class="container py-3 py-md-5" style="margin-bottom: 300px !important;">
@else
<div class="container py-3 py-md-5">
@endif
  <div class="row">
    <div class="col-md-12">
      <div class="p-3">
        <div class="d-flex justify-content-between">
          <h3>Đơn hàng của tôi</h3>

          <div class="p-2">
            Trạng thái
            <select wire:model="status" class="form-select" aria-label="Default select example">
              <option value="all">Tất cả</option>
              <option value="Chờ xác nhận">Chờ xác nhận</option>
              <option value="Đang xử lý">Đang xử lý</option>
              <option value="Đang vận chuyển">Đang vận chuyển</option>
              <option value="Đã giao">Đã giao</option>
              <option value="Đã hủy">Đã hủy</option>
              <option value="Giao hàng thất bại">Giao hàng thất bại</option>
            </select>
          </div>
        </div>
        <div class="table-responsive text-center">
          <table class="table table-striped table-hover table-bordered ">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Họ tên người nhận</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Hình thức thanh toán</th>
                <th scope="col">Thời gian đặt hàng</th>
                <th scope="col">Tổng tiền</th>
                <th scope="col">Hành động</th>
              </tr>
            </thead>
            <tbody>
              @forelse($orders as $order)
              <tr>
                <th>
                  {{ ($orders->currentPage() - 1) * $orders->perPage() + $loop->iteration }}
                </th>
                <td>{{ $order->full_name}}</td>
                <td>{{ $order->phone}}</td>
                <td>{{ $order->detailAddress.'-'.$order->ward.'-'.$order->district.'-'.$order->city}}</td>
                <td>{{ $order->status}}</td>
                <td>{{ $order->payment_mode === 'onDelivery' ? 'Thanh toán khi nhận hàng' : $order->payment_mode}}</td>
                <td>{{ $order->created_at->format('H:i d-m-Y')}}</td>
                <td>{{ $order->total}}</td>
                <td>
                  <a href="orders/{{$order->id}}" type="button" class="btn btn-primary text-white"> Chi tiết </a>
                  @if($order->status === 'Chờ xác nhận')
                  <button wire:click="cancelId({{ $order->id }})" type="button" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#ModalDelete">Hủy</button>
                  @endif
                </td>
              </tr>
              @empty
              <tr>
                <th colspan="9">
                  Chưa có đơn hàng nào
                </th>
              </tr>
              @endforelse
            </tbody>
          </table>
          {{ $orders->links() }}
        </div>
        <div wire:ignore.self class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Xác nhận hủy đơn hàng</h5>
              </div>
              <div class="modal-body">
                <p>Bạn có muốn hủy đơn hàng này? Thao tác này không thể phục hồi!</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Đóng</button>
                <button type="button" wire:click="cancel" class="btn btn-danger text-white close-modal" data-bs-dismiss="modal">Đồng ý</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
