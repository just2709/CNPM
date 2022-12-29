<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config("app.name", "Laravel") }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
      body {
        font-family: "Mali";
      }
      :root {
        --main-bg-color: rgb(22, 172, 47);
      }
      .main-navbar {
        border-bottom: 1px solid #ccc;
      }
      .main-navbar .top-navbar {
        background-color: var(--main-bg-color);
        /* padding-top: 10px; */
        /* padding-bottom: 10px; */
      }
      .main-navbar .top-navbar .brand-name {
        color: #fff;
      }
      .main-navbar .top-navbar .nav-link {
        color: #fff;
        font-size: 16px;
        font-weight: 500;
      }
      .main-navbar .top-navbar .dropdown-menu {
        padding: 0px 0px;
        border-radius: 0px;
      }
      .main-navbar .top-navbar .dropdown-menu .dropdown-item {
        padding: 8px 16px;
        border-bottom: 1px solid #ccc;
        font-size: 14px;
      }
      .main-navbar .top-navbar .dropdown-menu .dropdown-item i {
        width: 20px;
        text-align: center;
        color: #2874f0;
        font-size: 14px;
      }
      .main-navbar .navbar {
        padding: 0px;
        background-color: #fff;
      }
      .main-navbar .navbar .nav-item .nav-link {
        padding: 8px 20px;
        color: #000;
        font-size: 15px;
      }

      @media only screen and (max-width: 600px) {
        .main-navbar .top-navbar .nav-link {
          font-size: 12px;
          padding: 8px 10px;
        }
      }

      .category-card {
        border: 1px solid #ddd;
        box-shadow: 0 0.125rem 0.25rem rgb(0 0 0 / 8%);
        margin-bottom: 24px;
        background-color: #fff;
      }
      .category-card a {
        text-decoration: none;
      }
      .category-card .category-card-img {
        height: 300px;
        border-bottom: 1px solid #ccc;
      }
      .category-card .category-card-body {
        padding: 10px 16px;
      }
      .category-card .category-card-body h5 {
        margin-bottom: 0px;
        font-size: 18px;
        font-weight: 600;
        color: #000;
        text-align: center;
      }
      .cate_img {
        height: 200px;
        border-radius: 100rem;
      }
      .cate_body {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #000;
      }
      .swiper {
        height: 87vh;
      }
      .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 80vw;
      }
      .fa-star {
        color: gold;
      }

      /* product card */
      .product-grid .product-image {
        position: relative;
        overflow: hidden;
      }
      .product-grid .product-image a.image {
        display: block;
      }
      .product-grid.new .product-image a.image:before,
      .product-grid.new .product-image a.image:before {
        content: "";
        background-color: var(--main-bg-color);
        height: 70px;
        width: 70px;
        border-radius: 50%;
        position: absolute;
        right: -25px;
        top: -25px;
      }
      /* .product-grid .product-image a.image:after {
              height: 120px;
              width: 120px;
              right: auto;
              left: -120px;
              top: auto;
              bottom: -120px;
              transition: all 0.3s ease;
            }
            .product-grid:hover .product-image a.image:after {
              left: -25px;
              bottom: -40px;
            } */
      .product-grid .product-image img {
        width: 100%;
        height: 300px;
        object-fit: contain;
      }
      .product-grid .product-new-label {
        color: yellow;
        font-size: 16px;
        font-weight: 600;
        text-transform: uppercase;
        position: absolute;
        top: 7px;
        right: 5px;
      }
      .product-grid .product-links {
        padding: 0;
        margin: 0;
        list-style: none;
        position: absolute;
        bottom: 7px;
        right: 10px;
        z-index: 1;
      }
      .product-grid .product-links li {
        margin: 0 0 4px;
        transform: translateX(100px);
        transition: all 0.5s ease 0s;
      }
      .product-grid:hover .product-links li {
        transform: translateX(0);
      }

      /* .product-grid:hover .price {
              color:yellow;
              background-color: transparent;
            } */

      /* .product-grid:hover {
              box-shadow: 5px 10px red !important;
            } */

      .box-shadow {
        -webkit-box-shadow: 0 1px 1px rgba(72, 78, 85, 0.6);
        box-shadow: 0 1px 1px rgba(72, 78, 85, 0.6);
        -webkit-transition: all 0.2s ease-out;
        -moz-transition: all 0.2s ease-out;
        -ms-transition: all 0.2s ease-out;
        -o-transition: all 0.2s ease-out;
        transition: all 0.2s ease-out;
      }

      .box-shadow:hover {
        -webkit-box-shadow: 0 20px 40px rgba(72, 78, 85, 0.6);
        box-shadow: 0 20px 40px rgba(72, 78, 85, 0.6);
        -webkit-transform: translateY(-10px);
        -moz-transform: translateY(-10px);
        -ms-transform: translateY(-10px);
        -o-transform: translateY(-10px);
        transform: translateY(-10px);
      }

      .product-grid:hover .product-links li:nth-child(2) {
        transition-delay: 0.1s;
      }
      .product-grid:hover .product-links li:nth-child(3) {
        transition-delay: 0.2s;
      }
      .product-grid .product-links li:last-child {
        margin: 0;
      }
      .product-grid .product-links li a {
        color: #000;
        background: rgba(255, 216, 0, 0.5);
        font-size: 20px;
        text-align: center;
        line-height: 48px;
        height: 45px;
        width: 45px;
        border-radius: 50%;
        display: block;
        position: relative;
        transition: all 200ms ease 0s;
      }
      .product-grid .product-links li a:hover {
        color: white;
        background: var(--main-bg-color);
      }
      .product-grid .product-links li a:before,
      .product-grid .product-links li a:after {
        content: attr(data-tip);
        color: #fff;
        background-color: #000;
        font-size: 14px;
        line-height: 22px;
        border-radius: 0;
        padding: 8px 15px;
        border-radius: 5px;
        white-space: nowrap;
        transform: translateY(-50%);
        visibility: hidden;
        position: absolute;
        right: 60px;
        top: 50%;
        z-index: 10000;
        transition: all 0.3s ease;
      }
      .product-grid .product-links li a:after {
        content: "";
        height: 15px;
        width: 15px;
        padding: 0;
        border-radius: 0;
        transform: translateY(-50%) rotate(45deg);
        right: 58px;
        z-index: -1;
      }
      .product-grid .product-links li a:hover:before,
      .product-grid .product-links li a:hover:after {
        visibility: visible;
      }
      .product-grid .product-links li a:hover:before {
        right: 55px;
      }
      .product-grid .product-links li a:hover:after {
        right: 53px;
      }
      /* .product-grid .price {
              color: red;
              font-size: 22px;
              font-weight: 700;
              position: absolute;
              bottom: 10px;
              left: 10px;
              background-color: rgba(255, 216, 0, 0.8);
            } */

      .price {
        color: red;
      }

      .product-grid .product-content {
        padding: 12px 0 0;
        position: relative;
      }
      .product-grid .title {
        font-size: 20px;
        font-weight: 500;
        text-transform: capitalize;
        margin: 0 0 10px;
        min-height: 40px;
        max-height: 40px;
        /* overflow: hidden; */
      }
      .product-grid .title a {
        color: #000;
        transition: all 0.3s ease;
        text-decoration: none;

      }
      .product-grid .title a:hover {
        color: #666;
      }
      .product-content .rating {
        padding: 0;
        margin: 0 0 7px 0;
        list-style: none;
      }
      .product-grid .rating li {
        color: #ffba00;
        font-size: 14px;
        display: inline-block;
      }
      .product-grid .rating li.disable {
        color: #b6b3b0;
      }
      @media screen and (max-width: 990px) {
        .product-grid {
          margin: 0 0 30px;
        }
      }

      .btn.btn-outline-success {
        border-radius: 0 !important;
      }

      .active {
        background-color: var(--main-bg-color);
      }

      .active .nav-link {
        color: white !important;
      }

      .gallery-wrap .img-big-wrap img {
        height: 450px;
        width: auto;
        display: inline-block;
        cursor: zoom-in;
      }

      .gallery-wrap .img-small-wrap .item-gallery {
        width: 60px;
        height: 60px;
        border: 1px solid #ddd;
        margin: 7px 2px;
        display: inline-block;
        overflow: hidden;
      }

      .gallery-wrap .img-small-wrap {
        text-align: center;
      }
      .gallery-wrap .img-small-wrap img {
        max-width: 100%;
        max-height: 100%;
        object-fit: cover;
        border-radius: 4px;
        cursor: zoom-in;
      }
      
      .m-auto p {
        margin-bottom: 0px !important;
      }

      /* footer */
      .footer-area{
          padding: 40px 0px;
          background-image: url('https://cdn.pixabay.com/photo/2019/04/02/19/42/background-4098632_1280.jpg');
          background-repeat: no-repeat;
          background-size: cover;

          color: #fff;
      }
      .footer-area a{
          text-decoration: none;
      }
      .footer-area .footer-heading{
          font-size: 24px;
          color: #fff;
      }
      .footer-area .footer-underline{
          height: 1px;
          width: 70px;
          background-color: #ddd;
          margin: 10px 0px;
      }
      .copyright-area{
          padding: 14px 0px;
          background-color: #3a3a3a;
      }
      .copyright-area p{
          margin-bottom: 0px;
          color: #fff;
      }
      .copyright-area .social-media{
          text-align: end;
      }
      .copyright-area .social-media a{
          margin: 0px 10px;
          color: #fff;
          width: 20px;
      }
      /* end footer */

      /* .swiper {
        width: 100%;
        height: 100%;
      } */

      
      #content-wrapper{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
      }

      #featured{
        height: 500px;
        object-fit: cover;
        cursor: pointer;
        border: 2px solid black;
      }

      .detail .thumbnail{
        object-fit: cover;
        max-width: 180px;
        max-height: 100px;
        cursor: pointer;
        opacity: 0.5;
        margin: 5px;
        border: 2px solid black;

      }

      .detail .thumbnail:hover{
        opacity:1;
      }

      .detail .active{
        opacity: 1;
      }

      #slide-wrapper{
        max-width: 500px;
        display: flex;
        min-height: 100px;
        align-items: center;
      }

      #slider{
        width: 440px;
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;

      }

      #slider::-webkit-scrollbar {
          width: 8px;

      }

      #slider::-webkit-scrollbar-track {
          -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);

      }
      
      #slider::-webkit-scrollbar-thumb {
        background-color: #dede2e;
        outline: 1px solid slategrey;
        border-radius: 100px;

      }

      #slider::-webkit-scrollbar-thumb:hover{
          background-color: #18b5ce;
      }

      .detail .arrow{
        width: 30px;
        height: 30px;
        cursor: pointer;
        transition: .3s;
      }

      .detail .arrow:hover{
        opacity: .5;
        width: 35px;
        height: 35px;
      }

      .main-navbar .top-navbar .dropdown-menu .dropdown-item i{
        color:rgb(22, 172, 47) !important;
      }

    </style>
    @livewireStyles
  </head>
  <body>
    <div id="app">
      @include('layouts.inc.user.navbar')
      <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">
            {{ config("app.name", "Laravel") }}
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav> -->

      <main class="">@yield('content')</main>
      @include('layouts.inc.user.footer')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery-3.6.1.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" 
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" 
        crossorigin="anonymous"></script>
        <script src="{{ asset('assets/exzoom/jquery.exzoom.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
    <x-livewire-alert::scripts />
    @yield('scripts') @livewireScripts @stack('script')
    
  </body>
</html>
