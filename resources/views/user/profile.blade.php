@extends('layouts.app') @section('content')

<div class="container my-5">
  <h1 class="fs-3">Thông tin cá nhân</h1>
  <form action="{{ url('profile/update') }}" method="POST" enctype="multipart/form-data" class="card my-2 p-3 bg-light">
    @csrf
    <div class="input-group mb-3">
      <span class="input-group-text" id="fullname">Họ và tên</span>
      <input name="fullname" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $user_detail->full_name ?? '' }}" />
      @error('fullname')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="phone">Số điện thoại</span>
      <input name="phone" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $user_detail->phone ?? '' }}" />
      @error('phone')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="city">Tỉnh/TP</span>
      <input name="city" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $user_detail->city ?? '' }}" />
      @error('city')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="district">Quận/Huyện</span>
      <input name="district" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $user_detail->district ?? '' }}" />
      @error('district')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="ward">Phường/Xã</span>
      <input name="ward" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $user_detail->ward ?? '' }}" />
      @error('ward')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="detailAddress">Địa chỉ cụ thể</span>
      <input name="detailAddress" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $user_detail->detailAddress ?? '' }}" />
      @error('detailAddress')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary text-whit">Cập nhật thông tin</button>
  </form>
</div>

@endsection
