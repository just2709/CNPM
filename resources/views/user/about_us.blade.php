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
    <div class="col-inner col-9">
      <h1>
        <span id="Cay_canh_Minh_An_8211_don_vi_cung_cap_cay_canh_uy_tin_tai_Ha_Noi"><strong>Vườn cây mini – đơn vị cung cấp cây cảnh uy tín tại Việt Nam</strong></span>
      </h1>
      <p>
        Xuất phát từ nhu cầu của cuộc sống hiện đại, với mong muốn đưa thiên nhiên đến gần hơn với cuộc sống. <strong><em>Vườn cây mini</em></strong> đã không ngừng hoàn thiện và phát triển các dịch
        vụ nhằm xây dựng một không&nbsp; gian xanh hiện đại và chuyên nghiệp, gần gũi với thiên nhiên giúp mang đến cho Quý khách hàng sự thư thái và thoải mái để sáng tạo trong công việc và tận hưởng
        cuộc sống.
      </p>
      <h2>
        <span id="Cay_canh_Minh_An_hoat_dong_voi_cac_linh_vuc_kinh_doanh_chinh"
          ><strong><em>Vườn cây mini</em></strong> hoạt động với các lĩnh vực kinh doanh chính:</span
        >
      </h2>
      <p>&nbsp;</p>
      <h3>
        <span id="Dich_vu_ban_cay_canh_cua_Cay_canh_Minh_An"
          ><em><strong>&nbsp;Dịch vụ bán cây cảnh của Vườn cây mini</strong></em></span
        >
      </h3>
      <ul>
        <li>
          Bán buôn, bán lẻ cây cảnh nội ngoại thất, cây cảnh văn phòng, cây để bàn, cây phong thuỷ, cây sân vườn…Chúng tôi cam kết bán với giá rẻ nhất và dịch vụ tốt nhất đến với Quý khách hàng.
        </li>
        <li>Miễn phí vận chuyển tận nơi, cung cấp trọn gói đất trồng, chậu trồng, sỏi trang trí, đĩa lót,…</li>
        <li>Tư vấn, hướng dẫn cẩm nang chăm sóc cây xanh cho khách hàng trong suốt thời gian trồng và chơi cây.</li>
        <li>Bảo hành, đổi mới sản phẩm trong vòng 30 ngày nếu cây bị xấu, hỏng do lỗi của chúng tôi.</li>
        <li>Chương trình khách hàng thân thiết: Giảm 5% trên tổng hoa đơn cho mỗi lần mua hàng tiếp theo</li>
        <li>
          Chiết khấu cao cho doanh nghiệp. Quý doanh nghiệp muốn mua cây vui lòng liên hệ <strong>zalo/hotline 0988 470 440</strong> để được tư vấn giá tốt nhất.<br />
          <img
            loading="lazy"
            class="aligncenter wp-image-1972 size-full"
            src="https://caycanhminhan.vn/wp-content/uploads/2021/04/cay-xanh-van-phong.jpg"
            alt="cây cảnh văn phòng Minh An"
            width="575"
            height="382"
          />
        </li>
      </ul>
      <h3><span id="4_Dich_vu_cho_thue_cay_canh_cua_cay_canh_Minh_An">4. Dịch vụ cho thuê cây cảnh của Vườn cây mini:</span></h3>
      <ul>
        <li>
          Dịch vụ <strong><em>cho thuê cây cảnh</em></strong> văn phòng, cây xanh nội ngoại thất, cây phong thuỷ, cây sự kiện là thế mạnh nổi bật của chúng tôi với nhiều điểm ưu việt:
        </li>
      </ul>
      <ul>
        <li>Tư vấn, khảo sát tận nơi miễn phí để khách hàng có lựa chọn phù hợp nhất</li>
        <li>Cam kết giá rẻ nhất với dịch vụ tốt nhất</li>
        <li>Miễn phí vận chuyển tận nơi, cung cấp trọn gói đất trồng, chậu trồng, sỏi rải bề mặt, đĩa lót,…</li>
        <li>Chăm sóc, bảo dưỡng, thay đổi khi cây xấu, hỏng không đạt yêu cầu trong suốt thời gian hợp đồng.</li>
        <li>
          Không gây ảnh hưởng tới công việc và tài sản của khách hàng<a href="https://caycanhminhan.vn/wp-content/uploads/2021/04/van-phong-xanh.jpg"
            ><img
              loading="lazy"
              class="aligncenter size-full wp-image-1973"
              src="https://caycanhminhan.vn/wp-content/uploads/2021/04/van-phong-xanh.jpg"
              alt=""
              width="640"
              height="323"
              srcset="https://caycanhminhan.vn/wp-content/uploads/2021/04/van-phong-xanh.jpg 640w, https://caycanhminhan.vn/wp-content/uploads/2021/04/van-phong-xanh-600x303.jpg 600w"
              sizes="(max-width: 640px) 100vw, 640px"
          /></a>
        </li>
      </ul>
      <h3>
        <span id="Phuong_cham_cua_chung_toi_la"
          ><strong><em>Phương châm của chúng tôi là :</em></strong></span
        >
      </h3>
      <p>– Giá cả hợp lí, phù hợp với tất cả khách hàng</p>
      <p>– Sản phẩm độc đáo, sang trọng với Chất lượng dịch vụ tốt nhất</p>
      <p>– Sự hài lòng của khách hàng là mục tiêu duy nhất để tồn tại và phát triển</p>
      <p>
        <strong><em>&nbsp;Vườn cây mini </em></strong><strong><em>sự lựa chọn hoàn hảo cho không gian xanh của bạn</em></strong
        ><strong
          ><em>!<a href="https://caycanhminhan.vn/wp-content/uploads/2021/04/dem-cay-xanh-vao-khong-gian-song.jpg"></a></em
        ></strong>
      </p>
      <h3>
        <span id="CONG_TY_TNHH_MINH_AN"><strong>VƯỜN CÂY MINI</strong></span>
      </h3>
      <p>Số 3 phố Cầu Giấy, phường Láng Thượng, quận Đống Đa, Hà Nội.</p>
      <p>Hotline: +84 012-345-678</p>
      <p>Website: https://vuoncaymini.vn/</p>
      <p>Fan page: https://www.facebook.com/vuoncaymini</p>
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
