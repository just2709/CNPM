@extends('layouts.admin') @section('content')

<div class="row">
  <div class="cod-md-12">
    <div class="card">
      <div class="card-header">
        <h3>Thêm loại sản phẩm <a href="{{ url('admin/material') }}" class="btn btn-primary btn-sm float-end text-white">Trở lại</a></h3>
      </div>
      <div class="card-body">
        <form action="{{ url('admin/material/store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="cod-md-6 mb-3">
              <label for="name">Tên chất liệu</label>
              <input type="text" name="name" class="form-control" />
              @error('name')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="cod-md-6 mb-3">
              <label for="description">Mô tả</label>
              <textarea class="form-control" name="description" rows="5"></textarea>
              @error('description')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="cod-md-12 mb-3">
              <button type="submit" class="btn btn-primary float-center text-white">Lưu</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
