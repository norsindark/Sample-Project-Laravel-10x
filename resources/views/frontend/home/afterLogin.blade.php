@extends('frontend/layouts.master')

@section('title')
    <title>Home page</title>
@endsection


@section('content')
    <!--=======Page Content Area=========-->
    <main id="pageContentArea">
        <!--========================================
Slider Area
===========================================-->

        <div class="xv-slider-wrap">
            <div
                class="owl-carousel slider_controls1"
                data-dots="true"
                data-slides="1"
                data-slides-md="1"
                data-slides-sm="1"
                data-margin="0"
                data-loop="true"
                data-prev="fa fa-angle-left"
                data-next="fa fa-angle-right"
                data-nav="false"


            >
                <div
                    class="xv-slide"
                    style="background-image: radial-gradient(circle, #7ca3dc, #1e71de)"
                >
                    <div class="container">
                        <div class="row">
                            <div class="hidden-xs hidden-sm col-md-6">
                                <img src="/Duanmautemplate/assets/img/slider/4.jpg" alt="" />
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="xv-slider-content clearfix color-white">
                                    <h1>LÀN DA SÁNG HỒNG</h1>
                                    <p>
                                        Hãy trải nghiệm sự thay đổi đáng kinh ngạc cho làn da của
                                        bạn với combo sản phẩm trẻ đẹp của chúng tôi. Bạn sẽ tự
                                        tin hơn với làn da rạng ngời và tươi trẻ hơn bao giờ hết.
                                        Hãy bắt đầu hành trình trẻ đẹp của bạn ngay hôm nay.
                                    </p>
                                    <a href="#" class="btn btn-grey btn-price"
                                    >Gía: 350.000 VNĐ</a
                                    >
                                    <a href="#" class="btn btn-grey">MUA NGAY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="xv-slide"
                    style="background-image: radial-gradient(circle, #7ca3dc, #1e71de)"
                >
                    <div class="container">
                        <div class="row">
                            <div class="hidden-xs hidden-sm col-md-6">
                                <img src="/Duanmautemplate/assets/img/slider/6.jpg" alt="" />
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="xv-slider-content clearfix color-white">
                                    <h1>DÀNH CHO BÉ</h1>
                                    <p>
                                        Miếng hạ sốt thường chứa các thành phần giảm nhiệt độ như
                                        acetaminophen hoặc ibuprofen, và chúng được thiết kế để dễ
                                        dàng đặt lên da của bé. Điều này giúp tạo ra sự thoải mái
                                        và giảm nhiệt độ nhanh chóng
                                    </p>
                                    <a href="#" class="btn btn-grey btn-price">Gía: 220.000 VNĐ</a>
                                    <a href="#" class="btn btn-grey">MUA NGAY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="xv-slide"
                    style="background-image: radial-gradient(circle, #7ca3dc, #1e71de)"
                >
                    <div class="container">
                        <div class="row">
                            <div class="hidden-xs hidden-sm col-md-6">
                                <img src="/Duanmautemplate/assets/img/slider/5.jpg" alt="" />
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="xv-slider-content clearfix color-white">
                                    <h1>HỖ TRỢ SỨC KHỎE</h1>
                                    <p>
                                        Dành cho trẻ em, người lớn, người già giúp tăng sức đề
                                        kháng, khỏe mạnh, có một cuộc sống hạnh phúc và tràn đầy
                                        năng lượng. Điều này giúp duy trì một chất lượng cuộc sống
                                        tốt hơn và tận hưởng mọi khoảnh khắc của cuộc sống.
                                    </p>
                                    <a href="#" class="btn btn-grey btn-price">Gía: 400.000 VNĐ</a>
                                    <a href="#" class="btn btn-grey">MUA NGAY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--slider Wrap-->

        <!--=================================
Benifits
=================================-->

        <section class="xv-benefits pt-30 pb-30 shadow-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="xv-benefit">
                            <i class="fa fa-plane"></i>
                            <div class="content">
                                <h5>MIỄN PHÍ VẬN CHUYỂN</h5>
                                <p>Theo chính sách giao hàng</p>
                            </div>
                            <!--content-->
                        </div>
                        <!--xv-benefit-->
                    </div>
                    <!--column-4-->
                    <div class="col-sm-4">
                        <div class="xv-benefit">
                            <i class="fa fa-undo"></i>
                            <div class="content">
                                <h5>ĐỔI TRẢ TRONG 30 NGÀY</h5>
                                <p>Kể từ ngày mua hàng</p>
                            </div>
                            <!--content-->
                        </div>
                        <!--xv-benefit-->
                    </div>
                    <!--column-4-->
                    <div class="col-sm-4">
                        <div class="xv-benefit fix_border">
                            <i class="fa fa-credit-card"></i>
                            <div class="content">
                                <h5>THANH TOÁN ĐẢM BẢO</h5>
                                <p>Yên tâm, an toàn, nhiều hình thức</p>
                            </div>
                            <!--content-->
                        </div>
                        <!--xv-benefit-->
                    </div>
                    <!--column-4-->
                </div>
                <!--row-->
            </div>
            <!--container-->
        </section>
        <!--xv-benefits-->

        <!--=================================
