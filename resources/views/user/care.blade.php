@extends('layouts.app')
<style>
  .widget-title {
    color: #6aaf21;
    margin-bottom: 10px;
    display: block;
    font-weight: 600;
    text-transform: none;
    letter-spacing: 0;
    font-size: 20px;
  }
  .product_list_widget,
  .product_list_widget del span {
    color: gray !important;
  }
  ul.product_list_widget li {
    padding: 5px 5px 5px 5px;
  }
  ul.product_list_widget li {
    list-style: none;
    padding: 10px 0 5px 75px;
    min-height: 80px;
    position: relative;
    overflow: hidden;
    vertical-align: top;
    line-height: 1.33;
  }
  ul.product_list_widget li a:not(.remove) {
    display: block;
    margin-bottom: 5px;
    padding: 0;
    overflow: hidden;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
    line-height: 1.3;
  }
  ul.menu > li > a,
  ul.menu > li > span:first-child,
  .widget > ul > li > a,
  .widget > ul > li > span:first-child {
    display: inline-block;
    padding: 6px 0;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
  }
  .widget a {
    color: #212121;
  }
  a {
    color: #334862;
    text-decoration: none;
  }
  ul.product_list_widget li img {
    top: 10px;
    position: absolute;
    left: 0;
    width: 60px;
    height: 60px;
    margin-bottom: 5px;
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: 50% 50%;
    object-position: 50% 50%;
  }
  ul.product_list_widget li img {
    margin-left: 5px;
    border-radius: 99%;
  }
  ul {
    padding-left: 0px !important;
  }
  .woocommerce-Price-amount {
    color: black;
  }
</style>

@section('content')

