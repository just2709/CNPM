@extends('layouts.admin') @section('content')

<div class="row">
  <div class="cod-md-12">
    <div class="card">
      <div class="card-header">
        <h3>Thêm loại sản phẩm <a href="{{ url('admin/category') }}" class="btn btn-primary btn-sm float-end text-white">Trở lại</a></h3>
      </div>
      <div class="card-body">
        <form action="{{ url('admin/category/store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="cod-md-6 mb-3">
              <label for="name">Tên loại</label>
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
            <div class="cod-md-6 mb-3">
              <label for="image">Ảnh</label>
              <input type="file" name="image" class="form-control" />
              @error('image')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="cod-md-6 mb-3">
              <label for="status">Trạng thái</label>
              <input type="checkbox" name="status" />
            </div>

            <!-- <div class="cod-md-6 mb-3">SEO Tags</div>
            <div class="cod-md-12 mb-3">
              <label for="meta_description">Meta description</label>
              <textarea type="text" name="meta_description" rows="5" class="form-control" rows="5"></textarea>
            </div>
            <div class="cod-md-12 mb-3">
              <label for="meta_keyword">Meta keyword</label>
              <textarea type="text" name="meta_keyword" class="form-control" rows="5"></textarea>
            </div>
            <div class="cod-md-12 mb-3">
              <label for="meta_title">Meta title</label>
              <input type="text" name="meta_title" class="form-control" />
            </div> -->
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
