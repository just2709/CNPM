<div class="container">
  <div class="row justify-content-center">
    <div class="py-3 py-md-5">
      <div class="row gx-5">
        <div class="col-md-3">
          <div class="row border rounded pb-3 mb-3">
            <h4 class="py-2 text-center fw-bold">Danh mục sản phẩm</h4>
            <ul class="list-group px-2">
              <input type="radio" wire:model="category" class="btn-check" name="category" id="all" value=""/>
              <label class="btn btn-outline-success" for="all">Tất cả</label>
              @forelse($categories as $category)
              <input type="radio" wire:model="category" class="btn-check" name="category" value={{ $category->id }} id={{ $category->id }} />
              <label class="btn btn-outline-success" for={{ $category->id }}>{{ $category->name }}</label>
              @empty
              <h1></h1>
              @endforelse
            </ul>
          </div>
          <div class="row border rounded pb-3 mb-3">
            <h4 class="py-2 text-center fw-bold">Màu</h4>
            <ul class="list-group px-2">
              @forelse($colors as $color)
              <li class="list-group-item">
                <input wire:model="pickedcolors" class="form-check-input me-1" type="checkbox" value={{ $color->id }} id='color{{ $color->id }}' />
                <label class="form-check-label stretched-link" for='color{{ $color->id }}'>{{ $color->name }}</label>
              </li>
              @empty
              <h1></h1>
              @endforelse
            </ul>
          </div>
          <div class="row border rounded pb-3 mb-3">
            <h4 class="py-2 text-center fw-bold">Chất liệu</h4>
            <ul class="list-group px-2">
              @forelse($materials as $material)
              <li class="list-group-item">
                <input wire:model="pickedmaterials" class="form-check-input me-1" type="checkbox" value={{ $material->id }} id='material{{ $material->id }}' />
                <label class="form-check-label stretched-link" for='material{{ $material->id }}'>{{ $material->name }}</label>
              </li>
              @empty
              <h1></h1>
              @endforelse
            </ul>
          </div>
          <div class="row border rounded pb-3 mb-3">
            <h4 class="py-2 text-center fw-bold">Khoảng giá</h4>
            <div class="input-group">
              <input wire:model="from" type="number" aria-label="First name" class="form-control" placeholder="Từ" />
              <span class="input-group-text">-</span>
              <input wire:model="to" type="number" aria-label="Last name" class="form-control" placeholder="Đến" />
            </div>
          </div>
          <!-- <div class="row border rounded pb-3 mb-3">
            <h4 class="py-2 text-center fw-bold">Vận chuyển</h4>
            <ul class="list-group px-2">
              <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckboxStretched" />
                <label class="form-check-label stretched-link" for="firstCheckboxStretched">Hỏa tốc</label>
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckboxStretched" />
                <label class="form-check-label stretched-link" for="secondCheckboxStretched">Nhanh</label>
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckboxStretched" />
                <label class="form-check-label stretched-link" for="thirdCheckboxStretched">Tiết kiệm</label>
              </li>
            </ul>
          </div>
          <div class="row border rounded pb-3 mb-3">
            <h4 class="py-2 text-center fw-bold">Đánh giá</h4>
            <ul class="list-group px-2">
              <li class="list-group-item">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </li>
              <li class="list-group-item">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <label class="form-check-label stretched-link" for="firstCheckboxStretched">trở lên</label>
              </li>
              <li class="list-group-item">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <label class="form-check-label stretched-link" for="firstCheckboxStretched">trở lên</label>
              </li>
              <li class="list-group-item">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <label class="form-check-label stretched-link" for="firstCheckboxStretched">trở lên</label>
              </li>
              <li class="list-group-item">
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <label class="form-check-label stretched-link" for="firstCheckboxStretched">trở lên</label>
              </li>
            </ul>
          </div>
          <div class="row border rounded pb-3 mb-3">
            <h4 class="py-2 text-center fw-bold">Dịch vụ & Khuyến mãi</h4>
            <ul class="list-group px-2">
              <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="isSelling" />
                <label class="form-check-label stretched-link" for="isSelling">Đang giảm giá</label>
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="freeShip" />
                <label class="form-check-label stretched-link" for="freeShip">Miễn phí vận chuyển</label>
              </li>
            </ul>
          </div> -->
        </div>

        <div class="col-md-9">
          <div class="row border rounded mb-3">
            <div class="d-flex flex-row justify-content-between">
              <div class="p-2 d-flex flex-row">
                <div class="p-2">Sắp xếp theo</div>
                <ul class="list-group list-group-horizontal align-middle">
                  <input type="radio" wire:model="sort" class="btn-check" name="sort" value='default' id='default' checked />
                  <label class="btn btn-outline-success" for='default'>Mặc định</label>
                  <input type="radio" wire:model="sort" class="btn-check" name="sort" value='asc' id='LowToHight' />
                  <label class="btn btn-outline-success" for='LowToHight'>Giá tăng dần</label>
                  <input type="radio" wire:model="sort" class="btn-check" name="sort" value='desc' id='HightToLow' />
                  <label class="btn btn-outline-success" for='HightToLow'>Giá giảm dần</label>
                </ul>
              </div>
              <div class="p-2 d-flex flex-row">
                <select wire:model="show" class="form-select" aria-label="Default select example">
                  <option value="12">12</option>
                  <option value="24">24</option>
                  <option value="48">48</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            @forelse($data as $product)
            <div class="col-md-3 col-sm-6">
              <div class="product-grid box-shadow p-2 mb-5 rounded {{$product->sell_price != $product->original_price ? 'new' : ''}}">
                <div class="product-image">
                  <a href="/product/{{$product->id}}" class="image">
                    @if(count($product->productImages) > 0)
                    <img class="pic-1" src="{{ asset($product->productImages{0}['image'] ) }}" />
                    @else
                    <img class="pic-1" src="https://whetstonefire.org/wp-content/uploads/2020/06/image-not-available.jpg" />
                    @endif
                  </a>
                  @if($product->sell_price !== $product->original_price)
                  <span class="product-new-label">Sale</span>
                  @endif
                  <ul class="product-links">
                    <li>
                      <a href="/product/{{$product->id}}" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a>
                    </li>
                    <li>
                      <a href="/product/{{$product->id}}" data-tip="Quick View"><i class="fa fa-search"></i></a>
                    </li>
                    <li>
                      <a href="/product/{{$product->id}}" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a>
                    </li>
                  </ul>
                  <!-- @if($product->sell_price == $product->original_price)
                  <div class="price">{{ $product->sell_price }}đ</div>
                  @else
                  <div class="price">
                    {{ $product->sell_price }}đ <br><del class="text-dark fs-6">{{ $product->original_price }}đ</del>
                  </div>
                  @endif -->
                </div>
                <div class="product-content">
                  <h3 class="title">
                    <a href="/product/{{$product->id}}">{{ $product->name }}</a>
                  </h3>
                  <div class="price">
                    @if($product->sell_price == $product->original_price)
                    <div class="fw-bold fs-4">{{ $product->sell_price }}đ</div>
                    @else
                    <div class="fw-bold fs-4">
                      {{ number_format($product->sell_price) }}đ<del class="text-dark fs-6 ms-2">{{ number_format($product->original_price) }}đ</del>
                    </div>
                    @endif
                  </div>
                  <ul class="rating">
                    <li class="fas fa-star"></li>
                    <li class="fas fa-star"></li>
                    <li class="fas fa-star"></li>
                    <li class="fas fa-star disable"></li>
                    <li class="fas fa-star disable"></li>
                  </ul>
                </div>
              </div>
            </div>
            @empty
            <h1>Không có sản phẩm nào phù hợp</h1>
            @endforelse

            <!-- <div class="col-md-3 col-sm-6">
              <div class="product-grid new">
                <div class="product-image">
                  <a href="#" class="image">
                    <img class="pic-1" src="https://salt.tikicdn.com/cache/280x280/ts/product/10/c4/c7/d93817aa8efc6406f947ec6859f640ab.jpg" />
                  </a>
                  <span class="product-new-label">New</span>
                  <ul class="product-links">
                    <li>
                      <a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a>
                    </li>
                    <li>
                      <a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a>
                    </li>
                    <li>
                      <a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a>
                    </li>
                  </ul>
                  <div class="price">$23.00</div>
                </div>
                <div class="product-content">
                  <h3 class="title"><a href="#">Women's Top</a></h3>
                  <ul class="rating">
                    <li class="fas fa-star"></li>
                    <li class="fas fa-star"></li>
                    <li class="fas fa-star"></li>
                    <li class="fas fa-star"></li>
                    <li class="fas fa-star disable"></li>
                  </ul>
                </div>
              </div>
            </div> -->
            <div class="position-relative">
              <div class="position-absolute top-50 start-50 translate-middle">
                {{ $data->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