<div class="container">
  <div class="row my-3">
    <div class="article-inner col-9">
      <header class="entry-header">
        <div class="entry-header-text entry-header-text-top text-left">
          <h1 class="entry-title">32+ mẫu cây thịnh vượng, ý nghĩa phong thủy, công dụng, cách trồng và chăm sóc từ A-Z</h1>
          <div class="entry-divider is-divider small"></div>
        </div>
      </header>
      <div class="entry-content single-page">
        <div id="ftwp-postcontent">
          <p>
            <strong>Cây thịnh vượng</strong> là loại cây kiểng lá nội thất thường được trồng trong nhà, đạt tại bàn làm việc, bàn tiếp khách,… tạo nên một không gian tươi mới và sinh động. Đây là loài
            cây rất thích hợp để trong phòng máy lạnh có thể trồng đất hoặc trồng thủy sinh. Thịnh vượng cũng là loại cây phong thủy mang đến nhiều may mắn tài lộc…
          </p>
          <figure id="attachment_65502" aria-describedby="caption-attachment-65502" style="width: 600px" class="wp-caption aligncenter">
            <img
              class="size-full wp-image-65502 entered lazyloaded"
              src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-mang-phong-thuy-tot.jpg"
              alt="32+ mẫu cây thịnh vượng, ý nghĩa phong thủy, công dụng, cách trồng và chăm sóc từ A-Z"
              width="600"
              height="400"
              data-lazy-srcset="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-mang-phong-thuy-tot.jpg 600w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-mang-phong-thuy-tot-510x340.jpg 510w"
              data-lazy-sizes="(max-width: 600px) 100vw, 600px"
              data-lazy-src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-mang-phong-thuy-tot.jpg"
              data-ll-status="loaded"
              sizes="(max-width: 600px) 100vw, 600px"
              srcset="
                https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-mang-phong-thuy-tot.jpg         600w,
                https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-mang-phong-thuy-tot-510x340.jpg 510w
              "
            /><noscript
              ><img
                class="size-full wp-image-65502"
                src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-mang-phong-thuy-tot.jpg"
                alt="32+ mẫu cây thịnh vượng, ý nghĩa phong thủy, công dụng, cách trồng và chăm sóc từ A-Z"
                width="600"
                height="400"
                srcset="
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-mang-phong-thuy-tot.jpg         600w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-mang-phong-thuy-tot-510x340.jpg 510w
                "
                sizes="(max-width: 600px) 100vw, 600px"
            /></noscript>
            <figcaption id="caption-attachment-65502" class="wp-caption-text">32+ mẫu cây thịnh vượng, ý nghĩa phong thủy, công dụng, cách trồng và chăm sóc từ A-Z</figcaption>
          </figure>
          <div id="ftwp-container-outer" class="ftwp-in-post ftwp-float-right"></div>
          <h2 id="ftoc-heading-1" class="ftwp-heading">
            <span style="color: #00a859"><strong>Giới thiệu chung về cây thịnh vượng</strong></span>
          </h2>
          <p>Thịnh vượng là loại cây có tên khoa học là <b>Aglaonema prosperity</b>, thuộc họ Araceae (ráy) và có hoa đẹp, hơn nữa loài cây này lại ẩn chứa nhiều ý nghĩa phong thủy sâu sắc.</p>
          <figure id="attachment_65496" aria-describedby="caption-attachment-65496" style="width: 600px" class="wp-caption aligncenter">
            <img
              class="size-full wp-image-65496 entered lazyloaded"
              src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-canh-thinh-vuong.jpg"
              alt="Cây cảnh thịnh vượng"
              width="600"
              height="600"
              data-lazy-srcset="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-canh-thinh-vuong.jpg 600w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-canh-thinh-vuong-150x150.jpg 150w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-canh-thinh-vuong-510x510.jpg 510w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-canh-thinh-vuong-100x100.jpg 100w"
              data-lazy-sizes="(max-width: 600px) 100vw, 600px"
              data-lazy-src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-canh-thinh-vuong.jpg"
              data-ll-status="loaded"
              sizes="(max-width: 600px) 100vw, 600px"
              srcset="
                https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-canh-thinh-vuong.jpg         600w,
                https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-canh-thinh-vuong-150x150.jpg 150w,
                https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-canh-thinh-vuong-510x510.jpg 510w,
                https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-canh-thinh-vuong-100x100.jpg 100w
              "
            /><noscript
              ><img
                class="size-full wp-image-65496"
                src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-canh-thinh-vuong.jpg"
                alt="Cây cảnh thịnh vượng"
                width="600"
                height="600"
                srcset="
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-canh-thinh-vuong.jpg         600w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-canh-thinh-vuong-150x150.jpg 150w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-canh-thinh-vuong-510x510.jpg 510w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-canh-thinh-vuong-100x100.jpg 100w
                "
                sizes="(max-width: 600px) 100vw, 600px"
            /></noscript>
            <figcaption id="caption-attachment-65496" class="wp-caption-text">Cây cảnh thịnh vượng</figcaption>
          </figure>
          <p>
            Chúng có xuất xứ từ Thái Lan, Indonesia và xuất hiện nhiều ở khu vực Đông Nam Á, Nam Trung Quốc và Bắc Ấn Độ. Cây được du nhập về Việt Nam từ rất lâu và được trồng làm cây nội thất văn
            phòng phổ biến.
          </p>
          <figure id="attachment_65503" aria-describedby="caption-attachment-65503" style="width: 600px" class="wp-caption aligncenter">
            <img
              class="size-full wp-image-65503 entered lazyloaded"
              src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/nguon-goc-cay-thinh-vuong.jpg"
              alt="Nguồn gốc cây thịnh vượng"
              width="600"
              height="800"
              data-lazy-srcset="https://caycanhhanoi.vn/wp-content/uploads/2022/10/nguon-goc-cay-thinh-vuong.jpg 600w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/nguon-goc-cay-thinh-vuong-510x680.jpg 510w"
              data-lazy-sizes="(max-width: 600px) 100vw, 600px"
              data-lazy-src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/nguon-goc-cay-thinh-vuong.jpg"
              data-ll-status="loaded"
              sizes="(max-width: 600px) 100vw, 600px"
              srcset="
                https://caycanhhanoi.vn/wp-content/uploads/2022/10/nguon-goc-cay-thinh-vuong.jpg         600w,
                https://caycanhhanoi.vn/wp-content/uploads/2022/10/nguon-goc-cay-thinh-vuong-510x680.jpg 510w
              "
            /><noscript
              ><img
                class="size-full wp-image-65503"
                src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/nguon-goc-cay-thinh-vuong.jpg"
                alt="Nguồn gốc cây thịnh vượng"
                width="600"
                height="800"
                srcset="
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/nguon-goc-cay-thinh-vuong.jpg         600w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/nguon-goc-cay-thinh-vuong-510x680.jpg 510w
                "
                sizes="(max-width: 600px) 100vw, 600px"
            /></noscript>
            <figcaption id="caption-attachment-65503" class="wp-caption-text">Nguồn gốc cây thịnh vượng</figcaption>
          </figure>
          <h2 id="ftoc-heading-2" class="ftwp-heading">
            <span style="color: #00a859"><strong>Cây thịnh vượng có đặc điểm gì?</strong></span>
          </h2>
          <h3 id="ftoc-heading-3" class="ftwp-heading">
            <strong><span style="color: #f99b1c">Về đặc điểm hình thái</span></strong>
          </h3>
          <ul>
            <li>Là loại cây kiểng lá đẹp với chiều cao trung bình khi trưởng thành từ 20-30cm.</li>
            <li>Lá của cây có bản lớn với đầu là nhọn, gân và cuống có màu trắng ngà hoặc màu hồng nhạt. Lá cây có màu xanh có điểm hồng bắt mắt.</li>
            <li>Thuộc cây rể chùm, rễ cây dễ bị tổn thương nên trong quá trình trồng và chăm sóc cần đặc biệt chú ý.</li>
          </ul>
          <figure id="attachment_65507" aria-describedby="caption-attachment-65507" style="width: 600px" class="wp-caption aligncenter">
            <img
              class="size-full wp-image-65507 entered lazyloaded"
              src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-cay-thinh-vuong.jpg"
              alt="Đặc điểm cây thịnh vượng"
              width="600"
              height="600"
              data-lazy-srcset="https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-cay-thinh-vuong.jpg 600w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-cay-thinh-vuong-150x150.jpg 150w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-cay-thinh-vuong-510x510.jpg 510w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-cay-thinh-vuong-100x100.jpg 100w"
              data-lazy-sizes="(max-width: 600px) 100vw, 600px"
              data-lazy-src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-cay-thinh-vuong.jpg"
              data-ll-status="loaded"
              sizes="(max-width: 600px) 100vw, 600px"
              srcset="
                https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-cay-thinh-vuong.jpg         600w,
                https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-cay-thinh-vuong-150x150.jpg 150w,
                https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-cay-thinh-vuong-510x510.jpg 510w,
                https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-cay-thinh-vuong-100x100.jpg 100w
              "
            /><noscript
              ><img
                class="size-full wp-image-65507"
                src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-cay-thinh-vuong.jpg"
                alt="Đặc điểm cây thịnh vượng"
                width="600"
                height="600"
                srcset="
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-cay-thinh-vuong.jpg         600w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-cay-thinh-vuong-150x150.jpg 150w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-cay-thinh-vuong-510x510.jpg 510w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-cay-thinh-vuong-100x100.jpg 100w
                "
                sizes="(max-width: 600px) 100vw, 600px"
            /></noscript>
            <figcaption id="caption-attachment-65507" class="wp-caption-text">Đặc điểm cây thịnh vượng</figcaption>
          </figure>
          <h3 id="ftoc-heading-4" class="ftwp-heading">
            <span style="color: #f99b1c"><strong>Về đặc điểm sinh thái</strong></span>
          </h3>
          <ul>
            <li><strong>Cây thịnh vượng ưa thích bóng râm</strong> nên có thể sống tốt khi trồng trong môi trường máy lạnh</li>
            <li>Cây thích hợp trồng đất hoặc trồng thủy sinh</li>
            <li>Hạn chế tác động của nắng ngắt vào vào cây.</li>
          </ul>
          <figure id="attachment_65508" aria-describedby="caption-attachment-65508" style="width: 600px" class="wp-caption aligncenter">
            <img
              class="size-full wp-image-65508 entered lazyloaded"
              src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-sinh-thai-cay-thinh-vuong.jpg"
              alt="Đặc điểm sinh thái cây thịnh vượng"
              width="600"
              height="600"
              data-lazy-srcset="https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-sinh-thai-cay-thinh-vuong.jpg 600w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-sinh-thai-cay-thinh-vuong-150x150.jpg 150w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-sinh-thai-cay-thinh-vuong-510x510.jpg 510w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-sinh-thai-cay-thinh-vuong-100x100.jpg 100w"
              data-lazy-sizes="(max-width: 600px) 100vw, 600px"
              data-lazy-src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-sinh-thai-cay-thinh-vuong.jpg"
              data-ll-status="loaded"
              sizes="(max-width: 600px) 100vw, 600px"
              srcset="
                https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-sinh-thai-cay-thinh-vuong.jpg         600w,
                https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-sinh-thai-cay-thinh-vuong-150x150.jpg 150w,
                https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-sinh-thai-cay-thinh-vuong-510x510.jpg 510w,
                https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-sinh-thai-cay-thinh-vuong-100x100.jpg 100w
              "
            /><noscript
              ><img
                class="size-full wp-image-65508"
                src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-sinh-thai-cay-thinh-vuong.jpg"
                alt="Đặc điểm sinh thái cây thịnh vượng"
                width="600"
                height="600"
                srcset="
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-sinh-thai-cay-thinh-vuong.jpg         600w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-sinh-thai-cay-thinh-vuong-150x150.jpg 150w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-sinh-thai-cay-thinh-vuong-510x510.jpg 510w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/dac-diem-sinh-thai-cay-thinh-vuong-100x100.jpg 100w
                "
                sizes="(max-width: 600px) 100vw, 600px"
            /></noscript>
            <figcaption id="caption-attachment-65508" class="wp-caption-text">Đặc điểm sinh thái cây thịnh vượng</figcaption>
          </figure>
          <h3 id="ftoc-heading-5" class="ftwp-heading">
            <span style="color: #f99b1c"><strong>Cây thịnh vượng có độc không?</strong></span>
          </h3>
          <p>
            Thịnh vượng là loại cây trồng làm cảnh chưa có tại liệu nào chúng minh cây có tác động tiêu cực đến sức khỏe của người và vật nuôi. Tuy nhiên đây là loài cây thuộc họ môn ráy nên nhựa của
            cây có thể gây kích ứng da, gây ngứa khi chạm phải.
          </p>
          <figure id="attachment_65509" aria-describedby="caption-attachment-65509" style="width: 600px" class="wp-caption aligncenter">
            <img
              class="size-full wp-image-65509 entered lazyloaded"
              src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-khong-co-doc.jpg"
              alt="Cây thịnh vượng không có độc chỉ có chất gây thích ứng da vi thuộc họ ráy"
              width="600"
              height="600"
              data-lazy-srcset="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-khong-co-doc.jpg 600w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-khong-co-doc-150x150.jpg 150w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-khong-co-doc-510x510.jpg 510w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-khong-co-doc-100x100.jpg 100w"
              data-lazy-sizes="(max-width: 600px) 100vw, 600px"
              data-lazy-src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-khong-co-doc.jpg"
              data-ll-status="loaded"
              sizes="(max-width: 600px) 100vw, 600px"
              srcset="
                https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-khong-co-doc.jpg         600w,
                https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-khong-co-doc-150x150.jpg 150w,
                https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-khong-co-doc-510x510.jpg 510w,
                https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-khong-co-doc-100x100.jpg 100w
              "
            /><noscript
              ><img
                class="size-full wp-image-65509"
                src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-khong-co-doc.jpg"
                alt="Cây thịnh vượng không có độc chỉ có chất gây thích ứng da vi thuộc họ ráy"
                width="600"
                height="600"
                srcset="
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-khong-co-doc.jpg         600w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-khong-co-doc-150x150.jpg 150w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-khong-co-doc-510x510.jpg 510w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-khong-co-doc-100x100.jpg 100w
                "
                sizes="(max-width: 600px) 100vw, 600px"
            /></noscript>
            <figcaption id="caption-attachment-65509" class="wp-caption-text">Cây thịnh vượng không có độc chỉ có chất gây thích ứng da vi thuộc họ ráy</figcaption>
          </figure>
          <blockquote>
            <p>
              Bạn có thể tham khảo giá bán cũng như một số đặc điểm khác của cây thông qua sản phẩm:
              <a href="cay-thinh-vuong" target="_blank" rel="noopener"><strong>Cây Thình Vượng</strong></a>
            </p>
          </blockquote>
          <h2 id="ftoc-heading-7" class="ftwp-heading">
            <span style="color: #00a859"><strong>Ý nghĩa cây thịnh vượng</strong></span>
          </h2>
          <ul>
            <li>Cây mang đến nhiều ý nghĩa tốt đẹp về mặt phong thủy, đem đến may mắn, thịnh vượng cho gia chủ.</li>
            <li>Cây còn có khả năng trừ tà ma, xua đuổi những điều xui xẻo trong cuộc sống cũng như là củng cố niềm tin và cuộc sống hưng thịnh, giàu sang, thuận lợi cho gia chủ.</li>
          </ul>
          <figure id="attachment_65491" aria-describedby="caption-attachment-65491" style="width: 600px" class="wp-caption aligncenter">
            <img
              class="size-full wp-image-65491 entered lazyloaded"
              src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-y-nghia-thong-thuy-sau-sac.jpg"
              alt="Cây thịnh vượng ý nghĩa phong thủy tốt đẹp"
              width="600"
              height="600"
              data-lazy-srcset="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-y-nghia-thong-thuy-sau-sac.jpg 600w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-y-nghia-thong-thuy-sau-sac-150x150.jpg 150w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-y-nghia-thong-thuy-sau-sac-510x510.jpg 510w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-y-nghia-thong-thuy-sau-sac-100x100.jpg 100w"
              data-lazy-sizes="(max-width: 600px) 100vw, 600px"
              data-lazy-src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-y-nghia-thong-thuy-sau-sac.jpg"
              data-ll-status="loaded"
              sizes="(max-width: 600px) 100vw, 600px"
              srcset="
                https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-y-nghia-thong-thuy-sau-sac.jpg         600w,
                https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-y-nghia-thong-thuy-sau-sac-150x150.jpg 150w,
                https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-y-nghia-thong-thuy-sau-sac-510x510.jpg 510w,
                https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-y-nghia-thong-thuy-sau-sac-100x100.jpg 100w
              "
            /><noscript
              ><img
                class="size-full wp-image-65491"
                src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-y-nghia-thong-thuy-sau-sac.jpg"
                alt="Cây thịnh vượng ý nghĩa phong thủy tốt đẹp"
                width="600"
                height="600"
                srcset="
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-y-nghia-thong-thuy-sau-sac.jpg         600w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-y-nghia-thong-thuy-sau-sac-150x150.jpg 150w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-y-nghia-thong-thuy-sau-sac-510x510.jpg 510w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-thinh-vuong-y-nghia-thong-thuy-sau-sac-100x100.jpg 100w
                "
                sizes="(max-width: 600px) 100vw, 600px"
            /></noscript>
            <figcaption id="caption-attachment-65491" class="wp-caption-text">Cây thịnh vượng ý nghĩa phong thủy tốt đẹp</figcaption>
          </figure>
        </div>
      </div>
    </div>
    <div class="col-3 border-start">
      <aside id="woocommerce_products-6" class="widget woocommerce widget_products border-bottom">
        <span class="widget-title"><span>Sản phẩm bán chạy</span></span>
        <div class="is-divider small"></div>
        <ul class="product_list_widget">
          <li>
            <a href="cay-nga-voi"
              ><img
                width="100"
                height="100"
                src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi-100x100.jpg"
                class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail entered lazyloaded"
                alt="Cây ngà voi kiểng"
                data-lazy-srcset="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi-100x100.jpg 100w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi-150x150.jpg 150w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi-510x510.jpg 510w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi.jpg 600w"
                data-lazy-sizes="(max-width: 100px) 100vw, 100px"
                data-lazy-src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi-100x100.jpg"
                data-ll-status="loaded"
                sizes="(max-width: 100px) 100vw, 100px"
                srcset="
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi-100x100.jpg 100w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi-150x150.jpg 150w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi-510x510.jpg 510w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi.jpg         600w
                "
              /><noscript
                ><img
                  width="100"
                  height="100"
                  src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi-100x100.jpg"
                  class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail"
                  alt="Cây ngà voi kiểng"
                  srcset="
                    https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi-100x100.jpg 100w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi-150x150.jpg 150w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi-510x510.jpg 510w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi.jpg         600w
                  "
                  sizes="(max-width: 100px) 100vw, 100px" /></noscript
              ><span class="product-title">Cây Ngà Voi</span></a
            ><span class="woocommerce-Price-amount amount"
              ><bdi>199.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span
            >
          </li>
          <li>
            <a href="kim-bam-ti-sat-hoa-lan"
              ><img
                width="100"
                height="100"
                src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan-100x100.jpg"
                class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail entered lazyloaded"
                alt="Kìm cắt ti sắt hoa lan hồ điệp"
                data-lazy-srcset="https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan-100x100.jpg 100w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan-150x150.jpg 150w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan-510x510.jpg 510w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan.jpg 600w"
                data-lazy-sizes="(max-width: 100px) 100vw, 100px"
                data-lazy-src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan-100x100.jpg"
                data-ll-status="loaded"
                sizes="(max-width: 100px) 100vw, 100px"
                srcset="
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan-100x100.jpg 100w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan-150x150.jpg 150w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan-510x510.jpg 510w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan.jpg         600w
                "
              /><noscript
                ><img
                  width="100"
                  height="100"
                  src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan-100x100.jpg"
                  class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail"
                  alt="Kìm cắt ti sắt hoa lan hồ điệp"
                  srcset="
                    https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan-100x100.jpg 100w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan-150x150.jpg 150w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan-510x510.jpg 510w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan.jpg         600w
                  "
                  sizes="(max-width: 100px) 100vw, 100px" /></noscript
              ><span class="product-title">Kìm Bấm Ti Sắt Hoa Lan</span></a
            ><del aria-hidden="true"
              ><span class="woocommerce-Price-amount amount"
                ><bdi>420.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span
              ></del
            >
            <ins
              ><span class="woocommerce-Price-amount amount"
                ><bdi>380.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span
              ></ins
            >
          </li>
          <li>
            <a href="cay-hoa-quynh"
              ><img
                width="100"
                height="100"
                src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh-100x100.jpg"
                class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail entered lazyloaded"
                alt="Cây hoa quỳnh chậu treo"
                data-lazy-srcset="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh-100x100.jpg 100w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh-150x150.jpg 150w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh-510x510.jpg 510w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh.jpg 600w"
                data-lazy-sizes="(max-width: 100px) 100vw, 100px"
                data-lazy-src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh-100x100.jpg"
                data-ll-status="loaded"
                sizes="(max-width: 100px) 100vw, 100px"
                srcset="
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh-100x100.jpg 100w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh-150x150.jpg 150w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh-510x510.jpg 510w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh.jpg         600w
                "
              /><noscript
                ><img
                  width="100"
                  height="100"
                  src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh-100x100.jpg"
                  class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail"
                  alt="Cây hoa quỳnh chậu treo"
                  srcset="
                    https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh-100x100.jpg 100w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh-150x150.jpg 150w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh-510x510.jpg 510w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh.jpg         600w
                  "
                  sizes="(max-width: 100px) 100vw, 100px" /></noscript
              ><span class="product-title">Cây Hoa Quỳnh</span></a
            ><span class="woocommerce-Price-amount amount"
              ><bdi>350.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span
            >
          </li>
          <li>
            <a href="cay-rau-rong"
              ><img
                width="100"
                height="100"
                src="https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa-100x100.jpg"
                class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail entered lazyloaded"
                alt="Cây râu rông hợp mệnh hỏa"
                data-lazy-srcset="https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa-100x100.jpg 100w, https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa-150x150.jpg 150w, https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa-510x510.jpg 510w, https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa.jpg 600w"
                data-lazy-sizes="(max-width: 100px) 100vw, 100px"
                data-lazy-src="https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa-100x100.jpg"
                data-ll-status="loaded"
                sizes="(max-width: 100px) 100vw, 100px"
                srcset="
                  https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa-100x100.jpg 100w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa-150x150.jpg 150w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa-510x510.jpg 510w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa.jpg         600w
                "
              /><noscript
                ><img
                  width="100"
                  height="100"
                  src="https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa-100x100.jpg"
                  class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail"
                  alt="Cây râu rông hợp mệnh hỏa"
                  srcset="
                    https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa-100x100.jpg 100w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa-150x150.jpg 150w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa-510x510.jpg 510w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa.jpg         600w
                  "
                  sizes="(max-width: 100px) 100vw, 100px" /></noscript
              ><span class="product-title">Cây Râu Rồng</span></a
            ><del aria-hidden="true"
              ><span class="woocommerce-Price-amount amount"
                ><bdi>860.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span
              ></del
            >
            <ins
              ><span class="woocommerce-Price-amount amount"
                ><bdi>730.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span
              ></ins
            >
          </li>
          <li>
            <a href="cay-hoa-thanh-xa"
              ><img
                width="100"
                height="100"
                src="https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17-100x100.jpg"
                class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail entered lazyloaded"
                alt="Cây hoa thanh xà hợp mệnh thủy"
                data-lazy-srcset="https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17-100x100.jpg 100w, https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17-150x150.jpg 150w, https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17-510x510.jpg 510w, https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17.jpg 600w"
                data-lazy-sizes="(max-width: 100px) 100vw, 100px"
                data-lazy-src="https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17-100x100.jpg"
                data-ll-status="loaded"
                sizes="(max-width: 100px) 100vw, 100px"
                srcset="
                  https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17-100x100.jpg 100w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17-150x150.jpg 150w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17-510x510.jpg 510w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17.jpg         600w
                "
              /><noscript
                ><img
                  width="100"
                  height="100"
                  src="https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17-100x100.jpg"
                  class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail"
                  alt="Cây hoa thanh xà hợp mệnh thủy"
                  srcset="
                    https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17-100x100.jpg 100w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17-150x150.jpg 150w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17-510x510.jpg 510w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17.jpg         600w
                  "
                  sizes="(max-width: 100px) 100vw, 100px" /></noscript
              ><span class="product-title">Cây Hoa Thanh Xà</span></a
            ><del aria-hidden="true"
              ><span class="woocommerce-Price-amount amount"
                ><bdi>99.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span
              ></del
            >
            <ins
              ><span class="woocommerce-Price-amount amount"
                ><bdi>75.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span
              ></ins
            >
          </li>
        </ul>
      </aside>
      <aside id="woocommerce_products-6" class="widget woocommerce widget_products border-bottom">
        <span class="widget-title"><span>Sản phẩm mới</span></span>
        <div class="is-divider small"></div>
        <ul class="product_list_widget">
          <li>
            <a href="cay-nga-voi"
              ><img
                width="100"
                height="100"
                src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi-100x100.jpg"
                class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail entered lazyloaded"
                alt="Cây ngà voi kiểng"
                data-lazy-srcset="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi-100x100.jpg 100w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi-150x150.jpg 150w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi-510x510.jpg 510w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi.jpg 600w"
                data-lazy-sizes="(max-width: 100px) 100vw, 100px"
                data-lazy-src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi-100x100.jpg"
                data-ll-status="loaded"
                sizes="(max-width: 100px) 100vw, 100px"
                srcset="
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi-100x100.jpg 100w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi-150x150.jpg 150w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi-510x510.jpg 510w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi.jpg         600w
                "
              /><noscript
                ><img
                  width="100"
                  height="100"
                  src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi-100x100.jpg"
                  class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail"
                  alt="Cây ngà voi kiểng"
                  srcset="
                    https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi-100x100.jpg 100w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi-150x150.jpg 150w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi-510x510.jpg 510w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-nga-voi.jpg         600w
                  "
                  sizes="(max-width: 100px) 100vw, 100px" /></noscript
              ><span class="product-title">Cây Ngà Voi</span></a
            ><span class="woocommerce-Price-amount amount"
              ><bdi>199.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span
            >
          </li>
          <li>
            <a href="kim-bam-ti-sat-hoa-lan"
              ><img
                width="100"
                height="100"
                src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan-100x100.jpg"
                class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail entered lazyloaded"
                alt="Kìm cắt ti sắt hoa lan hồ điệp"
                data-lazy-srcset="https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan-100x100.jpg 100w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan-150x150.jpg 150w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan-510x510.jpg 510w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan.jpg 600w"
                data-lazy-sizes="(max-width: 100px) 100vw, 100px"
                data-lazy-src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan-100x100.jpg"
                data-ll-status="loaded"
                sizes="(max-width: 100px) 100vw, 100px"
                srcset="
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan-100x100.jpg 100w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan-150x150.jpg 150w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan-510x510.jpg 510w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan.jpg         600w
                "
              /><noscript
                ><img
                  width="100"
                  height="100"
                  src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan-100x100.jpg"
                  class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail"
                  alt="Kìm cắt ti sắt hoa lan hồ điệp"
                  srcset="
                    https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan-100x100.jpg 100w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan-150x150.jpg 150w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan-510x510.jpg 510w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/10/kim-bam-ti-sat-hoa-lan.jpg         600w
                  "
                  sizes="(max-width: 100px) 100vw, 100px" /></noscript
              ><span class="product-title">Kìm Bấm Ti Sắt Hoa Lan</span></a
            ><del aria-hidden="true"
              ><span class="woocommerce-Price-amount amount"
                ><bdi>420.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span
              ></del
            >
            <ins
              ><span class="woocommerce-Price-amount amount"
                ><bdi>380.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span
              ></ins
            >
          </li>
          <li>
            <a href="cay-hoa-quynh"
              ><img
                width="100"
                height="100"
                src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh-100x100.jpg"
                class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail entered lazyloaded"
                alt="Cây hoa quỳnh chậu treo"
                data-lazy-srcset="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh-100x100.jpg 100w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh-150x150.jpg 150w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh-510x510.jpg 510w, https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh.jpg 600w"
                data-lazy-sizes="(max-width: 100px) 100vw, 100px"
                data-lazy-src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh-100x100.jpg"
                data-ll-status="loaded"
                sizes="(max-width: 100px) 100vw, 100px"
                srcset="
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh-100x100.jpg 100w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh-150x150.jpg 150w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh-510x510.jpg 510w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh.jpg         600w
                "
              /><noscript
                ><img
                  width="100"
                  height="100"
                  src="https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh-100x100.jpg"
                  class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail"
                  alt="Cây hoa quỳnh chậu treo"
                  srcset="
                    https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh-100x100.jpg 100w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh-150x150.jpg 150w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh-510x510.jpg 510w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/10/cay-hoa-quynh.jpg         600w
                  "
                  sizes="(max-width: 100px) 100vw, 100px" /></noscript
              ><span class="product-title">Cây Hoa Quỳnh</span></a
            ><span class="woocommerce-Price-amount amount"
              ><bdi>350.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span
            >
          </li>
          <li>
            <a href="cay-rau-rong"
              ><img
                width="100"
                height="100"
                src="https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa-100x100.jpg"
                class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail entered lazyloaded"
                alt="Cây râu rông hợp mệnh hỏa"
                data-lazy-srcset="https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa-100x100.jpg 100w, https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa-150x150.jpg 150w, https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa-510x510.jpg 510w, https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa.jpg 600w"
                data-lazy-sizes="(max-width: 100px) 100vw, 100px"
                data-lazy-src="https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa-100x100.jpg"
                data-ll-status="loaded"
                sizes="(max-width: 100px) 100vw, 100px"
                srcset="
                  https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa-100x100.jpg 100w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa-150x150.jpg 150w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa-510x510.jpg 510w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa.jpg         600w
                "
              /><noscript
                ><img
                  width="100"
                  height="100"
                  src="https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa-100x100.jpg"
                  class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail"
                  alt="Cây râu rông hợp mệnh hỏa"
                  srcset="
                    https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa-100x100.jpg 100w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa-150x150.jpg 150w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa-510x510.jpg 510w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-rau-rong-hop-menh-hoa.jpg         600w
                  "
                  sizes="(max-width: 100px) 100vw, 100px" /></noscript
              ><span class="product-title">Cây Râu Rồng</span></a
            ><del aria-hidden="true"
              ><span class="woocommerce-Price-amount amount"
                ><bdi>860.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span
              ></del
            >
            <ins
              ><span class="woocommerce-Price-amount amount"
                ><bdi>730.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span
              ></ins
            >
          </li>
          <li>
            <a href="cay-hoa-thanh-xa"
              ><img
                width="100"
                height="100"
                src="https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17-100x100.jpg"
                class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail entered lazyloaded"
                alt="Cây hoa thanh xà hợp mệnh thủy"
                data-lazy-srcset="https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17-100x100.jpg 100w, https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17-150x150.jpg 150w, https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17-510x510.jpg 510w, https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17.jpg 600w"
                data-lazy-sizes="(max-width: 100px) 100vw, 100px"
                data-lazy-src="https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17-100x100.jpg"
                data-ll-status="loaded"
                sizes="(max-width: 100px) 100vw, 100px"
                srcset="
                  https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17-100x100.jpg 100w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17-150x150.jpg 150w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17-510x510.jpg 510w,
                  https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17.jpg         600w
                "
              /><noscript
                ><img
                  width="100"
                  height="100"
                  src="https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17-100x100.jpg"
                  class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail"
                  alt="Cây hoa thanh xà hợp mệnh thủy"
                  srcset="
                    https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17-100x100.jpg 100w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17-150x150.jpg 150w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17-510x510.jpg 510w,
                    https://caycanhhanoi.vn/wp-content/uploads/2022/07/cay-hoa-thanh-xa-17.jpg         600w
                  "
                  sizes="(max-width: 100px) 100vw, 100px" /></noscript
              ><span class="product-title">Cây Hoa Thanh Xà</span></a
            ><del aria-hidden="true"
              ><span class="woocommerce-Price-amount amount"
                ><bdi>99.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span
              ></del
            >
            <ins
              ><span class="woocommerce-Price-amount amount"
                ><bdi>75.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span
              ></ins
            >
          </li>
        </ul>
      </aside>
    </div>
  </div>
</div>
@endsection
