<div>
  <div class="row">
    <div class="cod-md-12">
      <div class="card">
        <div class="card-header">
          <h3>Danh sách sản phẩm<a href="{{ url('/admin/product/create') }}" class="btn btn-primary text-white btn-sm float-end">Thêm mới</a></h3>
        </div>
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div class="p-2 d-flex justify-content-between">
              <h5 style="margin-bottom: 0px !important" class="w-100 pe-2 align-self-center">Tìm kiếm:</h5>
              <input placeholder="Tìm kiếm..." type="text" class="" wire:model="keyword" />
            </div>
            <div class="p-2 d-flex">
              <select wire:model="category" class="form-select" aria-label="Default select example">
                <option value=""> --Chọn loại sản phẩm-- </option>
             
                @forelse($categories as $category)
                <option value="{{$category->id}}"> {{$category->name}} </option>
                @empty
                <h1></h1>
                @endforelse
              </select>
            </div>
            <div class="p-2 d-flex">
              <select wire:model="material" class="form-select" aria-label="Default select example">
                <option value=""> --Chọn chất liệu-- </option>
                @forelse($materials as $material)
                <option value="{{$material->id}}"> {{$material->name}} </option>
                @empty
                <h1></h1>
                @endforelse
              </select>
            </div>
            <div class="p-2 d-flex">
              <h5 style="margin-bottom: 0px !important" class="w-100 align-self-center">Hiển thị:</h5>
              <select wire:model="perpage" class="form-select" aria-label="Default select example">
                <option value="20">20</option>
                <option value="40">40</option>
                <option value="80">80</option>
              </select>
            </div>
          </div>
          <table class="table table-striped table-bordered text-center">
            <thead>
              <tr>
                <th>STT</th>
                <th>Ảnh</th>
                <th>Tên</th>
                <th>Loại</th>
                <th>Chất liệu</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              @forelse($products as $product)
              <tr>
                <td>
                  {{ $loop->iteration }}
                </td>
                <td>
                  @if(count($product->productImages) > 0)
                  <img
                    src="{{ asset($product->productImages{0}['image'] ) }}"
                    alt="{{ asset($product->productImages{0}['image'] ) }}"
                    class="img-thumbnail"
                    style="width: 150px; height: 150px; object-fit: cover"
                  />
                  @else
                  <img class="img-thumbnail" style="width: 150px; height: 150px; object-fit: cover" src="https://whetstonefire.org/wp-content/uploads/2020/06/image-not-available.jpg" alt="" />
                  @endif
                </td>
                <td>{{ $product->name }}</td>
                <td>
                  @if($product->category)
                  {{ $product->category->name }}
                  @else Không có danh mục @endif
                </td>
                <td>
                  @if($product->material)
                  {{ $product->material->name }}
                  @else Không có chất liệu @endif
                </td>
                <td>{{ $product->sell_price }}</td>
                <td>{{ $product->quantity }}</td>
                <td>
                  <a href="{{ url('admin/product/'.$product->id.'/edit') }}" class="btn btn-primary text-white">Sửa</a>
                  <button wire:click="deleteId({{ $product->id }})" type="button" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#ModalDelete">Xóa</button>
                </td>
              </tr>
              @empty
              <tr>
                <td class="text-center text-danger" colspan="8">Không có bản ghi</td>
              </tr>
              @endforelse
            </tbody>
          </table>
          {{ $products->links() }}
        </div>
      </div>
    </div>
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
</div>
