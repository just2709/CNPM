@extends('layouts.admin') @section('content')
<div class="row">
  <div class="cod-md-12">
    <div class="card">
      <div class="card-header">
        <h3>Thêm slider<a href="{{ url('/admin/slider') }}" class="btn btn-primary text-white btn-sm float-end">Quay lại</a></h3>
      </div>
      <div class="card-body">
        <form action="{{ url('admin/slider/'.$slider->id).'/update' }}" method="post" enctype="multipart/form-data">
          @csrf @method('PUT')

          <div class="mb-3">
            <label for="">Tiêu đề</label>
            <input type="text" name="title" class="form-control" value="{{ $slider->title }}" />
            @error('title')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="">Mô tả</label>
            <textarea type="text" name="description" class="form-control" rows="5">{{ $slider->description }}</textarea>
            @error('description')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="cod-md-6 mb-3">
            <label for="image">Ảnh</label>
            <input type="file" name="image" class="form-control" value="" />
            <img src="{{ asset('/uploads/slider/'.$slider->image)}}" width="500px" />
            @error('image')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="status">Trạng thái</label>
            <input type="checkbox" name="status" {{$slider->status == 1 ? 'Checked' : ''}} />
            @error('status')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div>
            <button type="submit" class="btn btn-primary text-white mt-2">Lưu</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
