@extends('layouts.admin') @section('content')
<div class="row">
  <div class="cod-md-12">
    <div class="card">
      <div class="card-header">
        <h3>Sửa sản phẩm<a href="{{ url('/admin/product') }}" class="btn btn-primary text-white btn-sm float-end">Quay lại</a></h3>
      </div>
      <div class="card-body">
        <form action="{{ url('admin/product/'.$product->id.'/update') }}" method="post" enctype="multipart/form-data">
          @csrf @method('PUT')
          <div class="mb-3">
            <label for="">Tên sản phẩm</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}" />
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="category_id">Loại sản phẩm</label>
            <select name="category_id" id="" class="form-control text-black">
              @forelse($categories as $category)
              <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : ''}}>{{ $category->name }}</option>
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
              <option value="{{ $material->id }}" {{ $material->id == $product->material_id ? 'selected' : ''}}>{{ $material->name }}</option>
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
            <textarea type="text" name="description" class="form-control" rows="5">{{ $product->description }}</textarea>
            @error('description')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="mb-3">
                <label for="original_price">Giá gốc</label>
                <input type="number" name="original_price" class="form-control" value="{{ $product->original_price }}" />
                @error('original_price')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label for="sell_price">Giá bán</label>
                <input type="number" name="sell_price" class="form-control" value="{{ $product->sell_price }}" />
                @error('sell_price')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label for="quantity">Số lượng</label>
                <input type="number" name="quantity" class="form-control" value="{{ $product->quantity }}" />
              </div>
              @error('quantity')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label for="trending">Xu hướng</label>
                <input type="checkbox" name="trending" {{ $product->trending == 1 ? 'checked' : '' }} style="width: 20px; height: 20px" /> @error('trending')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label for="status">Trạng thái (Đánh dấu là ẩn)</label>
                <input type="checkbox" name="status" {{ $product->status == 1 ? 'checked' : '' }} style="width: 20px; height: 20px" /> @error('status')
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
            @forelse($product->productImages as $image)
            <div class="d-inline-block position-relative m-2">
              <img src="{{ asset($image->image) }}" alt="{{ asset($image->image) }}" class="img-thumbnail" style="width: 300px; height: 300px; object-fit: cover" />
              <a href="{{ url('admin/product_images/'.$image->id.'/delete') }}" class="position-absolute end-0 px-3 py-2 bg-danger text-white"><i class="fa-solid fa-xmark"></i></a>
            </div>
            @empty
            <p>Chưa có ảnh sản phẩm</p>
            @endforelse
          </div>

          <div class="mb-3">
            <label for="color">Thêm màu</label>
            <div class="row">
              @forelse($colors as $color)
              <div class="col-md-3">
                <div class="p-2 mb-3 border">
                  Màu: <input type="checkbox" class="mx-2" name="colors[{{ $color->id }}]" value="{{ $color->id}}" />{{ $color->name }}
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
          <div class="mb-3">
            <label for="">Danh sách màu đã thêm</label>
            <table class="table table-sm table-bordered text-center">
              <thead>
                <tr>
                  <th>Tên màu</th>
                  <th>Số lượng</th>
                </tr>
              </thead>
              <tbody>
                @forelse($product->productColor as $product_color)
                <tr class="product_color_tr">
                  <td>{{ $product_color->color->name }}</td>
                  <td>
                    <div class="p-2 border d-flex justify-content-around">
                      <input type="number" value="{{ $product_color->quantity }}" class="form-control product_color_quantity" />
                      <button type="button" value="{{ $product_color->id }}" class="btn text-white btn-primary mx-3 updateProductColorBtn">Cập nhật</button>
                      <button type="button" value="{{ $product_color->id }}" class="btn text-white btn-danger deleteProductColorBtn">Xóa</button>
                    </div>
                  </td>
                </tr>
                @empty
                <td class="col-md-12 text-danger" colspan="2">Chưa có màu nào được thêm</td>
                @endforelse
              </tbody>
            </table>

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
@section('scripts')
<script type="text/javascript">
  $(document).ready(function () {
    $.ajaxSetup({
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
      },
    });
    $(document).on("click", ".updateProductColorBtn", function (e) {
      
      var product_id = "{{ $product->id }}";
      var product_color_id = $(this).val();
      var quantity_color = $(this).closest(".product_color_tr").find(".product_color_quantity").val();
      if (quantity_color <= 0) {
        alert('Hellooo')
        return false;
      }
      var data = {
        'product_id': product_id,
        'product_color_id': product_color_id,
        'quantity': quantity_color,
      };

      $.ajax({
        type: "POST",
        url: "/admin/product-color/" + product_color_id,
        data: data,
        success: function (res) {
          console.log(res);
        },
        error: function (data) {
            console.log(data);
        }
      });
    });

    $(document).on("click", ".deleteProductColorBtn", function (e) {
      var product_color_id = $(this).val();
      var current = $(this);

      $.ajax({
        type: 'GET',
        url: "/admin/product-color/"+product_color_id+'/delete',
        success: function (response) {
          current.closest('.product_color_tr').remove();
          console.log(response);
        },
        error: function (data) {
            console.log(data);
        }
      })
    });

  });
</script>

@endsection
