<div class="container mt-3">
  <div class="card">
    <div class="row">
      <aside class="col-sm-5 border-end detail">
        @if(count($product->productImages) > 0)
        <img id="featured" class="w-100" src="{{ asset($product->productImages{0}['image'] ) }}" />
        @else
        <img cid="featured" class="w-100" src="https://whetstonefire.org/wp-content/uploads/2020/06/image-not-available.jpg" />
        @endif

        <div id="slide-wrapper">
          <img id="slideLeft" class="arrow" src="{{ asset('assets/image_slider_frontend-master/images/arrow-left.png') }}" />

          <div id="slider">
            @forelse($product->productImages as $key => $productImage) @if($key == '0')
            <img class="thumbnail active" src="{{ asset($productImage->image ) }}" />
            @else
            <img class="thumbnail" src="{{ asset($productImage->image ) }}" />
            @endif @empty
            <img class="thumbnail active" src="https://whetstonefire.org/wp-content/uploads/2020/06/image-not-available.jpg" />
            @endforelse
          </div>

          <img id="slideRight" class="arrow" src="{{ asset('assets/image_slider_frontend-master/images/arrow-right.png') }}" />
        </div>
      </aside>
      <aside class="col-sm-7">
        <article class="card-body p-5">
          <h3 class="title mb-3">{{ $product->name }}</h3>

          <div class="price">
            @if($product->sell_price == $product->original_price)
            <div class="fw-bold fs-4">{{ $product->sell_price }}đ</div>
            @else
            <div class="fw-bold fs-4">
              {{ number_format($product->sell_price) }}đ<del class="text-dark fs-6 ms-2">{{ number_format($product->original_price) }}đ</del>
            </div>
            @endif
          </div>
          <!-- price-detail-wrap .// -->
          <dl class="param param-feature">
            <dt>Chất liệu</dt>
            @if(isset($product->material))
            <dd>{{ $product->material->name }}</dd>
            @else
            <dd>Chưa xác định</dd>
            @endif
          </dl>
          <dl class="param param-feature">
            <dt>Loại sản phẩm</dt>
            @if(isset($product->category))
            <dd>{{ $product->category->name }}</dd>
            @else
            <dd>Chưa xác định</dd>
            @endif
          </dl>

          <hr />
          <div class="row">
            <div class="">
              @if($product->productColor)
              <dl class="param param-inline">
                <dt>Màu</dt>

                <dd>
                  @foreach($product->productColor as $key => $color)
                  <label class="form-check form-check-inline">
                    <input wire:model="color" class="form-check-input" type="radio" name="color" id="color{{$color->id}}" value="{{$color->id}}" />
                    <span class="form-check-label">{{$color->color->name}}</span>
                  </label>
                  @endforeach
                </dd>
              </dl>

              @endif

              <!-- item-property .// -->
            </div>
            <div class="col-sm-5">
              <dl class="param param-inline">
                <div class="input-group flex-nowrap">
                  <span class="input-group-text" id="addon-wrapping">Số lượng</span>
                  <input wire:model.lazy="quantity" type="text" value="{{ $quantity }}" class="form-control" placeholder="" aria-label="" aria-describedby="addon-wrapping" />
                </div>
                <!-- @if(count($product->productColor) != 0) @if($quantityOfProductColor == 0)
                <dd class="text-danger">Vui lòng chọn màu</dd>
                @elseif($quantityOfProductColor < $quantity)
                <dd class="text-danger">Không đủ số lượng</dd>
                @endif @elseif($quantityOfProductNoColor < $quantity)
                <dd class="text-danger">Không đủ số lượng</dd>
                @endif -->
              </dl>
              <!-- item-property .// -->
            </div>
            <!-- col.// -->

            <!-- col.// -->
          </div>
          <!-- row.// -->
          <hr />
          <a href="#" class="btn btn-lg btn-success text-uppercase"> Mua ngay </a>
          <button wire:click="addToCart({{$product->id}})" class="btn btn-lg btn-outline-success text-uppercase"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
        </article>
        <!-- card-body.// -->
      </aside>
      <!-- col.// -->
    </div>
  </div>
  <div class="card mt-3 p-3">
    <div class="row">
      <h3>Mô tả</h3>
      <dl class="item-property">
        <dd>
          <p>{{ $product->description }}</p>
        </dd>
      </dl>
    </div>
  </div>
  <div class="card my-3 p-3">
    <div class="row">
      <h3>Sản phẩm liên quan</h3>
      <div class="row mt-3">
        @forelse($related_products as $product)
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
                  <a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a>
                </li>
                <li>
                  <a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a>
                </li>
                <li>
                  <a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a>
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
      </div>
    </div>
  </div>
  <!-- card.// -->
</div>

<script type="text/javascript">
  let thumbnails = document.getElementsByClassName("thumbnail");

  let activeImages = document.getElementsByClassName("active");

  for (var i = 0; i < thumbnails.length; i++) {
    thumbnails[i].addEventListener("click", function () {
      console.log(activeImages);

      if (activeImages.length > 0) {
        activeImages[0].classList.remove("active");
      }

      this.classList.add("active");
      document.getElementById("featured").src = this.src;
    });
  }

  let buttonRight = document.getElementById("slideRight");
  let buttonLeft = document.getElementById("slideLeft");

  buttonLeft.addEventListener("click", function () {
    document.getElementById("slider").scrollLeft -= 180;
  });

  buttonRight.addEventListener("click", function () {
    document.getElementById("slider").scrollLeft += 180;
  });
</script>
