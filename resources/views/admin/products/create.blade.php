@extends('layouts.admin') @section('content')
<div class="row">
  <div class="cod-md-12">
    <div class="card">
      <div class="card-header">
        <h3>Thêm sản phẩm<a href="{{ url('/admin/product') }}" class="btn btn-primary text-white btn-sm float-end">Quay lại</a></h3>
      </div>
      <div class="card-body">
        <form action="{{ url('/admin/product/store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="">Tên sản phẩm</label>
            <input type="text" name="name" class="form-control" />
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="category_id">Loại sản phẩm</label>
            <select name="category_id" id="" class="form-control text-black">
              @forelse($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
              @empty
              <p class="text center text-danger">Chưa có loại sản phẩm</p>
              @endforelse
            </select>
            @error('category_id')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="material_id">Chất liệu</label>
            <select name="material_id" id="" class="form-control text-black">
              <option value="">--Chọn chất liệu--</option>
              @forelse($materials as $material)
              <option value="{{ $material->id }}">{{ $material->name }}</option>
              @empty
              <p class="text center text-danger">Chưa có chất liệu</p>
              @endforelse
            </select>
            @error('material_id')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="">Mô tả</label>
            <textarea type="text" name="description" class="form-control" rows="5"></textarea>
            @error('description')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="mb-3">
                <label for="original_price">Giá gốc</label>
                <input type="number" name="original_price" class="form-control" />
                @error('original_price')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <div class="col-md-4">
              <div class="mb-3">
                <label for="sell_price">Giá bán</label>
                <input type="number" name="sell_price" class="form-control" />
                @error('sell_price')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <div class="col-md-4">
              <div class="mb-3">
                <label for="quantity">Số lượng</label>
                <input type="number" name="quantity" class="form-control" />
              </div>
              @error('quantity')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="col-md-4">
              <div class="mb-3">
                <label for="trending">Xu hướng</label>
                <input type="checkbox" name="trending" style="width: 20px; height: 20px" />
                @error('trending')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <div class="col-md-4">
              <div class="mb-3">
                <label for="status">Trạng thái (Đánh dấu là ẩn)</label>
                <input type="checkbox" name="status" style="width: 20px; height: 20px" /> @error('status')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="image">Tải ảnh sản phẩm</label>
            <input type="file" name="image[]" multiple class="form-control" />
            @error('image[]')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="color">Chọn màu</label>
            <div class="row">
              @forelse($colors as $color)
              <div class="col-md-3">
                <div class="p-2 mb-3 border">
                  Màu: <input type="checkbox" class="mx-2" name="colors[{{ $color->id }}]" value="{{ $color->id}} " />{{ $color->name }}
                  <br />
                  Số lượng: <input type="number" name="color_quantity[{{ $color->id }}]" />
                </div>
              </div>
              @empty
              <div class="col-md-12">Không có màu</div>
              @endforelse
            </div>
            @error('color[]')
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
