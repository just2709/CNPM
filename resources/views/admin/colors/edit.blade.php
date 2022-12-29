@extends('layouts.admin') @section('content')
<div class="row">
  <div class="cod-md-12">
    <div class="card">
      <div class="card-header">
        <h3>Sửa loại sản phẩm <a href="{{ url('admin/color') }}" class="btn btn-primary btn-sm float-end text-white">Trở lại</a></h3>
      </div>
      <div class="card-body">
        <form action="{{ url('admin/color/'.$color->id).'/update' }}" method="POST" enctype="multipart/form-data">
          @csrf @method('PUT')
          <div class="row">
            <div class="cod-md-6 mb-3">
              <label for="name">Tên loại</label>
              <input type="text" name="name" class="form-control" id="name" value="{{ $color->name }}" />
              @error('name')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="cod-md-6 mb-3">
              <label for="code">Mã màu</label>
              <input type="text" name="code" class="form-control" id="name" value="{{ $color->code }}" />
              @error('code')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="cod-md-6 mb-3">
              <label for="status">Trạng thái</label>
              <input type="checkbox" name="status" {{$color->status == 1 ? 'Checked' : ''}} />
            </div>

            <div class="cod-md-12 mb-3">
              <button type="submit" class="btn btn-primary text-white"><i class="fa fa-pencil text-white"></i> Cập nhập</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
