@if(count($cart) == 0)
<div class="container my-5" style="margin-bottom: 300px !important;">
@else
<div class="container my-5">
@endif
  <h1 class="fs-5 mb-5">Giỏ hàng ({{ count($cart) }})</h1>
  <div class="row text-center m-2 fw-bold fs-6">
    <div class="col-2">Ảnh</div>
    <div class="col-3">Tên</div>
    <div class="col-2">Đơn Giá</div>
    <div class="col-2">Số lượng</div>
    <div class="col-2">Thành tiền</div>
    <div class="col-1"><i class="fa-solid fa-trash"></i></div>
  </div>
  <div class="card bg-light text-center">
    @forelse($cart as $item)
    <div class="row m-2 border-bottom fs-6">
      <div class="col-2">
        @if(count($item->product->productImages) > 0)
        <img class="w-100" src="{{ asset($item->product->productImages{0}['image'] ) }}" />
        @else
        <img class="w-100" src="https://whetstonefire.org/wp-content/uploads/2020/06/image-not-available.jpg" />
        @endif
      </div>
      <div class="col-3 m-auto">
        <p class="fw-semibold">
          {{$item->product->name}}
          @if($item->productColor)
          <span class="fw-lighter"> | Màu:{{$item->productColor->color->name}}</span>
          @endif
        </p>
      </div>
      <div class="col-2 m-auto">
        <p>{{number_format($item->product->sell_price)}}</p>
      </div>
      <div class="col-2 m-auto d-flex">
        <button type="button" wire:click="decreQuantity({{$item->id}})" class="form-control">-</button>
        <input disabled type="text" value="{{$item->quantity}}" class="form-control text-center" placeholder="" aria-label="" aria-describedby="addon-wrapping" />
        <button type="button" wire:click="increQuantity({{$item->id}})" class="form-control">+</button>
      </div>
      <div class="col-2 m-auto">
        <p>{{number_format($item->product->sell_price * $item->quantity)}}</p>
      </div>
      <div class="col-1 m-auto">
        <button wire:click="deleteId({{ $item->id }})" type="button" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#ModalDelete">
          <i class="fa-solid fa-trash"></i>
        </button>
      </div>
      @php $total += $item->product->sell_price * $item->quantity @endphp
    </div>
    @empty
    <h1 class="fs-5">Chưa có sản phẩm nào</h1>
    @endforelse
  </div>
  @if(count($cart) > 0)
  <div class="card bg-light text-center mt-3">
    <h1 class="fs-5">Tổng: {{ number_format($total) }}Đ</h1>
  </div>
  <a href="/checkout" class="btn btn-primary w-100">Đặt hàng</a>
  @endif
  <div wire:ignore.self class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Xác nhận xóa</h5>
        </div>
        <div class="modal-body">
          <p>Bạn có xóa không? Thao tác này không thể phục hồi!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Đóng</button>
          <button type="button" wire:click="delete" class="btn btn-danger text-white close-modal" data-bs-dismiss="modal">Xóa</button>
        </div>
      </div>
    </div>
  </div>
</div>