new items
=================================-->

        <div class="container">
            <div class="product-overview pt-25 pb-45">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 hidden-xs">
                        <nav class="secondary-nav">
                            <form class="search-form">
                                <input type="text" placeholder="Search..." />
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                            <!--search form-->
                            <ul>
                                <li>
                                    <a href="#"><span class="p-count">225</span>Dinh dưỡng</a>
                                </li>
                                <li>
                                    <a href="#"
                                    ><span class="p-count">100</span>Vitamin & Khoáng chất</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                    ><span class="p-count">105</span>Sức khoẻ tim mạch</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                    ><span class="p-count">357</span>Tăng sức đề kháng, miễn
                                        dịch</a
                                    >
                                </li>
                                <li>
                                    <a href="#"><span class="p-count">400</span>Hỗ trợ tiêu hóa</a>
                                </li>
                                <li>
                                    <a href="#"><span class="p-count">500</span>Sinh lý - Nội tiết tố</a>
                                </li>
                                <li>
                                    <a href="#"><span class="p-count">248</span>Khác</a>
                                </li>
                            </ul>
                        </nav>
                        <!--secondary nav-->
                    </div>

                    <div class="col-xs-12 col-sm-9">
                        <section class="new-product">
                            <header class="sec-heading text-center">
                                <div class="category-wrap">
                    <span class="categorise"
                    ><i class="fa fa-bars"></i>Danh mục sản phẩm<i
                            class="fa style fa-caret-down"
                        ></i
                        ></span>
                                    <ul class="cat-dropDown">
                                        <li><a href="#">Dinh dưỡng</a></li>
                                        <li><a href="#">Vitamin & Khoáng chất</a></li>
                                        <li><a href="#">Sức khoẻ tim mạch</a></li>
                                        <li><a href="#">Tăng sức đề kháng, miễn dịch</a></li>
                                        <li><a href="#">Hỗ trợ tiêu hóa</a></li>
                                    </ul>
                                </div>
                                <h2><span>MỚI</span></h2>
                                <span>Cập nhập 10-02-2023</span>
                            </header>
                            <!--header-->
                            <div class="xv-product-slides mt-25 mb-25">
                                <div
                                    class="owl-carousel slider_controls1 products"
                                    data-thumbnail="figure .xv-superimage"
                                    data-product=".xv-product"
                                    data-dots="false"
                                    data-prev="fa fa-angle-left"
                                    data-next="fa fa-angle-right"
                                    data-slides="3"
                                    data-slides-md="2"
                                    data-slides-sm="1"
                                    data-margin="24"
                                    data-loop="true"
                                    data-nav="true"
                                >
                                    <div
                                        data-pid="xyz100"
                                        data-name="Bông tẩy trang Pharmacity"
                                        data-category="Chăm sóc da mặt"
                                        data-price="250"
                                        class="xv-product style shadow-around"
                                    >
                                        <figure>
                                            <a href="#"
                                            ><img
                                                    class="xv-superimage"
                                                    src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg"
                                                    alt=""
                                                /></a>
                                            <figcaption>
                                                <ul>
                                                    <li>
                                                        <a
                                                            data-qv-tab="#qvt-wishlist"
                                                            class="btn-cart flytoQuickView btn-square btn-blue"
                                                            href="#"
                                                        ><i class="fa fa-heart"></i
                                                            ></a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            data-qv-tab="#qvt-compare"
                                                            class="btn-cart flytoQuickView btn-square btn-blue"
                                                            href="#"
                                                        ><i class="fa fa-exchange"></i
                                                            ></a>
                                                    </li>
                                                    <li>
                                                        <a class="btn-cart btn-square btn-blue" href="#"
                                                        ><i class="fa fa-expand"></i
                                                            ></a>
                                                    </li>
                                                </ul>
                                            </figcaption>
                                        </figure>
                                        <div class="xv-product-content">
                                            <h3>
                                                <a href="detail1.html"
                                                >Bông tẩy trang Pharmacity Cotton Puffs (Hộp 90 miếng) - New</a
                                                >
                                            </h3>
                                            <div class="color-opt"><p>Bông tẩy trang được làm từ 100% cotton tự nhiên mang lại cảm giác mềm mại và mịn màng khi sử dụng...</p>
                                            </div>


                                            <span class="xv-price">250.000 VNĐ</span>
                                            <a
                                                data-qv-tab="#qvt-cart"
                                                href="#"
                                                class="product-buy flytoQuickView"
                                            >MUA</a
                                            >
                                        </div>
                                    </div>

                                    <div
                                        data-pid="xyz100"
                                        data-name="Bông tẩy trang Pharmacity"
                                        data-category="Chăm sóc da mặt"
                                        data-price="250"
                                        class="xv-product style shadow-around"
                                    >
                                        <figure>
                                            <a href="#"
                                            ><img
                                                    class="xv-superimage"
                                                    src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg"
                                                    alt=""
                                                /></a>
                                            <figcaption>
                                                <ul>
                                                    <li>
                                                        <a
                                                            data-qv-tab="#qvt-wishlist"
                                                            class="btn-cart flytoQuickView btn-square btn-blue"
                                                            href="#"
                                                        ><i class="fa fa-heart"></i
                                                            ></a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            data-qv-tab="#qvt-compare"
                                                            class="btn-cart flytoQuickView btn-square btn-blue"
                                                            href="#"
                                                        ><i class="fa fa-exchange"></i
                                                            ></a>
                                                    </li>
                                                    <li>
                                                        <a class="btn-cart btn-square btn-blue" href="#"
                                                        ><i class="fa fa-expand"></i
                                                            ></a>
                                                    </li>
                                                </ul>
                                            </figcaption>
                                        </figure>
                                        <div class="xv-product-content">
                                            <h3>
                                                <a href="detail1.html"
                                                >Bông tẩy trang Pharmacity Cotton Puffs (Hộp 90 miếng) - New</a
                                                >
                                            </h3>
                                            <div class="color-opt"><p>Bông tẩy trang được làm từ 100% cotton tự nhiên mang lại cảm giác mềm mại và mịn màng khi sử dụng...</p>
                                            </div>


                                            <span class="xv-price">250.000 VNĐ</span>
                                            <a
                                                data-qv-tab="#qvt-cart"
                                                href="#"
                                                class="product-buy flytoQuickView"
                                            >MUA</a
                                            >
                                        </div>
                                    </div>

                                    <div
                                        data-pid="xyz100"
                                        data-name="Bông tẩy trang Pharmacity"
                                        data-category="Chăm sóc da mặt"
                                        data-price="250"
                                        class="xv-product style shadow-around"
                                    >
                                        <figure>
                                            <a href="#"
                                            ><img
                                                    class="xv-superimage"
                                                    src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg"
                                                    alt=""
                                                /></a>
                                            <figcaption>
                                                <ul>
                                                    <li>
                                                        <a
                                                            data-qv-tab="#qvt-wishlist"
                                                            class="btn-cart flytoQuickView btn-square btn-blue"
                                                            href="#"
                                                        ><i class="fa fa-heart"></i
                                                            ></a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            data-qv-tab="#qvt-compare"
                                                            class="btn-cart flytoQuickView btn-square btn-blue"
                                                            href="#"
                                                        ><i class="fa fa-exchange"></i
                                                            ></a>
                                                    </li>
                                                    <li>
                                                        <a class="btn-cart btn-square btn-blue" href="#"
                                                        ><i class="fa fa-expand"></i
                                                            ></a>
                                                    </li>
                                                </ul>
                                            </figcaption>
                                        </figure>
                                        <div class="xv-product-content">
                                            <h3>
                                                <a href="detail1.html"
                                                >Bông tẩy trang Pharmacity Cotton Puffs (Hộp 90 miếng) - New</a
                                                >
                                            </h3>
                                            <div class="color-opt"><p>Bông tẩy trang được làm từ 100% cotton tự nhiên mang lại cảm giác mềm mại và mịn màng khi sử dụng...</p>
                                            </div>


                                            <span class="xv-price">250.000 VNĐ</span>
                                            <a
                                                data-qv-tab="#qvt-cart"
                                                href="#"
                                                class="product-buy flytoQuickView"
                                            >MUA</a
                                            >
                                        </div>
                                    </div>

                                    <div
                                        data-pid="xyz100"
                                        data-name="Bông tẩy trang Pharmacity"
                                        data-category="Chăm sóc da mặt"
                                        data-price="250"
                                        class="xv-product style shadow-around"
                                    >
                                        <figure>
                                            <a href="#"
                                            ><img
                                                    class="xv-superimage"
                                                    src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg"
                                                    alt=""
                                                /></a>
                                            <figcaption>
                                                <ul>
                                                    <li>
                                                        <a
                                                            data-qv-tab="#qvt-wishlist"
                                                            class="btn-cart flytoQuickView btn-square btn-blue"
                                                            href="#"
                                                        ><i class="fa fa-heart"></i
                                                            ></a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            data-qv-tab="#qvt-compare"
                                                            class="btn-cart flytoQuickView btn-square btn-blue"
                                                            href="#"
                                                        ><i class="fa fa-exchange"></i
                                                            ></a>
                                                    </li>
                                                    <li>
                                                        <a class="btn-cart btn-square btn-blue" href="#"
                                                        ><i class="fa fa-expand"></i
                                                            ></a>
                                                    </li>
                                                </ul>
                                            </figcaption>
                                        </figure>
                                        <div class="xv-product-content">
                                            <h3>
                                                <a href="detail1.html"
                                                >Bông tẩy trang Pharmacity Cotton Puffs (Hộp 90 miếng) - New</a
                                                >
                                            </h3>
                                            <div class="color-opt"><p>Bông tẩy trang được làm từ 100% cotton tự nhiên mang lại cảm giác mềm mại và mịn màng khi sử dụng...</p>
                                            </div>


                                            <span class="xv-price">250.000 VNĐ</span>
                                            <a
                                                data-qv-tab="#qvt-cart"
                                                href="#"
                                                class="product-buy flytoQuickView"
                                            >MUA</a
                                            >
                                        </div>
                                    </div>

                                    <div
                                        data-pid="xyz100"
                                        data-name="Bông tẩy trang Pharmacity"
                                        data-category="Chăm sóc da mặt"
                                        data-price="250"
                                        class="xv-product style shadow-around"
                                    >
                                        <figure>
                                            <a href="#"
                                            ><img
                                                    class="xv-superimage"
                                                    src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg"
                                                    alt=""
                                                /></a>
                                            <figcaption>
                                                <ul>
                                                    <li>
                                                        <a
                                                            data-qv-tab="#qvt-wishlist"
                                                            class="btn-cart flytoQuickView btn-square btn-blue"
                                                            href="#"
                                                        ><i class="fa fa-heart"></i
                                                            ></a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            data-qv-tab="#qvt-compare"
                                                            class="btn-cart flytoQuickView btn-square btn-blue"
                                                            href="#"
                                                        ><i class="fa fa-exchange"></i
                                                            ></a>
                                                    </li>
                                                    <li>
                                                        <a class="btn-cart btn-square btn-blue" href="#"
                                                        ><i class="fa fa-expand"></i
                                                            ></a>
                                                    </li>
                                                </ul>
                                            </figcaption>
                                        </figure>
                                        <div class="xv-product-content">
                                            <h3>
                                                <a href="detail1.html"
                                                >Bông tẩy trang Pharmacity Cotton Puffs (Hộp 90 miếng) - New</a
                                                >
                                            </h3>
                                            <div class="color-opt"><p>Bông tẩy trang được làm từ 100% cotton tự nhiên mang lại cảm giác mềm mại và mịn màng khi sử dụng...</p>
                                            </div>


                                            <span class="xv-price">250.000 VNĐ</span>
                                            <a
                                                data-qv-tab="#qvt-cart"
                                                href="#"
                                                class="product-buy flytoQuickView"
                                            >MUA</a
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!--co-->
                </div>
                <!--row-->
            </div>
            <!--product-overview -->
        </div>
        <!--container-->

        <!--========================================================================
hot deal / No fly to cart when clicked on "buy now", instead open deal page.
===========================================================================-->

        <div class="container">
            <section class="pro-sale-timeout">
                <div
                    class="owl-carousel slider_controls4"
                    data-dots="false"
                    data-prev="hot-deal-btn l"
                    data-next="hot-deal-btn r"
                    data-margin="0"
                    data-slides="1"
                    data-slides-md="1"
                    data-slides-sm="1"
                    data-loop="true"
                    data-nav="true"
                >
                    <div class="pro-sale-inner clearfix">
                        <div class="saletimeout-content text-center">
                            <h2 STYLE="color: #ff4575; font-weight: 600" >SẢN PHẨM DINH DƯỠNG</h2>
                            <span>Ưu đãi hấp dẫn 360.000 VNĐ</span>
                            <div
                                class="counter-wrapper"
                                data-target="March 11, 2017 09:25:00"
                            ></div>
                            <!--counter-wrapper-->
                            <a href="#">MUA NGAY</a>
                        </div>
                        <!--saletimeout content-->
                        <figure>
                            <img class="img_hotfee" src="/Duanmautemplate/assets/img/product/free1.png" alt="" />
                        </figure>
                    </div>
                    <!--pro-sale-inner-->
                    <div class="pro-sale-inner clearfix">
                        <div class="saletimeout-content text-center">
                            <h2 STYLE="color: #ff4575; font-weight: 600" >SẢN PHẨM DINH DƯỠNG</h2>
                            <span>Ưu đãi hấp dẫn 360.000 VNĐ</span>
                            <div
                                class="counter-wrapper"
                                data-target="March 11, 2017 09:25:00"
                            ></div>
                            <!--counter-wrapper-->
                            <a href="#">MUA NGAY</a>
                        </div>
                        <!--saletimeout content-->
                        <figure>
                            <img class="img_hotfee" src="/Duanmautemplate/assets/img/product/free1.png" alt="" />
                        </figure>
                    </div>
                    <!--pro-sale-inner-->
                </div>
            </section>
            <!--pro-sale-timeout-->
        </div>
        <!--container-->

        <!--========================================
