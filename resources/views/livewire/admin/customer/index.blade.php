<div>
  <div class="row">
    <div class="cod-md-12">
      <div class="card">
        <div class="card-header">
          <h3>Danh sách khách hàng</h3>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="p-2 d-flex justify-content-between">
                  <h5 style="margin-bottom: 0px !important" class="w-100 pe-2 align-self-center">Tìm kiếm:</h5>
                  <input placeholder="Tìm kiếm..." type="text" class="" wire:model="keyword" />
                </div>
                <div class="p-2 d-flex">
                  <h5 style="margin-bottom: 0px !important" class="w-100 align-self-center">Hiển thị:</h5>
                  <select wire:model="perpage" class="form-select" aria-label="Default select example">
                    <option value="0">25</option>
                    <option value="1">50</option>
                    <option value="100">100</option>
                  </select>
                </div>
              </div>
          <table class="table table-striped table-bordered text-center">
            <thead>
              <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Ngày tham gia</th>
              </tr>
            </thead>
            <tbody>
              @forelse($customers as $customer)
              <tr>
                <td>
                  {{ $loop->iteration }}
                </td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->created_at->format('d-m-Y') }}</td>
              </tr>
              @empty
              <tr>
                <td class="text-center text-danger" colspan="4">Không có bản ghi</td>
              </tr>
              @endforelse
            </tbody>
          </table>
          {{ $customers->links() }}
        </div>
      </div>
    </div>
    <!-- <div wire:ignore.self class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
  </div> -->
</div>
