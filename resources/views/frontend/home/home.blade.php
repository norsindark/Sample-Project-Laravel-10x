@extends('frontend/layouts.master')

@section('title')
<title>Home page</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('frontend/home/home.css')}}">
@endsection

@section('js')
<link rel="stylesheet" href="{{asset('frontend/home/home.js')}}">
@endsection

@section('content')
<!--=======Page Content Area=========-->
<main id="pageContentArea">
    <!--========================================
Slider Area
===========================================-->

    <div class="xv-slider-wrap">
        <div class="owl-carousel slider_controls1" data-dots="true" data-slides="1" data-slides-md="1" data-slides-sm="1" data-margin="0" data-loop="true" data-prev="fa fa-angle-left" data-next="fa fa-angle-right" data-nav="false">
            <div class="xv-slide" style="background-image: radial-gradient(circle, #7ca3dc, #1e71de)">
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
                                <a href="#" class="btn btn-grey btn-price">Gía: 350.000 VNĐ</a>
                                <a href="#" class="btn btn-grey">MUA NGAY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xv-slide" style="background-image: radial-gradient(circle, #7ca3dc, #1e71de)">
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
            <div class="xv-slide" style="background-image: radial-gradient(circle, #7ca3dc, #1e71de)">
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
                            @foreach($categories as $category)
                            <li>
                                <a href="{{ route('show-products', ['categoryName' => $category->CategoryName ,'categoryId' => $category->CategoryId]) }}">
                                    <span class="p-count">+</span>
                                    {{ $category->CategoryName }}
                                </a>
                            </li>
                            @endforeach
                        </ul>

                    </nav>
                    <!--secondary nav-->
                </div>

                <div class="col-xs-12 col-sm-9">
                    <section class="new-product">
                        <header class="sec-heading text-center" id="newProducts">
                            <div class="category-wrap">
                                <span class="categorise"><i class="fa fa-bars"></i>Danh mục sản phẩm<i class="fa style fa-caret-down"></i></span>
                                <ul class="cat-dropDown">
                                    @if(!empty($categories))
                                    @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route('show-products', ['categoryName' => $category->CategoryName ,'categoryId' => $category->CategoryId]) }}" {{ $category->CategoryId }}>{{ $category->CategoryName }}</a>
                                    </li>
                                    @endforeach
                                    @endif

                                </ul>
                            </div>
                            <h2><span>MỚI</span></h2>
                            <span>Cập nhập {{ $currentDate }}</span>
                        </header>
                        <!--header-->
                        <div class="xv-product-slides mt-25 mb-25">
                            <div class="owl-carousel slider_controls1 products" data-thumbnail="figure .xv-superimage" data-product=".xv-product" data-dots="false" data-prev="fa fa-angle-left" data-next="fa fa-angle-right" data-slides="3" data-slides-md="2" data-slides-sm="1" data-margin="24" data-loop="true" data-nav="true">
                                @foreach($ProductsNow as $product)
                                <div data-pid="{{ $product->ProductId }}" data-name="{{ $product->ProductName }}" data-category="#" data-price="{{ $product->Price }}" class="xv-product style shadow-around">
                                    <figure>
                                        @php
                                        $firstImageDisplayed = false;
                                        @endphp
                                        @foreach ($product_images as $product_image)
                                        @if ($product_image->ProductId == $product->ProductId && !$firstImageDisplayed)
                                        <a href="{{ route('product.details', ['productName' => $product->ProductName, 'ProductId' => $product->ProductId]) }}"><img style="width: 220px; margin: auto" src="{{ asset('storage/' . $product_image->path) }}" alt="Product Image"></a>
                                        @php
                                        $firstImageDisplayed = true;
                                        @endphp
                                        @endif
                                        @endforeach
                                        <!-- <figcaption>
                                            <ul>
                                                <li>
                                                    <a data-qv-tab="#qvt-wishlist" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a data-qv-tab="#qvt-compare" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-exchange"></i></a>
                                                </li>
                                                <li>
                                                    <a class="btn-cart btn-square btn-blue" href="#"><i class="fa fa-expand"></i></a>
                                                </li>
                                            </ul>
                                        </figcaption> -->
                                    </figure>
                                    <div class="xv-product-content">
                                        <h3 style="font-weight: 600; font-size: 16px">
                                            <a  href="{{ route('product.details', ['productName' => $product->ProductName, 'ProductId' => $product->ProductId]) }}">{{ $product->ProductName }}</a>
                                        </h3>
                                      {{--  <div class="color-opt" style="">
                                            <p style="">{{ $product->Description }}</p>
                                        </div>--}}
                                        <span class="xv-price">{{ number_format($product->Price, 0, ',', ' ') }} VNĐ</span>
                                        <a data-qv-tab="#qvt-cart" href="{{ route('product.details', ['productName' => $product->ProductName, 'ProductId' => $product->ProductId]) }}" class="product-buy flytoQuickView">MUA</a>
                                    </div>
                                </div>
                                @endforeach


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
            <div class="owl-carousel slider_controls4" data-dots="false" data-prev="hot-deal-btn l" data-next="hot-deal-btn r" data-margin="0" data-slides="1" data-slides-md="1" data-slides-sm="1" data-loop="true" data-nav="true">
                @foreach($bestSale as $product)
                <div class="pro-sale-inner clearfix" id="bestSale">
                    <div class="saletimeout-content text-center">
                        <h2 style="color: #ff4575; font-weight: 600">SẢN PHẨM GIẢM GIÁ CAO NHẤT HÔM NAY</h2>
                        <span>Ưu đãi hấp dẫn lên tới {{ $product->Sale }} %</span>
                        <div class="counter-wrapper" data-target="March 11, 2017 09:25:00"></div>
                        <!--counter-wrapper-->
                        <a href="{{ route('product.details', ['productName' => $product->ProductName, 'ProductId' => $product->ProductId]) }}">MUA NGAY</a>
                    </div>
                    <!--saletimeout content-->
                    <figure>
                        @php
                        $firstImageDisplayed = false;
                        @endphp
                        @foreach ($product_images as $product_image)
                        @if ($product_image->ProductId == $product->ProductId && !$firstImageDisplayed)
                        <a href="{{ route('product.details', ['productName' => $product->ProductName, 'ProductId' => $product->ProductId]) }}"><img style="width: 180px;" src="{{ asset('storage/' . $product_image->path) }}" alt="Product Image"></a>
                        @php
                        $firstImageDisplayed = true;
                        @endphp
                        @endif
                        @endforeach
                    </figure>
                </div>
                <!--pro-sale-inner-->
                @endforeach
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
                <!-- <div class="category-wrap style">
                    <span class="categorise"><i class="fa fa-bars"></i>Danh mục sản phẩm<i class="fa style fa-caret-down"></i></span>
                    <ul>
                        @foreach($categories as $category)
                        <li>
                            <a href="{{ route('show-products', ['categoryName' => $category->CategoryName ,'categoryId' => $category->CategoryId]) }}">
                                <span class="p-count">+</span>
                                {{ $category->CategoryName }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div> -->
                <!-- <h2><span>SẢN PHẨM NỔI BẬT</span></h2> -->
                <span>Cập nhập {{ $currentDate }}</span>
            </header>
            <!--header-->


        </div>
        <!--xv-featured-->
    </div>
    <!--container-->

    <!--========================================
watches
===========================================-->

    <div class="xv-testimonial pb-15">
        <div class="container">
            <div class="owl-carousel slider_controls1" data-dots="true" data-slides="1" data-slides-md="1" data-slides-sm="1" data-margin="0" data-loop="true" data-nav="false">
                <div class="testi-slide text-center">
                    <figure>
                        <img src="/Duanmautemplate/assets/img/user/user1.jpg" alt="" />
                    </figure>
                    <br /><br />
                    <q>Dược sĩ Văn Đức là một chuyên gia trong lĩnh vực dược học với nhiều năm kinh nghiệm làm việc trong ngành. Anh ấy được biết đến như một người có kiến thức sâu về các loại thuốc và sản phẩm dược phẩm, và luôn nhiệt tình tư vấn và hỗ trợ bệnh nhân trong việc sử dụng thuốc một cách an toàn và hiệu quả.</q><br /><br />
                    <cite>Văn Đức</cite>
                </div>
                <!--testiSlide-->
                <div class="testi-slide text-center">
                    <figure>
                        <img src="/Duanmautemplate/assets/img/user/user1.jpg" alt="" />
                    </figure>
                    <br /><br />
                    <q>Dược sĩ Văn Đức là một chuyên gia trong lĩnh vực dược học với nhiều năm kinh nghiệm làm việc trong ngành. Anh ấy được biết đến như một người có kiến thức sâu về các loại thuốc và sản phẩm dược phẩm, và luôn nhiệt tình tư vấn và hỗ trợ bệnh nhân trong việc sử dụng thuốc một cách an toàn và hiệu quả..</q><br /><br />
                    <cite>Văn Đức</cite>
                </div>
                <!--testiSlide-->
                <div class="testi-slide text-center">
                    <figure>
                        <img src="/Duanmautemplate/assets/img/user/user1.jpg" alt="" />
                    </figure>
                    <br /><br />
                    <q>Dược sĩ Văn Đức là một chuyên gia trong lĩnh vực dược học với nhiều năm kinh nghiệm làm việc trong ngành. Anh ấy được biết đến như một người có kiến thức sâu về các loại thuốc và sản phẩm dược phẩm, và luôn nhiệt tình tư vấn và hỗ trợ bệnh nhân trong việc sử dụng thuốc một cách an toàn và hiệu quả..</q><br /><br />
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
                    <a class="xv-block text-center" href="#bestSale" style="background-image:url('/Duanmautemplate/assets/img/block-img2.jpg'); no-repeat">
                        <span>Ưu Đãi Hấp Dẫn Hàng Tuần</span>
                    </a>
                </div>
                <!--left column-->

                <div class="col-xs-12 col-md-6">
                    <a class="xv-block text-center" href="#newProducts" style="background-image:url('/Duanmautemplate/assets/img/block-img2.jpg'); no-repeat">
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
                    <span class="categorise"><i class="fa fa-bars"></i>Danh mục sản phẩm<i class="fa style fa-caret-down"></i></span>
                    <ul class="cat-dropDown">
                        @if(!empty($categories))
                        @foreach ($categories as $category)
                        <li>
                            <a href="{{ route('show-products', ['categoryName' => $category->CategoryName ,'categoryId' => $category->CategoryId]) }}" {{ $category->CategoryId }}>{{ $category->CategoryName }}</a>
                        </li>
                        @endforeach
                        @endif
                    </ul>
                </div>
                <h2><span>KHUYẾN MÃI</span></h2>
                <span>Cập nhật {{$currentDate}}</span>
            </header>
            <!--header-->
            <div class="owl-carousel slider_controls1 mb-30 mt-30 shadow-around products" data-thumbnail="figure .xv-superimage" data-product=".xv-accessories" data-dots="false" data-prev="fa fa-angle-left" data-next="fa fa-angle-right" data-margin="0" data-slides="1" data-slides-md="1" data-slides-sm="1" data-loop="true" data-nav="true">
                @foreach($bestSale as $product)
                @if($product->Sale > 0)
                <div class="xv-best-seller">
                    <div class="row border-bottom">


                        <div class="col-xs-12 col-sm-4 col-md-3 no-pad">
                            <div data-pid="{{ $product->ProductId }}" data-name="{{ $product->ProductName }}" data-category="{{ $product->Category }}" data-price="{{ $product->Price }}" class="xv-accessories text-center pt-30 pb-30 border-right">
                                <figure>
                                    @php
                                    $firstImageDisplayed = false;
                                    @endphp
                                    @foreach ($product_images as $product_image)
                                    @if ($product_image->ProductId == $product->ProductId && !$firstImageDisplayed)
                                    <a href="{{ route('product.details', ['productName' => $product->ProductName, 'ProductId' => $product->ProductId]) }}"><img style="width: 180px;" src="{{ asset('storage/' . $product_image->path) }}" alt="Product Image"></a>
                                    @php
                                    $firstImageDisplayed = true;
                                    @endphp
                                    @endif
                                    @endforeach
                                </figure>
                                <a href="detail1.html" class="pb-10">{{ $product->ProductName }}</a>


                                <a href="{{ route('product.details', ['productName' => $product->ProductName, 'ProductId' => $product->ProductId]) }}"><span class="xv-price">{{ ($product->Price - ($product->Sale/100*$product->Price))  }} VNĐ</span></a>
                                <a href="{{ route('product.details', ['productName' => $product->ProductName, 'ProductId' => $product->ProductId]) }}"><del class="">{{ $product->Price }} VNĐ</del></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>

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
                    <!-- <div class="owl-carousel slider_controls2" data-dots="false" data-prev="fa fa-angle-left" data-next="fa fa-angle-right" data-margin="0" data-slides="4" data-slides-md="3" data-slides-sm="1" data-loop="true" data-nav="true">

                        <div class="tabSlider">
                            <a class="active" href="#tab01"><i class="fa-solid fa-apple-whole icon-fix"></i>Dinh dưỡng</a>
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
                    </div> -->
                    <div class="owl-carousel slider_controls2" data-dots="false" data-prev="fa fa-angle-left" data-next="fa fa-angle-right" data-margin="0" data-slides="4" data-slides-md="3" data-slides-sm="1" data-loop="true" data-nav="true">
                        @foreach($categories as $category)
                        <div class="tabSlider">
                            <a href="#tab{{ $category->CategoryId }}"><i class="{{ $category->icon_class }} icon-fix"></i>{{ $category->CategoryName }}</a>
                        </div>
                        @endforeach
                    </div>

                    <div class="tabsPanels">
                        @foreach($categories as $category)
                        <div id="tab{{ $category->CategoryId }}" class="tabsPanel @if ($loop->first) active @endif">
                            <div class="products-panel shadow-around">
                                @foreach($category->products as $product)
                                <div class="product-panel clearfix">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3 col-sm-4">
                                            <div class="ts-slide">
                                                <figure>
                                                    @php
                                                    $firstImageDisplayed = false;
                                                    @endphp
                                                    @foreach ($product_images as $product_image)
                                                    @if ($product_image->ProductId == $product->ProductId && !$firstImageDisplayed)
                                                    <a href="{{ route('product.details', ['productName' => $product->ProductName, 'ProductId' => $product->ProductId]) }}"><img style="width: 180px;" src="{{ asset('storage/' . $product_image->path) }}" alt="Product Image"></a>
                                                    @php
                                                    $firstImageDisplayed = true;
                                                    @endphp
                                                    @endif
                                                    @endforeach
                                                </figure>
                                                <div class="ts-slide-content">
                                                    <h6><a href="#">{{ $product->ProductName }}</a></h6>
                                                    <span class="price">{{ $product->Price }} VNĐ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
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


    <!--container-->

    <!--========================================
sign up
===========================================-->
    @guest
    <div class="container">
        <div class="xv-sign-up text-center pt-20 pb-60">
            <h3>Đăng ký tài khoản mới</h3>
            <!-- <form class="sign-up-form">
                <i class="fa fa-envelope"></i>
                <input type="text" placeholder="Nhập gmail..." />
                <button type="submit">Đăng kí</button>
            </form> -->
            <a href="{{route('register')}}">
                <button type="submit" style="background-color: #ff4575; border-radius: 30px; height: 43px; width:170px;border:none;color:#fff;font-size: 16px;">Đăng kí</button>
            </a>
            <!-- <p>
                Vui lòng đăng ký vào danh sách gửi thư để nhận được thông tin cập nhật mới, <br />
                ưu đãi đặc biệt và thông tin giảm giá khác.
            </p> -->
        </div>
    </div>
    @endguest

    <div class="container">
        <div class="xv-sign-up text-center pt-20 pb-60">
            <h3>Đăng ký bên dưới để cập nhật sớm</h3>
            <form class="sign-up-form">
                <i class="fa fa-envelope"></i>
                <input type="text" placeholder="Nhập gmail..." />
                <button type="submit">Đăng kí</button>
            </form>
            <p>
                Vui lòng đăng ký vào danh sách gửi thư để nhận được thông tin cập nhật mới, <br />
                ưu đãi đặc biệt và thông tin giảm giá khác.
            </p>
        </div>
    </div>

    <!--container-->
</main>
<!--pageContentArea ends-->
@endsection