featured
===========================================-->

        <div class="container">
            <div class="xv-featured pt-25 pb-30">
                <header class="sec-heading text-center">
                    <div class="category-wrap style">
              <span class="categorise"
              ><i class="fa fa-bars"></i>Danh mục sản phẩm<i
                      class="fa style fa-caret-down"
                  ></i
                  ></span>
                        <ul class="cat-dropDown">
                            <li><a href="#">Dinh dưỡng</a></li>
                            <li><a href="#">Vitamin & Khoáng chất</a></li>
                            <li><a href="#">Sức khoẻ tim mạch</a></li>
                            <li><a href="#">Tăng sức đề kháng, miễn dịch</a></li>
                            <li><a href="#">Hỗ trợ tiêu hóa</a></li>
                        </ul>
                    </div>
                    <h2><span>SẢN PHẨM NỔI BẬT</span></h2>
                    <span>Tháng 9 - 2023</span>
                </header>
                <!--header-->

                <div class="xv-product-slides mt-25 mb-25">
                    <div
                        class="owl-carousel slider_controls1 products"
                        data-thumbnail="figure .xv-superimage"
                        data-product=".xv-product"
                        data-dots="false"
                        data-prev="fa fa-angle-left"
                        data-next="fa fa-angle-right"
                        data-slides="4"
                        data-slides-md="2"
                        data-slides-sm="1"
                        data-margin="24"
                        data-loop="true"
                        data-nav="true"
                    >
                        <div
                            data-pid="xyz200"
                            data-name="Smartphone Apple iPhone 5 64GB"
                            data-category="mobiles"
                            data-price="250"
                            class="xv-product style shadow-around"
                        >
                            <figure>
                                <a href="#"
                                ><img
                                        class="xv-superimage"
                                        src="/Duanmautemplate/assets/img/product/new2.jpg"
                                        alt=""
                                    /></a>
                                <figcaption>
                                    <ul>
                                        <li>
                                            <a
                                                data-qv-tab="#qvt-wishlist"
                                                class="btn-cart flytoQuickView btn-square btn-blue"
                                                href="#"
                                            ><i class="fa fa-heart"></i
                                                ></a>
                                        </li>
                                        <li>
                                            <a
                                                data-qv-tab="#qvt-compare"
                                                class="btn-cart flytoQuickView btn-square btn-blue"
                                                href="#"
                                            ><i class="fa fa-exchange"></i
                                                ></a>
                                        </li>
                                        <li>
                                            <a class="btn-cart btn-square btn-blue" href="#"
                                            ><i class="fa fa-expand"></i
                                                ></a>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                            <!--figure-->
                            <div class="xv-product-content">
                                <h3>
                                    <a href="detail1.html">Hỗ trợ xương khớp SUNLIFE CalDeSun Osteo Liquid (Chai 200ml)</a>
                                </h3>
                                <div class="color-opt">
                                    <p>1ml có chứa Canxi (canxi carbonat) 50mg, Magi...</p>
                                </div>

                                <span class="xv-price">220.000 VNĐ</span>
                                <a
                                    data-qv-tab="#qvt-cart"
                                    href="#"
                                    class="product-buy flytoQuickView"
                                >MUA</a
                                >
                            </div>
                        </div>
                        <!--xv-product-->

                        <div
                            data-pid="xyz200"
                            data-name="Smartphone Apple iPhone 5 64GB"
                            data-category="mobiles"
                            data-price="250"
                            class="xv-product style shadow-around"
                        >
                            <figure>
                                <a href="#"
                                ><img
                                        class="xv-superimage"
                                        src="/Duanmautemplate/assets/img/product/new2.jpg"
                                        alt=""
                                    /></a>
                                <figcaption>
                                    <ul>
                                        <li>
                                            <a
                                                data-qv-tab="#qvt-wishlist"
                                                class="btn-cart flytoQuickView btn-square btn-blue"
                                                href="#"
                                            ><i class="fa fa-heart"></i
                                                ></a>
                                        </li>
                                        <li>
                                            <a
                                                data-qv-tab="#qvt-compare"
                                                class="btn-cart flytoQuickView btn-square btn-blue"
                                                href="#"
                                            ><i class="fa fa-exchange"></i
                                                ></a>
                                        </li>
                                        <li>
                                            <a class="btn-cart btn-square btn-blue" href="#"
                                            ><i class="fa fa-expand"></i
                                                ></a>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                            <!--figure-->
                            <div class="xv-product-content">
                                <h3>
                                    <a href="detail1.html">Hỗ trợ xương khớp SUNLIFE CalDeSun Osteo Liquid (Chai 200ml)</a>
                                </h3>
                                <div class="color-opt">
                                    <p>1ml có chứa Canxi (canxi carbonat) 50mg, Magi...</p>
                                </div>

                                <span class="xv-price">220.000 VNĐ</span>
                                <a
                                    data-qv-tab="#qvt-cart"
                                    href="#"
                                    class="product-buy flytoQuickView"
                                >MUA</a
                                >
                            </div>
                        </div>
                        <!--xv-product-->

                        <div
                            data-pid="xyz200"
                            data-name="Smartphone Apple iPhone 5 64GB"
                            data-category="mobiles"
                            data-price="250"
                            class="xv-product style shadow-around"
                        >
                            <figure>
                                <a href="#"
                                ><img
                                        class="xv-superimage"
                                        src="/Duanmautemplate/assets/img/product/new2.jpg"
                                        alt=""
                                    /></a>
                                <figcaption>
                                    <ul>
                                        <li>
                                            <a
                                                data-qv-tab="#qvt-wishlist"
                                                class="btn-cart flytoQuickView btn-square btn-blue"
                                                href="#"
                                            ><i class="fa fa-heart"></i
                                                ></a>
                                        </li>
                                        <li>
                                            <a
                                                data-qv-tab="#qvt-compare"
                                                class="btn-cart flytoQuickView btn-square btn-blue"
                                                href="#"
                                            ><i class="fa fa-exchange"></i
                                                ></a>
                                        </li>
                                        <li>
                                            <a class="btn-cart btn-square btn-blue" href="#"
                                            ><i class="fa fa-expand"></i
                                                ></a>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                            <!--figure-->
                            <div class="xv-product-content">
                                <h3>
                                    <a href="detail1.html">Hỗ trợ xương khớp SUNLIFE CalDeSun Osteo Liquid (Chai 200ml)</a>
                                </h3>
                                <div class="color-opt">
                                    <p>1ml có chứa Canxi (canxi carbonat) 50mg, Magi...</p>
                                </div>

                                <span class="xv-price">220.000 VNĐ</span>
                                <a
                                    data-qv-tab="#qvt-cart"
                                    href="#"
                                    class="product-buy flytoQuickView"
                                >MUA</a
                                >
                            </div>
                        </div>
                        <!--xv-product-->

                        <div
                            data-pid="xyz200"
                            data-name="Smartphone Apple iPhone 5 64GB"
                            data-category="mobiles"
                            data-price="250"
                            class="xv-product style shadow-around"
                        >
                            <figure>
                                <a href="#"
                                ><img
                                        class="xv-superimage"
                                        src="/Duanmautemplate/assets/img/product/new2.jpg"
                                        alt=""
                                    /></a>
                                <figcaption>
                                    <ul>
                                        <li>
                                            <a
                                                data-qv-tab="#qvt-wishlist"
                                                class="btn-cart flytoQuickView btn-square btn-blue"
                                                href="#"
                                            ><i class="fa fa-heart"></i
                                                ></a>
                                        </li>
                                        <li>
                                            <a
                                                data-qv-tab="#qvt-compare"
                                                class="btn-cart flytoQuickView btn-square btn-blue"
                                                href="#"
                                            ><i class="fa fa-exchange"></i
                                                ></a>
                                        </li>
                                        <li>
                                            <a class="btn-cart btn-square btn-blue" href="#"
                                            ><i class="fa fa-expand"></i
                                                ></a>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                            <!--figure-->
                            <div class="xv-product-content">
                                <h3>
                                    <a href="detail1.html">Hỗ trợ xương khớp SUNLIFE CalDeSun Osteo Liquid (Chai 200ml)</a>
                                </h3>
                                <div class="color-opt">
                                    <p>1ml có chứa Canxi (canxi carbonat) 50mg, Magi...</p>
                                </div>

                                <span class="xv-price">220.000 VNĐ</span>
                                <a
                                    data-qv-tab="#qvt-cart"
                                    href="#"
                                    class="product-buy flytoQuickView"
                                >MUA</a
                                >
                            </div>
                        </div>
                        <!--xv-product-->

                        <div
                            data-pid="xyz200"
                            data-name="Smartphone Apple iPhone 5 64GB"
                            data-category="mobiles"
                            data-price="250"
                            class="xv-product style shadow-around"
                        >
                            <figure>
                                <a href="#"
                                ><img
                                        class="xv-superimage"
                                        src="/Duanmautemplate/assets/img/product/new2.jpg"
                                        alt=""
                                    /></a>
                                <figcaption>
                                    <ul>
                                        <li>
                                            <a
                                                data-qv-tab="#qvt-wishlist"
                                                class="btn-cart flytoQuickView btn-square btn-blue"
                                                href="#"
                                            ><i class="fa fa-heart"></i
                                                ></a>
                                        </li>
                                        <li>
                                            <a
                                                data-qv-tab="#qvt-compare"
                                                class="btn-cart flytoQuickView btn-square btn-blue"
                                                href="#"
                                            ><i class="fa fa-exchange"></i
                                                ></a>
                                        </li>
                                        <li>
                                            <a class="btn-cart btn-square btn-blue" href="#"
                                            ><i class="fa fa-expand"></i
                                                ></a>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                            <!--figure-->
                            <div class="xv-product-content">
                                <h3>
                                    <a href="detail1.html">Hỗ trợ xương khớp SUNLIFE CalDeSun Osteo Liquid (Chai 200ml)</a>
                                </h3>
                                <div class="color-opt">
                                    <p>1ml có chứa Canxi (canxi carbonat) 50mg, Magi...</p>
                                </div>

                                <span class="xv-price">220.000 VNĐ</span>
                                <a
                                    data-qv-tab="#qvt-cart"
                                    href="#"
                                    class="product-buy flytoQuickView"
                                >MUA</a
                                >
                            </div>
                        </div>
                        <!--xv-product-->

                        <div
                            data-pid="xyz200"
                            data-name="Smartphone Apple iPhone 5 64GB"
                            data-category="mobiles"
                            data-price="250"
                            class="xv-product style shadow-around"
                        >
                            <figure>
                                <a href="#"
                                ><img
                                        class="xv-superimage"
                                        src="/Duanmautemplate/assets/img/product/new2.jpg"
                                        alt=""
                                    /></a>
                                <figcaption>
                                    <ul>
                                        <li>
                                            <a
                                                data-qv-tab="#qvt-wishlist"
                                                class="btn-cart flytoQuickView btn-square btn-blue"
                                                href="#"
                                            ><i class="fa fa-heart"></i
                                                ></a>
                                        </li>
                                        <li>
                                            <a
                                                data-qv-tab="#qvt-compare"
                                                class="btn-cart flytoQuickView btn-square btn-blue"
                                                href="#"
                                            ><i class="fa fa-exchange"></i
                                                ></a>
                                        </li>
                                        <li>
                                            <a class="btn-cart btn-square btn-blue" href="#"
                                            ><i class="fa fa-expand"></i
                                                ></a>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                            <!--figure-->
                            <div class="xv-product-content">
                                <h3>
                                    <a href="detail1.html">Hỗ trợ xương khớp SUNLIFE CalDeSun Osteo Liquid (Chai 200ml)</a>
                                </h3>
                                <div class="color-opt">
                                    <p>1ml có chứa Canxi (canxi carbonat) 50mg, Magi...</p>
                                </div>

                                <span class="xv-price">220.000 VNĐ</span>
                                <a
                                    data-qv-tab="#qvt-cart"
                                    href="#"
                                    class="product-buy flytoQuickView"
                                >MUA</a
                                >
                            </div>
                        </div>
                        <!--xv-product-->

                        <div
                            data-pid="xyz200"
                            data-name="Smartphone Apple iPhone 5 64GB"
                            data-category="mobiles"
                            data-price="250"
                            class="xv-product style shadow-around"
                        >
                            <figure>
                                <a href="#"
                                ><img
                                        class="xv-superimage"
                                        src="/Duanmautemplate/assets/img/product/new2.jpg"
                                        alt=""
                                    /></a>
                                <figcaption>
                                    <ul>
                                        <li>
                                            <a
                                                data-qv-tab="#qvt-wishlist"
                                                class="btn-cart flytoQuickView btn-square btn-blue"
                                                href="#"
                                            ><i class="fa fa-heart"></i
                                                ></a>
                                        </li>
                                        <li>
                                            <a
                                                data-qv-tab="#qvt-compare"
                                                class="btn-cart flytoQuickView btn-square btn-blue"
                                                href="#"
                                            ><i class="fa fa-exchange"></i
                                                ></a>
                                        </li>
                                        <li>
                                            <a class="btn-cart btn-square btn-blue" href="#"
                                            ><i class="fa fa-expand"></i
                                                ></a>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                            <!--figure-->
                            <div class="xv-product-content">
                                <h3>
                                    <a href="detail1.html">Hỗ trợ xương khớp SUNLIFE CalDeSun Osteo Liquid (Chai 200ml)</a>
                                </h3>
                                <div class="color-opt">
                                    <p>1ml có chứa Canxi (canxi carbonat) 50mg, Magi...</p>
                                </div>

                                <span class="xv-price">220.000 VNĐ</span>
                                <a
                                    data-qv-tab="#qvt-cart"
                                    href="#"
                                    class="product-buy flytoQuickView"
                                >MUA</a
                                >
                            </div>
                        </div>
                        <!--xv-product-->

                        <div
                            data-pid="xyz200"
                            data-name="Smartphone Apple iPhone 5 64GB"
                            data-category="mobiles"
                            data-price="250"
                            class="xv-product style shadow-around"
                        >
                            <figure>
                                <a href="#"
                                ><img
                                        class="xv-superimage"
                                        src="/Duanmautemplate/assets/img/product/new2.jpg"
                                        alt=""
                                    /></a>
                                <figcaption>
                                    <ul>
                                        <li>
                                            <a
                                                data-qv-tab="#qvt-wishlist"
                                                class="btn-cart flytoQuickView btn-square btn-blue"
                                                href="#"
                                            ><i class="fa fa-heart"></i
                                                ></a>
                                        </li>
                                        <li>
                                            <a
                                                data-qv-tab="#qvt-compare"
                                                class="btn-cart flytoQuickView btn-square btn-blue"
                                                href="#"
                                            ><i class="fa fa-exchange"></i
                                                ></a>
                                        </li>
                                        <li>
                                            <a class="btn-cart btn-square btn-blue" href="#"
                                            ><i class="fa fa-expand"></i
                                                ></a>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                            <!--figure-->
                            <div class="xv-product-content">
                                <h3>
                                    <a href="detail1.html">Hỗ trợ xương khớp SUNLIFE CalDeSun Osteo Liquid (Chai 200ml)</a>
                                </h3>
                                <div class="color-opt">
                                    <p>1ml có chứa Canxi (canxi carbonat) 50mg, Magi...</p>
                                </div>

                                <span class="xv-price">220.000 VNĐ</span>
                                <a
                                    data-qv-tab="#qvt-cart"
                                    href="#"
                                    class="product-buy flytoQuickView"
                                >MUA</a
                                >
                            </div>
                        </div>
                        <!--xv-product-->
                    </div>
                    <!--owl carousel-->
                </div>
            </div>
            <!--xv-featured-->
        </div>
        <!--container-->

        <!--========================================
