<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    @forelse ($sliders as $key => $slide)
    <div class="swiper-slide">
      <img src="{{ asset('/uploads/slider/'.$slide->image) }}" class="d-block w-100 vh-100 img-fluid" alt="..." style="object-fit: cover" />
      <div class="carousel-caption d-none d-md-block">
        <h2>{{ $slide->title }}</h2>
        <p>{{ $slide->description }}</p>
      </div>
    </div>
    @empty
    <h1>Chưa có slide nào</h1>
    @endforelse
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>
<div class="container">
  <div class="row justify-content-center">
    <div class="py-3 py-md-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4 class="mb-4 text-center fw-bold">Danh mục sản phẩm</h4>
          </div>
          <!-- Categories -->
          <div class="swiper_categories">
            <div class="swiper-wrapper">
              @forelse ($categories as $category)
              <div class="swiper-slide">
                <div class="">
                  <a href="">
                    <div class="category-card-img cate_img">
                      <img
                        src="{{ $category->image ? asset('/uploads/category/'.$category->image) : 'https://whetstonefire.org/wp-content/uploads/2020/06/image-not-available.jpg' }}"
                        class="w-100 h-100"
                        alt="{{ $category->image ? asset('/uploads/category/'.$category->image) : 'https://whetstonefire.org/wp-content/uploads/2020/06/image-not-available.jpg' }}"
                        style="object-fit: cover; background-color: rgba(0, 0, 0, 0.185);"
                      />
                      <div class="cate_body text-white text-uppercase p-2 text-center">
                        <h5 class="my-auto" style="text-shadow: 1px 1px 10px #000">{{ $category->name }}</h5>
                      </div>
                    </div>
                    
                  </a>
                </div>
              </div>
              @empty
              <h1></h1>
              @endforelse
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="py-3 py-md-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4 class="mb-4 text-center fw-bold">Sản phẩm mới</h4>
          </div>

          <div class="swiper_new_products">
            <div class="swiper-wrapper">
              @forelse ($new_products as $product)
              <div class="swiper-slide">
                <div class="category-card">
                  <a href="/product/{{$product->id}}">
                    <div class="category-card-img">
                      @if(count($product->productImages) > 0)
                      <img src="{{ asset($product->productImages{0}['image'] ) }}" alt="{{ asset($product->productImages{0}['image'] ) }}" class="img-thumbnai w-100 h-100" style="object-fit: cover" />
                      @else
                      <img class="img-thumbnail w-100 h-100" style="object-fit: cover" src="https://whetstonefire.org/wp-content/uploads/2020/06/image-not-available.jpg" alt="" />
                      @endif
                    </div>
                    <div class="category-card-body">
                      <h5>{{ $product->name }}</h5>
                    </div>
                  </a>
                </div>
              </div>
              @empty
              <h1></h1>
              @endforelse
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="py-3 py-md-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4 class="mb-4 text-center fw-bold">Xu hướng hiện nay</h4>
          </div>
          <div class="swiper_new_products">
            <div class="swiper-wrapper">
              @forelse ($trending_products as $product)
              <div class="swiper-slide">
                <div class="category-card">
                  <a href="/product/{{$product->id}}">
                    <div class="category-card-img">
                      @if(count($product->productImages) > 0)
                      <img src="{{ asset($product->productImages{0}['image'] ) }}" alt="{{ asset($product->productImages{0}['image'] ) }}" class="img-thumbnai w-100 h-100" style="object-fit: cover" />
                      @else
                      <img class="img-thumbnail w-100 h-100" style="object-fit: cover" src="https://whetstonefire.org/wp-content/uploads/2020/06/image-not-available.jpg" alt="" />
                      @endif
                    </div>
                    <div class="category-card-body">
                      <h5>{{ $product->name }}</h5>
                    </div>
                  </a>
                </div>
              </div>
              @empty
              <h1></h1>
              @endforelse
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="py-3 py-md-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4 class="mb-4 text-center fw-bold">Sản phẩm bán chạy</h4>
          </div>
          <div class="swiper_new_products">
            <div class="swiper-wrapper">
              @forelse ($trending_products as $product)
              <div class="swiper-slide">
                <div class="category-card">
                  <a href="/product/{{$product->id}}">
                    <div class="category-card-img">
                      @if(count($product->productImages) > 0)
                      <img src="{{ asset($product->productImages{0}['image'] ) }}" alt="{{ asset($product->productImages{0}['image'] ) }}" class="img-thumbnai w-100 h-100" style="object-fit: cover" />
                      @else
                      <img class="img-thumbnail w-100 h-100" style="object-fit: cover" src="https://whetstonefire.org/wp-content/uploads/2020/06/image-not-available.jpg" alt="" />
                      @endif
                    </div>
                    <div class="category-card-body">
                      <h5>{{ $product->name }}</h5>
                    </div>
                  </a>
                </div>
              </div>
              @empty
              <h1></h1>
              @endforelse
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </div>
</div>

@section('scripts')

<script type="text/javascript">
  const swiper = new Swiper(".swiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    // Optional parameters
    loop: true,

    // If we need pagination
    pagination: {
      el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  const swiper_categories = new Swiper(".swiper_categories", {
    cssMode: true,
    spaceBetween: 30,
    slidesPerView: 6,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    // Optional parameters
    // loop: true,
  });

  const swiper_new_products = new Swiper(".swiper_new_products", {
    cssMode: true,
    spaceBetween: 30,
    slidesPerView: 4,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    // Optional parameters
    // loop: true,
  });
</script>
@endsection
