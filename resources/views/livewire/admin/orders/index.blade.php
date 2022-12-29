<div class="">
  <div class="row">
    <div class="col-md-12 ">
      <div class="p-3 card">
        <div class="">
          <h3 class="card-header">Danh sách đơn hàng</h3>
          <div class="d-flex justify-content-between">
            <div class="p-2 d-flex justify-content-between">
              <input type="date" class="w-100" wire:model="from" />
              <h5 class="align-self-center p-2" style="margin-bottom: 0px !important">tới</h5>
              <input type="date" class="w-100" wire:model="to" />
            </div>
            <div class="p-2 d-flex">
              <select wire:model="selected_customer_id" class="form-select" aria-label="Default select example">
                <option value="all">--Chọn khách hàng--</option>
                @forelse($customers as $customer)
                <option value="{{$customer->id}}">{{$customer->name}}</option>
                @empty @endforelse
              </select>
            </div>
            <div class="p-2 d-flex">
              <h5 style="margin-bottom: 0px !important" class="w-100 align-self-center">Trạng thái:</h5>
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
            <div class="p-2 d-flex">
              <h5 style="margin-bottom: 0px !important" class="w-100 align-self-center">Hiển thị:</h5>
              <select wire:model="perpage" class="form-select" aria-label="Default select example">
                <option value="20">20</option>
                <option value="40">40</option>
                <option value="80">80</option>
              </select>
            </div>
          </div>
        </div>
        <div class="table-responsive text-center card-body">
          <table class="table-responsive table table-striped table-hover table-bordered">
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
                <th scope="col" style="width: 210px">Hành động</th>
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
                <td class="d-flex">
                  <a href="/admin/orders/{{$order->id}}" type="button" class="btn btn-primary text-white me-2"> Chi tiết </a>
                  @if($order->status === 'Chờ xác nhận')
                  <button wire:click="cancelId({{ $order->id }})" type="button" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#ModalDelete">Hủy</button>
                  @endif
                </td>
              </tr>
              @empty
              <td colspan="9">Chưa có đơn hàng nào</td>
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