watches
===========================================-->

        <div class="xv-testimonial pb-15">
            <div class="container">
                <div
                    class="owl-carousel slider_controls1"
                    data-dots="true"
                    data-slides="1"
                    data-slides-md="1"
                    data-slides-sm="1"
                    data-margin="0"
                    data-loop="true"
                    data-nav="false"
                >
                    <div class="testi-slide text-center">
                        <figure>
                            <img src="/Duanmautemplate/assets/img/user/user1.jpg" alt="" />
                        </figure>
                        <br /><br />
                        <q
                        >Dược sĩ Văn Đức là một chuyên gia trong lĩnh vực dược học với nhiều năm kinh nghiệm làm việc trong ngành. Anh ấy được biết đến như một người có kiến thức sâu về các loại thuốc và sản phẩm dược phẩm, và luôn nhiệt tình tư vấn và hỗ trợ bệnh nhân trong việc sử dụng thuốc một cách an toàn và hiệu quả.</q
                        ><br /><br />
                        <cite>Văn Đức</cite>
                    </div>
                    <!--testiSlide-->
                    <div class="testi-slide text-center">
                        <figure>
                            <img src="/Duanmautemplate/assets/img/user/user1.jpg" alt="" />
                        </figure>
                        <br /><br />
                        <q
                        >Dược sĩ Văn Đức là một chuyên gia trong lĩnh vực dược học với nhiều năm kinh nghiệm làm việc trong ngành. Anh ấy được biết đến như một người có kiến thức sâu về các loại thuốc và sản phẩm dược phẩm, và luôn nhiệt tình tư vấn và hỗ trợ bệnh nhân trong việc sử dụng thuốc một cách an toàn và hiệu quả..</q
                        ><br /><br />
                        <cite>Văn Đức</cite>
                    </div>
                    <!--testiSlide-->
                    <div class="testi-slide text-center">
                        <figure>
                            <img src="/Duanmautemplate/assets/img/user/user1.jpg" alt="" />
                        </figure>
                        <br /><br />
                        <q
                        >Dược sĩ Văn Đức là một chuyên gia trong lĩnh vực dược học với nhiều năm kinh nghiệm làm việc trong ngành. Anh ấy được biết đến như một người có kiến thức sâu về các loại thuốc và sản phẩm dược phẩm, và luôn nhiệt tình tư vấn và hỗ trợ bệnh nhân trong việc sử dụng thuốc một cách an toàn và hiệu quả..</q
                        ><br /><br />
                        <cite>Văn Đức</cite>
                    </div>
                    <!--testiSlide-->
                </div>
                <!--testiSlider-->
            </div>
            <!--container-->
        </div>

        <!--=================================
