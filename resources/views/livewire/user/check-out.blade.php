<div class="container my-5">
  <h1 class="fs-4">Đặt hàng</h1>
  <div class="card my-2 p-3 bg-light">
    <h1 class="fs-5 border-bottom">
      Tổng tiền: <span class="text-danger">{{ number_format($total) }}Đ</span>
    </h1>
    <ul>
      <li>Sản phẩm sẽ dược giao trong 3-5 ngày</li>
      <li>Giá đã bao gồm thuế (nếu có)</li>
    </ul>
  </div>
  <div class="card my-2 p-3 bg-light">
    <div class="d-flex justify-content-between border-bottom mb-2">
      <h1 class="fs-5">Thông tin cơ bản</h1>
      <a class="btn btn-primary" href="/profile">Thay đổi</a>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text" id="fullname">Họ và tên</span>
      <input wire:model="fullname" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
      @error('fullname')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="email">Địa chỉ email</span>
      <input disabled wire:model="email" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
      @error('email')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="phone">Số điện thoại</span>
      <input wire:model="phone" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
      @error('phone')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="city">Tỉnh/TP</span>
      <input wire:model="city" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
      @error('city')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="district">Quận/Huyện</span>
      <input wire:model="district" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
      @error('district')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="ward">Phường/Xã</span>
      <input wire:model="ward" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
      @error('district')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="detailAddress">Địa chỉ cụ thể</span>
      <input wire:model="detailAddress" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
      @error('detailAddress')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
  </div>
  <div class="card my-2 p-3 bg-light">
    <ul class="list-group">
      <div class="form-check">
        <input class="form-check-input" type="radio" wire:model="payment_method" name="payment_method" value="onDelivery" id="onDelivery" checked />
        <label class="form-check-label" for="onDelivery">Thanh toán khi nhận hàng</label>
      </div>
      <div class="form-check dis">
        <input disabled class="form-check-input" type="radio" wire:model="payment_method" class="btn-check" name="payment_method" value="ViettelPay" id="ViettelPay" />
        <label class="form-check-label" for="ViettelPay">Viettelpay</label>
      </div>
      <div class="form-check">
        <input disabled class="form-check-input" type="radio" wire:model="payment_method" name="payment_method" value="Paypal" id="Paypal" />
        <label class="form-check-label" for="Paypal">Paypal</label>
      </div>
    </ul>
  </div>
  <button type="button" wire:click="codOrder" class="btn btn-primary text-whit">Xác nhận đặt hàng</button>
</div>
