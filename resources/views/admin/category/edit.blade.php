@extends('layouts.admin') @section('content')
<div class="row">
  <div class="cod-md-12">
    <div class="card">
      <div class="card-header">
        <h3>Sửa loại sản phẩm <a href="{{ url('admin/category') }}" class="btn btn-primary btn-sm float-end text-white">Trở lại</a></h3>
      </div>
      <div class="card-body">
        <form action="{{ url('admin/category/'.$category->id).'/update' }}" method="POST" enctype="multipart/form-data">
          @csrf @method('PUT')
          <div class="row">
            <div class="cod-md-6 mb-3">
              <label for="name">Tên loại</label>
              <input type="text" name="name" class="form-control" id="name" value="{{ $category->name }}" />
              @error('name')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="cod-md-6 mb-3">
              <label for="description">Mô tả</label>
              <textarea class="form-control" name="description" rows="5">{{ $category->description }}</textarea>
              @error('description')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="cod-md-6 mb-3">
              <label for="image">Ảnh</label>
              <input type="file" name="image" class="form-control" />
              <img src="{{ asset('/uploads/category/'.$category->image)}}" width="500px" />
              @error('image')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="cod-md-6 mb-3">
              <label for="status">Trạng thái</label>
              <input type="checkbox" name="status" {{$category->status == 1 ? 'Checked' : ''}} />
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