Custom Block
=================================-->

        <div class="container">
            <div class="cutom-block pt-60 pb-60">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <a
                            class="xv-block text-center"
                            href="#"
                            style="background-image:url('/Duanmautemplate/assets/img/block-img2.jpg'); no-repeat"
                        >
                            <span>Ưu Đãi Hấp Dẫn Hàng Tuần</span>
                        </a>
                    </div>
                    <!--left column-->

                    <div class="col-xs-12 col-md-6">
                        <a class="xv-block text-center"
                           href="#"
                           style="background-image:url('/Duanmautemplate/assets/img/block-img2.jpg'); no-repeat" >
                            <span>Mới Trên Thị Trường</span>
                        </a>
                    </div>
                    <!--right column-->
                </div>
                <!--row-->
            </div>
            <!--customBlock-->
        </div>
        <!--container-->

        <!--========================================
Partners
===========================================-->

        <!--========================================
Best Sellers
===========================================-->

        <div class="container">
            <div class="xv-bseller pt-25 pb-20">
                <header class="sec-heading text-center">
                    <div class="category-wrap style">
              <span class="categorise"
              ><i class="fa fa-bars"></i>Danh mục sản phẩm<i
                      class="fa style fa-caret-down"
                  ></i
                  ></span>
                        <ul class="cat-dropDown">
                            <li><a href="#">Dinh dưỡng</a></li>
                            <li><a href="#">Vitamin & Khoáng chất</a></li>
                            <li><a href="#">Sức khoẻ tim mạch</a></li>
                            <li><a href="#">Tăng sức đề kháng, miễn dịch</a></li>
                            <li><a href="#">Hỗ trợ tiêu hóa</a></li>
                        </ul>
                    </div>
                    <h2><span>KHUYẾN MÃI</span></h2>
                    <span>Tháng 10 - 2023</span>
                </header>
                <!--header-->
                <div
                    class="owl-carousel slider_controls1 mb-30 mt-30 shadow-around products"
                    data-thumbnail="figure .xv-superimage"
                    data-product=".xv-accessories"
                    data-dots="false"
                    data-prev="fa fa-angle-left"
                    data-next="fa fa-angle-right"
                    data-margin="0"
                    data-slides="1"
                    data-slides-md="1"
                    data-slides-sm="1"
                    data-loop="true"
                    data-nav="true"
                >
                    <div class="xv-best-seller">
                        <div class="row border-bottom">
                            <div class="col-xs-12 col-sm-4 col-md-3 no-pad">
                                <div
                                    data-pid="xyz401"
                                    data-name="Smartphone Apple iPhone 5 64GB"
                                    data-category="mobiles"
                                    data-price="250"
                                    class="xv-accessories text-center pt-30 pb-30 border-right"
                                >
                                    <figure>
                                        <img
                                            class="xv-superimage"
                                            src="/Duanmautemplate/assets/img/product/sell1.jpg"
                                            alt=""
                                        />
                                        <figcaption>
                                            <ul class="style1">
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-cart"
                                                        class="btn-cart btn-rectangle btn-blue flytoQuickView"
                                                        href="#"
                                                    ><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-wishlist"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-heart"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-compare"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-exchange"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a class="btn-cart btn-square btn-blue" href="#"
                                                    ><i class="fa fa-expand"></i
                                                        ></a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <a href="detail1.html" class="pb-10">Khẩu trang 3 lớp cho trẻ 2-5 tuổi 3D Mask For Kids (Hộp 10 cái)</a>
                                    <a href="#"><span>195.000 VNĐ</span></a>
                                    <a href="#"><del>220.000 VNĐ</del></a>
                                </div>
                                <!--accessories-->
                            </div>
                            <!--column-->

                            <div class="col-xs-12 col-sm-4 col-md-3 no-pad">
                                <div
                                    data-pid="xyz401"
                                    data-name="Smartphone Apple iPhone 5 64GB"
                                    data-category="mobiles"
                                    data-price="250"
                                    class="xv-accessories text-center pt-30 pb-30 border-right"
                                >
                                    <figure>
                                        <img
                                            class="xv-superimage"
                                            src="/Duanmautemplate/assets/img/product/sell1.jpg"
                                            alt=""
                                        />
                                        <figcaption>
                                            <ul class="style1">
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-cart"
                                                        class="btn-cart btn-rectangle btn-blue flytoQuickView"
                                                        href="#"
                                                    ><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-wishlist"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-heart"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-compare"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-exchange"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a class="btn-cart btn-square btn-blue" href="#"
                                                    ><i class="fa fa-expand"></i
                                                        ></a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <a href="detail1.html" class="pb-10">Khẩu trang 3 lớp cho trẻ 2-5 tuổi 3D Mask For Kids (Hộp 10 cái)</a>
                                    <a href="#"><span>195.000 VNĐ</span></a>
                                    <a href="#"><del>220.000 VNĐ</del></a>
                                </div>
                                <!--accessories-->
                            </div>
                            <!--column-->

                            <div class="col-xs-12 col-sm-4 col-md-3 no-pad">
                                <div
                                    data-pid="xyz401"
                                    data-name="Smartphone Apple iPhone 5 64GB"
                                    data-category="mobiles"
                                    data-price="250"
                                    class="xv-accessories text-center pt-30 pb-30 border-right"
                                >
                                    <figure>
                                        <img
                                            class="xv-superimage"
                                            src="/Duanmautemplate/assets/img/product/sell1.jpg"
                                            alt=""
                                        />
                                        <figcaption>
                                            <ul class="style1">
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-cart"
                                                        class="btn-cart btn-rectangle btn-blue flytoQuickView"
                                                        href="#"
                                                    ><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-wishlist"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-heart"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-compare"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-exchange"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a class="btn-cart btn-square btn-blue" href="#"
                                                    ><i class="fa fa-expand"></i
                                                        ></a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <a href="detail1.html" class="pb-10">Khẩu trang 3 lớp cho trẻ 2-5 tuổi 3D Mask For Kids (Hộp 10 cái)</a>
                                    <a href="#"><span>195.000 VNĐ</span></a>
                                    <a href="#"><del>220.000 VNĐ</del></a>
                                </div>
                                <!--accessories-->
                            </div>
                            <!--column-->

                            <div class="col-xs-12 col-sm-4 col-md-3 no-pad">
                                <div
                                    data-pid="xyz401"
                                    data-name="Smartphone Apple iPhone 5 64GB"
                                    data-category="mobiles"
                                    data-price="250"
                                    class="xv-accessories text-center pt-30 pb-30 border-right"
                                >
                                    <figure>
                                        <img
                                            class="xv-superimage"
                                            src="/Duanmautemplate/assets/img/product/sell1.jpg"
                                            alt=""
                                        />
                                        <figcaption>
                                            <ul class="style1">
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-cart"
                                                        class="btn-cart btn-rectangle btn-blue flytoQuickView"
                                                        href="#"
                                                    ><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-wishlist"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-heart"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-compare"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-exchange"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a class="btn-cart btn-square btn-blue" href="#"
                                                    ><i class="fa fa-expand"></i
                                                        ></a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <a href="detail1.html" class="pb-10">Khẩu trang 3 lớp cho trẻ 2-5 tuổi 3D Mask For Kids (Hộp 10 cái)</a>
                                    <a href="#"><span>195.000 VNĐ</span></a>
                                    <a href="#"><del>220.000 VNĐ</del></a>
                                </div>
                                <!--accessories-->
                            </div>
                            <!--column-->
                        </div>
                        <!--top-row-->
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-3 no-pad">
                                <div
                                    data-pid="xyz401"
                                    data-name="Smartphone Apple iPhone 5 64GB"
                                    data-category="mobiles"
                                    data-price="250"
                                    class="xv-accessories text-center pt-30 pb-30 border-right"
                                >
                                    <figure>
                                        <img
                                            class="xv-superimage"
                                            src="/Duanmautemplate/assets/img/product/sell1.jpg"
                                            alt=""
                                        />
                                        <figcaption>
                                            <ul class="style1">
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-cart"
                                                        class="btn-cart btn-rectangle btn-blue flytoQuickView"
                                                        href="#"
                                                    ><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-wishlist"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-heart"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-compare"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-exchange"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a class="btn-cart btn-square btn-blue" href="#"
                                                    ><i class="fa fa-expand"></i
                                                        ></a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <a href="detail1.html" class="pb-10">Khẩu trang 3 lớp cho trẻ 2-5 tuổi 3D Mask For Kids (Hộp 10 cái)</a>
                                    <a href="#"><span>195.000 VNĐ</span></a>
                                    <a href="#"><del>220.000 VNĐ</del></a>
                                </div>
                                <!--accessories-->
                            </div>
                            <!--column-->

                            <div class="col-xs-12 col-sm-4 col-md-3 no-pad">
                                <div
                                    data-pid="xyz401"
                                    data-name="Smartphone Apple iPhone 5 64GB"
                                    data-category="mobiles"
                                    data-price="250"
                                    class="xv-accessories text-center pt-30 pb-30 border-right"
                                >
                                    <figure>
                                        <img
                                            class="xv-superimage"
                                            src="/Duanmautemplate/assets/img/product/sell1.jpg"
                                            alt=""
                                        />
                                        <figcaption>
                                            <ul class="style1">
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-cart"
                                                        class="btn-cart btn-rectangle btn-blue flytoQuickView"
                                                        href="#"
                                                    ><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-wishlist"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-heart"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-compare"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-exchange"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a class="btn-cart btn-square btn-blue" href="#"
                                                    ><i class="fa fa-expand"></i
                                                        ></a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <a href="detail1.html" class="pb-10">Khẩu trang 3 lớp cho trẻ 2-5 tuổi 3D Mask For Kids (Hộp 10 cái)</a>
                                    <a href="#"><span>195.000 VNĐ</span></a>
                                    <a href="#"><del>220.000 VNĐ</del></a>
                                </div>
                                <!--accessories-->
                            </div>
                            <!--column-->

                            <div class="col-xs-12 col-sm-4 col-md-3 no-pad">
                                <div
                                    data-pid="xyz401"
                                    data-name="Smartphone Apple iPhone 5 64GB"
                                    data-category="mobiles"
                                    data-price="250"
                                    class="xv-accessories text-center pt-30 pb-30 border-right"
                                >
                                    <figure>
                                        <img
                                            class="xv-superimage"
                                            src="/Duanmautemplate/assets/img/product/sell1.jpg"
                                            alt=""
                                        />
                                        <figcaption>
                                            <ul class="style1">
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-cart"
                                                        class="btn-cart btn-rectangle btn-blue flytoQuickView"
                                                        href="#"
                                                    ><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-wishlist"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-heart"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-compare"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-exchange"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a class="btn-cart btn-square btn-blue" href="#"
                                                    ><i class="fa fa-expand"></i
                                                        ></a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <a href="detail1.html" class="pb-10">Khẩu trang 3 lớp cho trẻ 2-5 tuổi 3D Mask For Kids (Hộp 10 cái)</a>
                                    <a href="#"><span>195.000 VNĐ</span></a>
                                    <a href="#"><del>220.000 VNĐ</del></a>
                                </div>
                                <!--accessories-->
                            </div>
                            <!--column-->

                            <div class="col-xs-12 col-sm-4 col-md-3 no-pad">
                                <div
                                    data-pid="xyz401"
                                    data-name="Smartphone Apple iPhone 5 64GB"
                                    data-category="mobiles"
                                    data-price="250"
                                    class="xv-accessories text-center pt-30 pb-30 border-right"
                                >
                                    <figure>
                                        <img
                                            class="xv-superimage"
                                            src="/Duanmautemplate/assets/img/product/sell1.jpg"
                                            alt=""
                                        />
                                        <figcaption>
                                            <ul class="style1">
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-cart"
                                                        class="btn-cart btn-rectangle btn-blue flytoQuickView"
                                                        href="#"
                                                    ><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-wishlist"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-heart"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-compare"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-exchange"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a class="btn-cart btn-square btn-blue" href="#"
                                                    ><i class="fa fa-expand"></i
                                                        ></a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <a href="detail1.html" class="pb-10">Khẩu trang 3 lớp cho trẻ 2-5 tuổi 3D Mask For Kids (Hộp 10 cái)</a>
                                    <a href="#"><span>195.000 VNĐ</span></a>
                                    <a href="#"><del>220.000 VNĐ</del></a>
                                </div>
                                <!--accessories-->
                            </div>
                            <!--column-->
                        </div>
                        <!--bottom-row-->
                    </div>
                    <!--xv-best-seller-->
                    <div class="xv-best-seller">
                        <div class="row border-bottom">
                            <div class="col-xs-12 col-sm-4 col-md-3 no-pad">
                                <div
                                    data-pid="xyz401"
                                    data-name="Smartphone Apple iPhone 5 64GB"
                                    data-category="mobiles"
                                    data-price="250"
                                    class="xv-accessories text-center pt-30 pb-30 border-right"
                                >
                                    <figure>
                                        <img
                                            class="xv-superimage"
                                            src="/Duanmautemplate/assets/img/product/sell1.jpg"
                                            alt=""
                                        />
                                        <figcaption>
                                            <ul class="style1">
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-cart"
                                                        class="btn-cart btn-rectangle btn-blue flytoQuickView"
                                                        href="#"
                                                    ><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-wishlist"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-heart"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-compare"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-exchange"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a class="btn-cart btn-square btn-blue" href="#"
                                                    ><i class="fa fa-expand"></i
                                                        ></a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <a href="detail1.html" class="pb-10">Khẩu trang 3 lớp cho trẻ 2-5 tuổi 3D Mask For Kids (Hộp 10 cái)</a>
                                    <a href="#"><span>195.000 VNĐ</span></a>
                                    <a href="#"><del>220.000 VNĐ</del></a>
                                </div>
                                <!--accessories-->
                            </div>
                            <!--column-->

                            <div class="col-xs-12 col-sm-4 col-md-3 no-pad">
                                <div
                                    data-pid="xyz401"
                                    data-name="Smartphone Apple iPhone 5 64GB"
                                    data-category="mobiles"
                                    data-price="250"
                                    class="xv-accessories text-center pt-30 pb-30 border-right"
                                >
                                    <figure>
                                        <img
                                            class="xv-superimage"
                                            src="/Duanmautemplate/assets/img/product/sell1.jpg"
                                            alt=""
                                        />
                                        <figcaption>
                                            <ul class="style1">
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-cart"
                                                        class="btn-cart btn-rectangle btn-blue flytoQuickView"
                                                        href="#"
                                                    ><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-wishlist"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-heart"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-compare"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-exchange"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a class="btn-cart btn-square btn-blue" href="#"
                                                    ><i class="fa fa-expand"></i
                                                        ></a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <a href="detail1.html" class="pb-10">Khẩu trang 3 lớp cho trẻ 2-5 tuổi 3D Mask For Kids (Hộp 10 cái)</a>
                                    <a href="#"><span>195.000 VNĐ</span></a>
                                    <a href="#"><del>220.000 VNĐ</del></a>
                                </div>
                                <!--accessories-->
                            </div>
                            <!--column-->

                            <div class="col-xs-12 col-sm-4 col-md-3 no-pad">
                                <div
                                    data-pid="xyz401"
                                    data-name="Smartphone Apple iPhone 5 64GB"
                                    data-category="mobiles"
                                    data-price="250"
                                    class="xv-accessories text-center pt-30 pb-30 border-right"
                                >
                                    <figure>
                                        <img
                                            class="xv-superimage"
                                            src="/Duanmautemplate/assets/img/product/sell1.jpg"
                                            alt=""
                                        />
                                        <figcaption>
                                            <ul class="style1">
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-cart"
                                                        class="btn-cart btn-rectangle btn-blue flytoQuickView"
                                                        href="#"
                                                    ><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-wishlist"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-heart"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-compare"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-exchange"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a class="btn-cart btn-square btn-blue" href="#"
                                                    ><i class="fa fa-expand"></i
                                                        ></a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <a href="detail1.html" class="pb-10">Khẩu trang 3 lớp cho trẻ 2-5 tuổi 3D Mask For Kids (Hộp 10 cái)</a>
                                    <a href="#"><span>195.000 VNĐ</span></a>
                                    <a href="#"><del>220.000 VNĐ</del></a>
                                </div>
                                <!--accessories-->
                            </div>
                            <!--column-->

                            <div class="col-xs-12 col-sm-4 col-md-3 no-pad">
                                <div
                                    data-pid="xyz401"
                                    data-name="Smartphone Apple iPhone 5 64GB"
                                    data-category="mobiles"
                                    data-price="250"
                                    class="xv-accessories text-center pt-30 pb-30 border-right"
                                >
                                    <figure>
                                        <img
                                            class="xv-superimage"
                                            src="/Duanmautemplate/assets/img/product/sell1.jpg"
                                            alt=""
                                        />
                                        <figcaption>
                                            <ul class="style1">
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-cart"
                                                        class="btn-cart btn-rectangle btn-blue flytoQuickView"
                                                        href="#"
                                                    ><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-wishlist"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-heart"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-compare"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-exchange"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a class="btn-cart btn-square btn-blue" href="#"
                                                    ><i class="fa fa-expand"></i
                                                        ></a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <a href="detail1.html" class="pb-10">Khẩu trang 3 lớp cho trẻ 2-5 tuổi 3D Mask For Kids (Hộp 10 cái)</a>
                                    <a href="#"><span>195.000 VNĐ</span></a>
                                    <a href="#"><del>220.000 VNĐ</del></a>
                                </div>
                                <!--accessories-->
                            </div>
                            <!--column-->
                        </div>
                        <!--top-row-->
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-3 no-pad">
                                <div
                                    data-pid="xyz401"
                                    data-name="Smartphone Apple iPhone 5 64GB"
                                    data-category="mobiles"
                                    data-price="250"
                                    class="xv-accessories text-center pt-30 pb-30 border-right"
                                >
                                    <figure>
                                        <img
                                            class="xv-superimage"
                                            src="/Duanmautemplate/assets/img/product/sell1.jpg"
                                            alt=""
                                        />
                                        <figcaption>
                                            <ul class="style1">
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-cart"
                                                        class="btn-cart btn-rectangle btn-blue flytoQuickView"
                                                        href="#"
                                                    ><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-wishlist"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-heart"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-compare"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-exchange"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a class="btn-cart btn-square btn-blue" href="#"
                                                    ><i class="fa fa-expand"></i
                                                        ></a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <a href="detail1.html" class="pb-10">Khẩu trang 3 lớp cho trẻ 2-5 tuổi 3D Mask For Kids (Hộp 10 cái)</a>
                                    <a href="#"><span>195.000 VNĐ</span></a>
                                    <a href="#"><del>220.000 VNĐ</del></a>
                                </div>
                                <!--accessories-->
                            </div>
                            <!--column-->

                            <div class="col-xs-12 col-sm-4 col-md-3 no-pad">
                                <div
                                    data-pid="xyz401"
                                    data-name="Smartphone Apple iPhone 5 64GB"
                                    data-category="mobiles"
                                    data-price="250"
                                    class="xv-accessories text-center pt-30 pb-30 border-right"
                                >
                                    <figure>
                                        <img
                                            class="xv-superimage"
                                            src="/Duanmautemplate/assets/img/product/sell1.jpg"
                                            alt=""
                                        />
                                        <figcaption>
                                            <ul class="style1">
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-cart"
                                                        class="btn-cart btn-rectangle btn-blue flytoQuickView"
                                                        href="#"
                                                    ><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-wishlist"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-heart"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-compare"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-exchange"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a class="btn-cart btn-square btn-blue" href="#"
                                                    ><i class="fa fa-expand"></i
                                                        ></a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <a href="detail1.html" class="pb-10">Khẩu trang 3 lớp cho trẻ 2-5 tuổi 3D Mask For Kids (Hộp 10 cái)</a>
                                    <a href="#"><span>195.000 VNĐ</span></a>
                                    <a href="#"><del>220.000 VNĐ</del></a>
                                </div>
                                <!--accessories-->
                            </div>
                            <!--column-->

                            <div class="col-xs-12 col-sm-4 col-md-3 no-pad">
                                <div
                                    data-pid="xyz401"
                                    data-name="Smartphone Apple iPhone 5 64GB"
                                    data-category="mobiles"
                                    data-price="250"
                                    class="xv-accessories text-center pt-30 pb-30 border-right"
                                >
                                    <figure>
                                        <img
                                            class="xv-superimage"
                                            src="/Duanmautemplate/assets/img/product/sell1.jpg"
                                            alt=""
                                        />
                                        <figcaption>
                                            <ul class="style1">
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-cart"
                                                        class="btn-cart btn-rectangle btn-blue flytoQuickView"
                                                        href="#"
                                                    ><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-wishlist"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-heart"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-compare"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-exchange"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a class="btn-cart btn-square btn-blue" href="#"
                                                    ><i class="fa fa-expand"></i
                                                        ></a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <a href="detail1.html" class="pb-10">Khẩu trang 3 lớp cho trẻ 2-5 tuổi 3D Mask For Kids (Hộp 10 cái)</a>
                                    <a href="#"><span>195.000 VNĐ</span></a>
                                    <a href="#"><del>220.000 VNĐ</del></a>
                                </div>
                                <!--accessories-->
                            </div>
                            <!--column-->

                            <div class="col-xs-12 col-sm-4 col-md-3 no-pad">
                                <div
                                    data-pid="xyz401"
                                    data-name="Smartphone Apple iPhone 5 64GB"
                                    data-category="mobiles"
                                    data-price="250"
                                    class="xv-accessories text-center pt-30 pb-30 border-right"
                                >
                                    <figure>
                                        <img
                                            class="xv-superimage"
                                            src="/Duanmautemplate/assets/img/product/sell1.jpg"
                                            alt=""
                                        />
                                        <figcaption>
                                            <ul class="style1">
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-cart"
                                                        class="btn-cart btn-rectangle btn-blue flytoQuickView"
                                                        href="#"
                                                    ><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-wishlist"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-heart"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        data-qv-tab="#qvt-compare"
                                                        class="btn-cart flytoQuickView btn-square btn-blue"
                                                        href="#"
                                                    ><i class="fa fa-exchange"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a class="btn-cart btn-square btn-blue" href="#"
                                                    ><i class="fa fa-expand"></i
                                                        ></a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <a href="detail1.html" class="pb-10">Khẩu trang 3 lớp cho trẻ 2-5 tuổi 3D Mask For Kids (Hộp 10 cái)</a>
                                    <a href="#"><span>195.000 VNĐ</span></a>
                                    <a href="#"><del>220.000 VNĐ</del></a>
                                </div>
                                <!--accessories-->
                            </div>
                            <!--column-->
                        </div>
                        <!--bottom-row-->
                    </div>
                    <!--xv-best-seller-->
                </div>
            </div>
        </div>
        <!--container-->

        <!--========================================
