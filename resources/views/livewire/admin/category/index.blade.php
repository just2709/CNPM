<div class="row">
  <div class="cod-md-12">
    <div class="card">
      <div class="card-header">
        <h3>Loại sản phẩm<a href="{{ url('/admin/category/create') }}" class="btn btn-primary text-white btn-sm float-end">Thêm mới</a></h3>
      </div>
      <div class="card-body">
        <table class="table table-striped table-bordered text-center">
          <thead>
            <tr>
              <th>STT</th>
              <th>Ảnh</th>
              <th>Tên</th>
              <th>Trạng thái</th>
              <th>Hành động</th>
            </tr>
          </thead>
          <tbody>
            @forelse($categories as $key => $category)
            <tr data-parent="" data-index="1" role="row" class="odd">
              <td class="sorting_1">
                {{ ($categories->currentPage() - 1) * $categories->perPage() + $loop->iteration }}
              </td>
              <td>
                <img
                  src="{{ empty($category->image) ? 'https://whetstonefire.org/wp-content/uploads/2020/06/image-not-available.jpg' : asset('/uploads/category/'.$category->image) }}"
                  class="img-thumbnail"
                  style="width: 150px; height: 150px; object-fit: cover"
                />
              </td>
              <td>{{ $category->name }}</td>
              <td>{{ $category->status == 1 ? 'Ẩn' : 'Hiện' }}</td>
              <td>
                <a href="{{ url('admin/category/'.$category->id.'/edit') }}" class="btn btn-primary text-white">Sửa</a>
                <button wire:click="deleteId({{ $category->id }})" type="button" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#ModalDelete">Xóa</button>
              </td>
            </tr>
            @empty
            <tr class="text-center text-danger">
              <td colspan="6">Không có bản ghi</td>
            </tr>
            @endforelse
          </tbody>
        </table>
        {{ $categories->links() }}
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
