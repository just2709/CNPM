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
    <div class="col-9">
      <div class="col-inner">
        <div role="form" class="wpcf7" id="wpcf7-f6-p510-o1" lang="vi" dir="ltr">
          <div class="screen-reader-response">
            <p role="status" aria-live="polite" aria-atomic="true"></p>
            <ul></ul>
          </div>
          <form action="/lien-he/#wpcf7-f6-p510-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
            <div style="display: none">
              <input type="hidden" name="_wpcf7" value="6" />
              <input type="hidden" name="_wpcf7_version" value="5.5.6" />
              <input type="hidden" name="_wpcf7_locale" value="vi" />
              <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f6-p510-o1" />
              <input type="hidden" name="_wpcf7_container_post" value="510" />
              <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
            </div>
            <h3 class="rt_dk">Đăng ký tư vấn</h3>
            <p>
              <label>
                Họ tên<br />
                <span class="wpcf7-form-control-wrap your-name"
                  ><input type="text" name="your-name" value="" size="100" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"
                /></span>
              </label>
            </p>
            <p>
              <label>
                Số điện thoại<br />
                <span class="wpcf7-form-control-wrap tel-650"
                  ><input
                    type="tel"
                    name="tel-650"
                    value=""
                    size="100"
                    class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                    aria-required="true"
                    aria-invalid="false"
                /></span>
              </label>
            </p>
            <p>
              <label>
                Email<br />
                <span class="wpcf7-form-control-wrap your-email"
                  ><input
                    type="email"
                    name="your-email"
                    value=""
                    size="100"
                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                    aria-required="true"
                    aria-invalid="false"
                /></span>
              </label>
            </p>
            <p>
              <label>
                Địa chỉ<br />
                <span class="wpcf7-form-control-wrap text-930"><input type="text" name="text-930" value="" size="100" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span>
              </label>
            </p>
            <p>
              <label>
                Nội dung<br />
                <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="100" rows="5" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span>
              </label>
            </p>
            <p><input type="submit" value="Gửi" class="btn btn-success wpcf7-form-control has-spinner wpcf7-submit" /><span class="wpcf7-spinner"></span></p>
            <div id="cf7sr-635951afc16a0" class="cf7sr-g-recaptcha" data-sitekey="6LecklUdAAAAAL0YXVxEqSeC-Eu4pgw2VbuujfQw">
              <div style="width: 304px; height: 78px">
                <div>
                  <iframe
                    title="reCAPTCHA"
                    src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LecklUdAAAAAL0YXVxEqSeC-Eu4pgw2VbuujfQw&amp;co=aHR0cHM6Ly9jYXljYW5obWluaGFuLnZuOjQ0Mw..&amp;hl=en&amp;v=NJPGLzpIZgjszqyOymHUP0XR&amp;size=normal&amp;cb=r4yu16653vff"
                    width="304"
                    height="78"
                    role="presentation"
                    name="a-xqywfskzntaa"
                    frameborder="0"
                    scrolling="no"
                    sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"
                  ></iframe>
                </div>
                <textarea
                  id="g-recaptcha-response"
                  name="g-recaptcha-response"
                  class="g-recaptcha-response"
                  style="width: 500px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none"
                ></textarea>
              </div>
            </div>
            <span class="wpcf7-form-control-wrap cf7sr-recaptcha"><input type="hidden" name="cf7sr-recaptcha" value="" class="wpcf7-form-control" /></span>
            <p></p>
            <div class="wpcf7-response-output" aria-hidden="true"></div>
          </form>
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