Pre-order
===========================================-->

        <!--========================================
Tab Slider
===========================================-->

        <div class="tab-slide">
            <div class="container">
                <div class="tab-slide-wrap">
                    <div class="aTabs">
                        <div
                            class="owl-carousel slider_controls2"
                            data-dots="false"
                            data-prev="fa fa-angle-left"
                            data-next="fa fa-angle-right"
                            data-margin="0"
                            data-slides="4"
                            data-slides-md="3"
                            data-slides-sm="1"
                            data-loop="true"
                            data-nav="true"
                        >

                            <div class="tabSlider">
                                <a class="active" href="#tab01"
                                ><i class="fa-solid fa-apple-whole icon-fix"></i>Dinh dưỡng</a
                                >
                            </div>

                            <div class="tabSlider">
                                <a href="#tab02"><i class="fa-solid fa-droplet icon-fix"></i>Vitamin & Khoáng chất</a>
                            </div>
                            <div class="tabSlider">
                                <a href="#tab03"><i class="fa-solid fa-heart icon-fix"></i>Sức khoẻ tim mạch</a>
                            </div>
                            <div class="tabSlider">
                                <a href="#tab04"><i class="fa-solid fa-shield-halved icon-fix"></i>Tăng sức đề kháng, miễn dịch</a>
                            </div>
                            <div class="tabSlider">
                                <a href="#tab05"><i class="fa-solid fa-suitcase-medical icon-fix  "></i>Hỗ trợ tiêu hóa</a>
                            </div>
                            <div class="tabSlider">
                                <a href="#tab06"><i class="fa-solid fa-earth-oceania icon-fix"></i>Sinh lý - Nội tiết tố</a>
                            </div>
                            <div class="tabSlider">
                                <a href="#tab07"><i class="fa-solid fa-dna icon-fix"></i>Giải pháp làn da</a>
                            </div>
                            <div class="tabSlider">
                                <a href="#tab08"><i class="fa-solid fa-house-chimney-user icon-fix"></i>Chăm sóc da mặt</a>
                            </div>
                        </div>
                        <div class="tabsPanels">
                            <div id="tab01" class="tabsPanel active">
                                <div class="products-panel shadow-around">
                                    <div class="product-panel clearfix">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/product/pro3.jpg" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Nước mắt nhân tạo Eye Drops Vitamin A & E (Chai 10ml)</a></h6>

                                                        <span class="price">500.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/product/pro3.jpg" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Nước mắt nhân tạo Eye Drops Vitamin A & E (Chai 10ml)</a></h6>

                                                        <span class="price">500.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/product/pro3.jpg" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Nước mắt nhân tạo Eye Drops Vitamin A & E (Chai 10ml)</a></h6>

                                                        <span class="price">500.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/product/pro3.jpg" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Nước mắt nhân tạo Eye Drops Vitamin A & E (Chai 10ml)</a></h6>

                                                        <span class="price">500.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->

                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/product/pro3.jpg" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Nước mắt nhân tạo Eye Drops Vitamin A & E (Chai 10ml)</a></h6>

                                                        <span class="price">500.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/product/pro3.jpg" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Nước mắt nhân tạo Eye Drops Vitamin A & E (Chai 10ml)</a></h6>

                                                        <span class="price">500.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/product/pro3.jpg" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Nước mắt nhân tạo Eye Drops Vitamin A & E (Chai 10ml)</a></h6>

                                                        <span class="price">500.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/product/pro3.jpg" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Nước mắt nhân tạo Eye Drops Vitamin A & E (Chai 10ml)</a></h6>

                                                        <span class="price">500.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->

                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/product/pro3.jpg" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Nước mắt nhân tạo Eye Drops Vitamin A & E (Chai 10ml)</a></h6>

                                                        <span class="price">500.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/product/pro3.jpg" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Nước mắt nhân tạo Eye Drops Vitamin A & E (Chai 10ml)</a></h6>

                                                        <span class="price">500.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/product/pro3.jpg" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Nước mắt nhân tạo Eye Drops Vitamin A & E (Chai 10ml)</a></h6>

                                                        <span class="price">500.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/product/pro3.jpg" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Nước mắt nhân tạo Eye Drops Vitamin A & E (Chai 10ml)</a></h6>

                                                        <span class="price">500.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--ts-slide-->
                                        </div>
                                        <!--column-->


                                        <!--column-->

                                        <!--ts-slide-->
                                    </div>
                                    <!--column-->
                                    <!--product-panel-->
                                </div>
                                <!--products-panel-->
                            </div>
                            <!--tabsPanel-->
                            <div id="tab02" class="tabsPanel">
                                <div class="products-panel shadow-around">
                                    <div class="product-panel clearfix">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->

                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->

                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->

                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                        </div>
                                        <!--row-->
                                    </div>
                                    <!--product-panel-->
                                </div>
                                <!--products-panel-->
                            </div>
                            <!--tabsPanel-->
                            <div id="tab03" class="tabsPanel">
                                <div class="products-panel shadow-around">
                                    <div class="product-panel clearfix">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->

                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->

                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->

                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                        </div>
                                        <!--row-->
                                    </div>
                                    <!--product-panel-->
                                </div>
                                <!--products-panel-->
                            </div>
                            <!--tabsPanel-->
                            <div id="tab04" class="tabsPanel">
                                <div class="products-panel shadow-around">
                                    <div class="product-panel clearfix">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->

                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->

                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->

                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                        </div>
                                        <!--row-->
                                    </div>
                                    <!--product-panel-->
                                </div>
                                <!--products-panel-->
                            </div>
                            <!--tabsPanel-->
                            <div id="tab05" class="tabsPanel">
                                <div class="products-panel shadow-around">
                                    <div class="product-panel clearfix">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->

                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->

                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->

                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                        </div>
                                        <!--row-->
                                    </div>
                                    <!--product-panel-->
                                </div>
                                <!--products-panel-->
                            </div>
                            <!--tabsPanel-->
                            <div id="tab06" class="tabsPanel">
                                <div class="products-panel shadow-around">
                                    <div class="product-panel clearfix">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->

                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->

                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->

                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                        </div>
                                        <!--row-->
                                    </div>
                                    <!--product-panel-->
                                </div>
                                <!--products-panel-->
                            </div>
                            <!--tabsPanel-->
                            <div id="tab07" class="tabsPanel">
                                <div class="products-panel shadow-around">
                                    <div class="product-panel clearfix">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->

                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->

                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->

                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                        </div>
                                        <!--row-->
                                    </div>
                                    <!--product-panel-->
                                </div>
                                <!--products-panel-->
                            </div>
                            <!--tabsPanel-->
                            <div id="tab08" class="tabsPanel">
                                <div class="products-panel shadow-around">
                                    <div class="product-panel clearfix">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->

                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->

                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->

                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                            <div class="col-xs-12 col-md-3 col-sm-4">
                                                <div class="ts-slide">
                                                    <figure>
                                                        <a href="#"
                                                        ><img src="/Duanmautemplate/assets/img/tabSlide6.png" alt=""
                                                            /></a>
                                                    </figure>
                                                    <div class="ts-slide-content">
                                                        <h6><a href="#">Siro Healthy New</a></h6>
                                                        <span>hỗ trợ kích thích tiêu hóa, giúp ăn ngon (120ml)</span>
                                                        <span class="price">230.000 VNĐ</span>
                                                    </div>
                                                </div>
                                                <!--ts-slide-->
                                            </div>
                                            <!--column-->
                                        </div>
                                        <!--row-->
                                    </div>
                                    <!--product-panel-->
                                </div>
                                <!--products-panel-->
                            </div>
                            <!--tabsPanel-->
                        </div>
                    </div>
                </div>
            </div>
            <!--container-->
        </div>
        <!--tabSlide-->

        <!--========================================
