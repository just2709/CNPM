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
    <div class="col-sm-9" id="left-panel">
      <div class="w100"><h1 class="tit-h1 marb20 padb20 font30 UTMHelvetIns cl_xanh6">Chính sách giao hàng</h1></div>
      <div class="content-news" id="pills-des">
        <p style="text-align: justify">
          <strong>1. PHẠM VI ÁP DỤNG:</strong><br />
          – Tất cả các khách hàng mua sản phẩm tại website hoặc khách hàng đến trực tiếp xem và mua hàng tại công ty có nhu cầu giao hàng trực tiếp tại nhà.<br />
          <strong>2. HÌNH THỨC ÁP DỤNG:</strong>
        </p>
        <p><strong>2.1. Giao hàng miễn phí :</strong></p>
        <p style="text-align: justify">
          Giao hàng miễn phí trong phạm vi các quận thuộc nội thành Hà Nội và các đại lý của Web Cây Cảnh&nbsp;– áp dụng cho các đơn hàng có giá trị từ <strong>1.500.000 đồng</strong>. Không áp dụng
          với các cá nhân mua buôn.
        </p>
        <p><strong>2.2 . Giao hàng tính phí:</strong></p>
        <p style="text-align: justify">
          – Ngoài trường hợp giao hàng miễn phí trên, các trường hợp còn lại sẽ được tính phí giao hàng theo bảng phí vận chuyển của hãng vận chuyển thứ 3 hoặc theo bảng phí của công ty. Chi phí này
          sẽ được công ty thông báo và xác nhận với quý khách trước khi quý khách tiến hành thanh toán và công ty tiến hành gửi hàng.
        </p>
        <p><strong>3. THỜI GIAN GIAO HÀNG:</strong></p>
        <p style="text-align: justify">– Thời gian giao hàng sẽ giao trong ngày tùy thuộc vào khoảng cách vận chuyển và kích thước cây.</p>
        <p style="text-align: justify">
          – Trong một số trường hợp khách quan Công ty có thể giao hàng chậm trễ do những điều kiện bất khả kháng như thời tiết xấu, điều kiện giao thông không thuận lợi, xe hỏng hóc trên đường, trục
          trặc trong quá trình xuất cây cảnh khỏi kho.
        </p>
        <p style="text-align: justify">
          – Trong thời gian chờ đợi nhận hàng, Quý khách có bất cứ thắc mắc gì về thông tin vận chuyển xin vui lòng liên hệ hotline <strong>0987.654.321</strong> của chúng tôi để nhận trợ giúp.
        </p>
        <p><strong>4. TRÁCH NHIỆM VỚI HÀNG HÓA VẬN CHUYỂN.</strong></p>
        <p style="text-align: justify">
          – Công ty sẽ chịu trách nhiệm với hàng hóa và các rủi ro như mất mát hoặc hư hại của sản phẩm trong suốt quá trình vận chuyển hàng từ kho của chúng tôi đến quý khách.
        </p>
        <p style="text-align: justify">
          – Quý khách có trách nhiệm kiểm tra hàng hóa khi nhận hàng. Khi phát hiện cây cảnh bị hư hại, gãy cảnh, vỡ chậu, hoặc sai loại cây thì ký xác nhận tình trạng này với Nhân viên giao nhận và
          thông báo ngay cho Bộ phận chăm sóc khách hàng theo số hotline bán hàn&nbsp;<strong>0987.654.321</strong>&nbsp;của Công ty.
        </p>
        <p style="text-align: justify">
          – Sau khi qúy khách đã ký nhận hàng mà không ghi chú hoặc có ý kiến về hàng hóa. Công ty không có trách nhiệm với những yêu cầu đổi trả từ phía quý khách sau này.
        </p>
        <p style="text-align: justify">
          – Nếu dịch vụ vận chuyển do quý khách chỉ định và lựa chọn thì quý khách sẽ chịu trách nhiệm với chuyến hàng và các rủi ro kèm theo, như mất mát hoặc hư hại hàng trong suốt quá trình vận
          chuyển hàng từ kho hàng của công ty đến quý khách. Khách hàng sẽ chịu trách nhiệm về cước phí và tổn thất liên quan.
        </p>
        <p><strong>5. CÁC ĐIỀU KIỆN KHÁC</strong></p>
        <p style="text-align: justify">– Chính sách giao hàng miễn phí không áp dụng đối với những sản phẩm được mua trong chương trình khuyến mại giờ vàng, giá sốc…..</p>
        <p style="text-align: justify">– Chi phí cầu đường, phí vào thôn xã hoặc phí đỗ xe tại chung cư do khách hàng tự thanh toán.</p>
        <p style="text-align: justify">
          – Công ty chỉ giao hàng cho đúng người nhận mà Quý khách hàng đã đăng ký khi mua hàng. Trong quá trình giao hàng nếu có sự thay đổi người nhận một cách không rõ ràng, chúng tôi có quyền từ
          chối giao hàng và yêu cầu quý khách hàng nhận hàng tại địa điểm của bán hàng của công ty.
        </p>
        <p style="text-align: justify">
          – Nếu địa chỉ giao hàng không rõ ràng, nằm trong ngõ ngách, hoặc ở những nơi nguy hiểm, những vùng đồi núi hiểm trở, phương tiện giao thông đi lại khó khăn, chúng tôi có quyền từ chối vận
          chuyển, giao nhận hàng trực tiếp.
        </p>
        <p style="text-align: justify">
          – Trong các trường hợp bất khả kháng, do thiên tai, lũ lụt, hỏng hóc cầu phà …, chúng tôi không chịu trách nhiệm bồi thường thiệt hại phát sinh do giao hàng không đúng thời gian hoặc không
          vận chuyển hàng hóa đến địa điểm như đã thỏa thuận với khách hàng.
        </p>
        <p style="text-align: justify">
          – Trường hợp chúng tôi đã vận chuyển hàng đến địa điểm giao nhận như thỏa thuận lúc mua hàng, nhưng vì một lý do nào đó khách hàng yêu cầu trả lại hàng thì lúc đó khách hàng phải chịu chi
          phí vận chuyển theo quy định của công ty.
        </p>
        <p style="text-align: justify">– Đối với những sản phẩm nặng và cồng kềnh cần vận chuyển lên tầng mà không có thang máy đề nghị khách hàng hỗ trợ trong việc giao nhận.</p>
        <p style="text-align: justify">
          – Trong những ngày đặc biệt hoặc các ngày Lễ hội do chính sách giao thông chung bị hạn chế (cấm đường đối với một số phương tiện…) thời gian giao hàng có thể sẽ thay đổi, Chúng tôi sẽ gọi
          điện cho khách hàng để thống nhất thời gian giao nhận.
        </p>
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