Blog
===========================================-->

        <div class="container">
            <div class="xv-blog pt-25">
                <header class="sec-heading text-center">
                    <div class="category-wrap style">
                    </div>
                    <h2><span>TIN TỨC</span></h2>
                    <span>Tháng 10 - 2023</span>
                </header>
                <!--header-->
                <div class="articleWrap mt-30 mb-30">
                    <div
                        class="owl-carousel slider_controls1"
                        data-dots="false"
                        data-prev="fa fa-angle-left"
                        data-next="fa fa-angle-right"
                        data-margin="24"
                        data-slides="3"
                        data-slides-md="2"
                        data-slides-sm="1"
                        data-loop="true"
                        data-nav="true"
                    >
                        <article class="xv-article">
                            <figure>
                                <a href="#"><img src="/Duanmautemplate/assets/img/blog/blog1.jpg" alt="" /></a>
                            </figure>
                            <!--fig-->

                            <div class="xv-art-content style2 shadow-around">
                                <header class="pb-20">
                                    <a href="#">
                                        <h5>
                                            Sốt xuất huyết Dengue
                                        </h5> </a
                                    ><!--Anchor-->
                                    <span>
                      <i class="fa fa-calendar-o"></i>
                      <time datetime="2015-05-04">03/10/2023</time>

                      <i class="fa fa-heart-o"> 25</i>

                      <i class="fa fa-comment-o"> 48</i>
                    </span>
                                </header>
                                <!--header-->

                                <p class="pt-10">
                                    Sốt xuất huyết Dengue là một bệnh truyền nhiễm do muỗi Aedes truyền từ người sang người, thường xảy ra ở các khu vực...
                                </p>
                            </div>
                            <!--article content-->
                        </article>
                        <!--article-->

                        <article class="xv-article">
                            <figure>
                                <a href="#"><img src="/Duanmautemplate/assets/img/blog/blog1.jpg" alt="" /></a>
                            </figure>
                            <!--fig-->

                            <div class="xv-art-content style2 shadow-around">
                                <header class="pb-20">
                                    <a href="#">
                                        <h5>
                                            Sốt xuất huyết Dengue
                                        </h5> </a
                                    ><!--Anchor-->
                                    <span>
                      <i class="fa fa-calendar-o"></i>
                      <time datetime="2015-05-04">03/10/2023</time>

                      <i class="fa fa-heart-o"> 25</i>

                      <i class="fa fa-comment-o"> 48</i>
                    </span>
                                </header>
                                <!--header-->

                                <p class="pt-10">
                                    Sốt xuất huyết Dengue là một bệnh truyền nhiễm do muỗi Aedes truyền từ người sang người, thường xảy ra ở các khu vực...
                                </p>
                            </div>
                            <!--article content-->
                        </article>
                        <!--article-->
                        <article class="xv-article">
                            <figure>
                                <a href="#"><img src="/Duanmautemplate/assets/img/blog/blog1.jpg" alt="" /></a>
                            </figure>
                            <!--fig-->

                            <div class="xv-art-content style2 shadow-around">
                                <header class="pb-20">
                                    <a href="#">
                                        <h5>
                                            Sốt xuất huyết Dengue
                                        </h5> </a
                                    ><!--Anchor-->
                                    <span>
                      <i class="fa fa-calendar-o"></i>
                      <time datetime="2015-05-04">03/10/2023</time>

                      <i class="fa fa-heart-o"> 25</i>

                      <i class="fa fa-comment-o"> 48</i>
                    </span>
                                </header>
                                <!--header-->

                                <p class="pt-10">
                                    Sốt xuất huyết Dengue là một bệnh truyền nhiễm do muỗi Aedes truyền từ người sang người, thường xảy ra ở các khu vực...
                                </p>
                            </div>
                            <!--article content-->
                        </article>
                        <!--article-->
                    </div>
                    <!--owl-carousel-->
                </div>
                <!--articleWrap-->
            </div>
        </div>
        <!--container-->

        <!--========================================
sign up
===========================================-->

        <div class="container">
            <div class="xv-sign-up text-center pt-20 pb-60">
                <h3>Đăng ký bên dưới để cập nhật sớm</h3>
                <form class="sign-up-form">
                    <i class="fa fa-envelope"></i>
                    <input type="text" placeholder="Nhập gmail..." />
                    <button type="submit">Đăng kí</button>
                </form>
                <!--signup-form-->
                <p>
                    Vui lòng đăng ký vào danh sách gửi thư để nhận được thông tin cập nhật mới, <br />
                    ưu đãi đặc biệt và thông tin giảm giá khác.
                </p>
            </div>
            <!--xv-signup-->
        </div>
        <!--container-->
    </main>
    <!--pageContentArea ends-->
@endsection






