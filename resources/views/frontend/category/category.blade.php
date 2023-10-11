@extends('frontend/layouts.master')

@section('title')
<title>Blog page</title>
@endsection

@section('content')
<!--=======Page Content Area=========-->
<main id="pageContentArea">
    <!--========================================
        Page Head
        ===========================================-->
    <div class="page-head text-center">
        <div class="blog-main-slider" style="background-image: radial-gradient(circle, #7ca3dc, #1e71de);">
            <div class="overlay"></div>
            <div class="container">
                <h2>DANH MỤC SẢN PHẨM</h2>
                <p>Hiển thị danh mục và các sản phẩm thuộc danh mục</p>
            </div>
        </div>
    </div>
    <!--========================================
        grid and list view
        ===========================================-->
    <div class="container">
        <div class="product-overview pt-50 pb-50">
            <div class="row">
                <div class="col-xs-12 col-sm-3 hidden-xs">
                    <aside class="sidebar">
                        <ul class="breadcrumb">
                            <li><a href="#"><i class="fa fa-home"></i>Trang chủ</a></li>
                            <li><a href="#">Danh mục sản phẩm</a></li>

                        </ul>
                        <h4>DANH MỤC</h4>
                        <ul class="customeField clearfix">
                            <li>
                                <input name="brandFilter-radio" id="pcheck6" class="required-check" type="radio" value="all">
                                <label for="pcheck6">
                                    Tất cả danh mục
                                    <span>
                                        <i></i>
                                    </span>
                                </label>
                            </li>
                        </ul>

                        @foreach($categories as $category)
                        <ul class="customeField clearfix">
                            <li>
                                <input name="brandFilter-radio" id="pcheck{{ $category->CategoryId }}" class="required-check" type="radio">
                                <label for="pcheck{{ $category->CategoryId }}">
                                    {{ $category->CategoryName }}
                                    <span><i></i></span>
                                </label>
                            </li>
                        </ul>
                        @endforeach

                        <!-- tìm kiếm nâng cao  -->

                        <!-- <section class="widget widget-category pb-30">
                            <header>
                                <h3>TÌM KIẾM NÂNG CAO</h3>
                            </header>
                            <div class="widget-content">
                                <ul>
                                    <li class="parent"><a href="#">Gía cả</a>
                                        <ul class="customeField">
                                            <li>
                                                <input name="brandFilter-radio" id="pcheck14" class="required-check" type="radio">
                                                <label for="pcheck14">
                                                    Cao -> Thấp
                                                    <span>
                                                        <i></i>
                                                    </span>
                                                </label>
                                            </li>
                                            <li>
                                                <input name="brandFilter-radio" id="pcheck15" class="required-check" type="radio">
                                                <label for="pcheck15">
                                                    Thấp -> Cao
                                                    <span>
                                                        <i></i>
                                                    </span>
                                                </label>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="parent"><a href="#">Thương hiệu</a>
                                        <ul class="customeField">
                                            <li>
                                                <input name="brandFilter-radio" id="pcheck17" class="required-check" type="radio">
                                                <label for="pcheck17">
                                                    Greenbird
                                                    <span>
                                                        <i></i>
                                                    </span>
                                                </label>
                                            </li>
                                            <li>
                                                <input name="brandFilter-radio" id="pcheck18" class="required-check" type="radio">
                                                <label for="pcheck18">
                                                    Brauer
                                                    <span>
                                                        <i></i>
                                                    </span>
                                                </label>
                                            </li>
                                            <li>
                                                <input name="brandFilter-radio" id="pcheck19" class="required-check" type="radio">
                                                <label for="pcheck19">
                                                    Datino
                                                    <span>
                                                        <i></i>
                                                    </span>
                                                </label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="parent"><a href="#">Đánh giá</a>
                                        <ul class="customeField">
                                            <li>
                                                <input name="brandFilter-radio" id="pcheck20" class="required-check" type="radio">
                                                <label for="pcheck20">
                                                    Nhiều đánh giá nhất
                                                    <span>
                                                        <i></i>
                                                    </span>
                                                </label>
                                            </li>
                                            <li>
                                                <input name="brandFilter-radio" id="pcheck21" class="required-check" type="radio">
                                                <label for="pcheck21">
                                                    Đánh giá tốt nhất
                                                    <span>
                                                        <i></i>
                                                    </span>
                                                </label>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="parent"><a href="#">Chất lượng</a>
                                        <ul class="customeField">
                                            <li>
                                                <input name="brandFilter-radio" id="pcheck23" class="required-check" type="radio">
                                                <label for="pcheck23">
                                                    Tốt nhất
                                                    <span>
                                                        <i></i>
                                                    </span>
                                                </label>
                                            </li>
                                            <li>
                                                <input name="brandFilter-radio" id="pcheck24" class="required-check" type="radio">
                                                <label for="pcheck24">
                                                    Tốt nhất
                                                    <span>
                                                        <i></i>
                                                    </span>
                                                </label>
                                            </li>
                                            <li>
                                                <input name="brandFilter-radio" id="pcheck25" class="required-check" type="radio">
                                                <label for="pcheck25">
                                                    Tốt nhất
                                                    <span>
                                                        <i></i>
                                                    </span>
                                                </label>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </section> -->

                        <!-- tìm kiếm phổ biến  -->

                        <!-- <section class="widget widget_tag_cloud pt-30">
                            <header>
                                <h3>TÌM KIẾM PHỔ BIẾN</h3>
                            </header>
                            <div class="widget-content">
                                <a href="#">Bệnh dịch</a>
                                <a href="#">Gía thuốc</a>
                                <a href="#">Sốt</a>
                                <a href="#">Dịch bệnh 2023</a>
                                <a href="#">Thương hiệu</a>
                                <a href="#">Covid</a>
                                <a href="#">Hạt nhân</a>
                                <a href="#">Phóng xạ</a>

                            </div>
                        </section> -->
                    </aside>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <header class="sec-heading style text-center">
                        <div class="category-wrap">
                            <span class="categorise">Sắp xếp theo Gía (Thấp - Cao)<i class="fa style fa-caret-down"></i></span>
                            <ul>
                                <li><a href="#">Sắp xếp theo Gía (Cao - Thấp)</a></li>
                                <li><a href="#">Sắp xếp theo Thương Hiệu</a></li>
                                <li><a href="#">Sắp xếp theo đánh giá</a></li>

                            </ul>
                        </div>
                        <div class="item-selector-wrap">
                            <span class="items">Hiển thị 9<i class="fa style fa-caret-down"></i></span>
                            <ul class="item-selector">
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#">8</a></li>
                                <li><a href="#">9</a></li>
                            </ul>
                        </div>
                        <span class="btn-list"><i class="fa fa-bars"></i></span>
                        <span class="btn-grid"><i class="fa fa-th-large"></i></span>
                    </header>
                    <div class="xv-product-slides grid-view products" data-thumbnail="figure .xv-superimage" data-product=".xv-product-unit">
                        <div class="row">
                            <div class="xv-product-unit">
                                <!-- <div class="xv-product shadow-around">
                                    <figure>
                                        <a href="#"><img class="xv-superimage" src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg" alt="" /></a>
                                        <figcaption>
                                            <ul class="style1">
                                                <li><a data-qv-tab="#qvt-wishlist" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a data-qv-tab="#qvt-compare" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-exchange"></i></a></li>
                                                <li><a class="btn-cart btn-square btn-blue" href="#"><i class="fa fa-expand"></i></a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <div class="xv-product-content">
                                        <h3><a href="detail1.html">Bông tẩy trang Pharmacity Cotton Puffs (Hộp 90 miếng) - New</a></h3>

                                        <ul class="color-opt">
                                            <li>Bông tẩy trang được làm từ 100% cotton tự nhiên mang lại cảm giác mềm mại và mịn màng khi sử dụng...</li>
                                        </ul>
                                        <ul class="extra-links">
                                            <li><a href="#"><i class="fa fa-heart"></i>Wishlist</a></li>
                                            <li><a href="#"><i class="fa fa-exchange"></i>Compare</a></li>
                                            <li><a href="#"><i class="fa fa-expand"></i>Expand</a></li>
                                        </ul>
                                        <div class="xv-rating stars-5"></div>
                                        <span class="xv-price">250.000 VNĐ</span>
                                        <a data-qv-tab="#qvt-cart" href="#" class="product-buy flytoQuickView">MUA</a>
                                    </div>
                                </div> -->
                            </div>

                            <!-- show products theo categories  -->
                            @foreach($products as $product)
                            <div data-pid="{{ $product->ProductId }}" data-name="{{ $product->ProductName }}" data-price="{{ $product->Price }}" class="xv-product-unit">
                                <div class="xv-product mb-15 mt-15 shadow-around">
                                    <figure>

                                        @if ($product_images)
                                        @php
                                        $firstImageDisplayed = false;
                                        @endphp
                                        @foreach ($product_images as $product_image)
                                        @if ($product_image->ProductId == $product->ProductId && !$firstImageDisplayed)
                                        <a href="#"><img src="{{ asset('storage/' . $product_image->path) }}" alt="Product Image"></a>
                                        @php
                                        $firstImageDisplayed = true;
                                        @endphp
                                        @endif
                                        @endforeach
                                        @endif
                                        <figcaption>
                                            <ul class="style1">
                                                <li><a data-qv-tab="#qvt-wishlist" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a data-qv-tab="#qvt-compare" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-exchange"></i></a></li>
                                                <li><a class="btn-cart btn-square btn-blue" href="#"><i class="fa fa-expand"></i></a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <div class="xv-product-content">
                                        <h3><a href="{{ route('product.index', ['ProductId' => $product->ProductId]) }}">{{ $product->ProductName }}</a></h3>
                                        <ul class="color-opt">
                                            <li>{{ $product->Description }}</li>
                                        </ul>
                                        <ul class="extra-links">
                                            <li><a href="#"><i class="fa fa-heart"></i>Wishlist</a></li>
                                            <li><a href="#"><i class="fa fa-exchange"></i>Compare</a></li>
                                            <li><a href="#"><i class="fa fa-expand"></i>Expand</a></li>
                                        </ul>
                                        <div class="xv-rating stars-5"></div>
                                        <span class="xv-price">{{ $product->Price }} VNĐ</span>
                                        <a data-qv-tab="#qvt-cart" href="#" class="product-buy flytoQuickView">MUA</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>

                    <div class="pagination text-center pt-10 pb-05">
                        <ul>
                            <li><a href="#">Trước</a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Sau</a></li>
                        </ul>
                    </div>


                </div>
            </div><!--row-->
        </div><!--product overview-->
    </div><!--container-->
    <!--========================================
        Custom Block
        ===========================================-->
    <div class="container">
        <div class="cutom-block">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <a class="xv-block text-center" href="#" style="background-image:url('/Duanmautemplate/assets/img/block-img.jpg'); no-repeat"> <span>Khuyến mãi hàng tuần</span>
                    </a>
                </div><!--left column-->

                <div class="col-xs-12 col-md-6">
                    <a class="xv-block text-center" href="#" style="background-image:url('/Duanmautemplate/assets/img/block-img2.jpg'); no-repeat"> <span>Combo giảm giá </span>
                    </a>
                </div><!--right column-->
            </div><!--row-->
        </div><!--customBlock-->
    </div><!--container-->
    <!--=================================
        Sales
        =================================-->
    <div class="container">
        <div class="xv-bseller pt-25 pb-20">
            <header class="sec-heading text-center">
                <div class="category-wrap style">
                    <span class="categorise"><i class="fa fa-bars"></i>Danh mục sản phẩm<i class="fa style fa-caret-down"></i></span>
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
            <div class="owl-carousel slider_controls1 mb-30 mt-30 shadow-around products" data-thumbnail="figure .xv-superimage" data-product=".xv-accessories" data-dots="false" data-prev="fa fa-angle-left" data-next="fa fa-angle-right" data-margin="0" data-slides="1" data-slides-md="1" data-slides-sm="1" data-loop="true" data-nav="true">
                <div class="xv-best-seller">
                    <div class="row border-bottom">
                        <div class="col-xs-12 col-sm-4 col-md-3 no-pad">
                            <div data-pid="xyz401" data-name="Smartphone Apple iPhone 5 64GB" data-category="mobiles" data-price="250" class="xv-accessories text-center pt-30 pb-30 border-right">
                                <figure>
                                    <img class="xv-superimage" src="/Duanmautemplate/assets/img/product/sell1.jpg" alt="" />
                                    <figcaption>
                                        <ul class="style1">
                                            <li>
                                                <a data-qv-tab="#qvt-cart" class="btn-cart btn-rectangle btn-blue flytoQuickView" href="#"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
                                            </li>
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
                            <div data-pid="xyz401" data-name="Smartphone Apple iPhone 5 64GB" data-category="mobiles" data-price="250" class="xv-accessories text-center pt-30 pb-30 border-right">
                                <figure>
                                    <img class="xv-superimage" src="/Duanmautemplate/assets/img/product/sell1.jpg" alt="" />
                                    <figcaption>
                                        <ul class="style1">
                                            <li>
                                                <a data-qv-tab="#qvt-cart" class="btn-cart btn-rectangle btn-blue flytoQuickView" href="#"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
                                            </li>
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
                            <div data-pid="xyz401" data-name="Smartphone Apple iPhone 5 64GB" data-category="mobiles" data-price="250" class="xv-accessories text-center pt-30 pb-30 border-right">
                                <figure>
                                    <img class="xv-superimage" src="/Duanmautemplate/assets/img/product/sell1.jpg" alt="" />
                                    <figcaption>
                                        <ul class="style1">
                                            <li>
                                                <a data-qv-tab="#qvt-cart" class="btn-cart btn-rectangle btn-blue flytoQuickView" href="#"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
                                            </li>
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
                            <div data-pid="xyz401" data-name="Smartphone Apple iPhone 5 64GB" data-category="mobiles" data-price="250" class="xv-accessories text-center pt-30 pb-30 border-right">
                                <figure>
                                    <img class="xv-superimage" src="/Duanmautemplate/assets/img/product/sell1.jpg" alt="" />
                                    <figcaption>
                                        <ul class="style1">
                                            <li>
                                                <a data-qv-tab="#qvt-cart" class="btn-cart btn-rectangle btn-blue flytoQuickView" href="#"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
                                            </li>
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
                            <div data-pid="xyz401" data-name="Smartphone Apple iPhone 5 64GB" data-category="mobiles" data-price="250" class="xv-accessories text-center pt-30 pb-30 border-right">
                                <figure>
                                    <img class="xv-superimage" src="/Duanmautemplate/assets/img/product/sell1.jpg" alt="" />
                                    <figcaption>
                                        <ul class="style1">
                                            <li>
                                                <a data-qv-tab="#qvt-cart" class="btn-cart btn-rectangle btn-blue flytoQuickView" href="#"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
                                            </li>
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
                            <div data-pid="xyz401" data-name="Smartphone Apple iPhone 5 64GB" data-category="mobiles" data-price="250" class="xv-accessories text-center pt-30 pb-30 border-right">
                                <figure>
                                    <img class="xv-superimage" src="/Duanmautemplate/assets/img/product/sell1.jpg" alt="" />
                                    <figcaption>
                                        <ul class="style1">
                                            <li>
                                                <a data-qv-tab="#qvt-cart" class="btn-cart btn-rectangle btn-blue flytoQuickView" href="#"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
                                            </li>
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
                            <div data-pid="xyz401" data-name="Smartphone Apple iPhone 5 64GB" data-category="mobiles" data-price="250" class="xv-accessories text-center pt-30 pb-30 border-right">
                                <figure>
                                    <img class="xv-superimage" src="/Duanmautemplate/assets/img/product/sell1.jpg" alt="" />
                                    <figcaption>
                                        <ul class="style1">
                                            <li>
                                                <a data-qv-tab="#qvt-cart" class="btn-cart btn-rectangle btn-blue flytoQuickView" href="#"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
                                            </li>
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
                            <div data-pid="xyz401" data-name="Smartphone Apple iPhone 5 64GB" data-category="mobiles" data-price="250" class="xv-accessories text-center pt-30 pb-30 border-right">
                                <figure>
                                    <img class="xv-superimage" src="/Duanmautemplate/assets/img/product/sell1.jpg" alt="" />
                                    <figcaption>
                                        <ul class="style1">
                                            <li>
                                                <a data-qv-tab="#qvt-cart" class="btn-cart btn-rectangle btn-blue flytoQuickView" href="#"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
                                            </li>
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
                            <div data-pid="xyz401" data-name="Smartphone Apple iPhone 5 64GB" data-category="mobiles" data-price="250" class="xv-accessories text-center pt-30 pb-30 border-right">
                                <figure>
                                    <img class="xv-superimage" src="/Duanmautemplate/assets/img/product/sell1.jpg" alt="" />
                                    <figcaption>
                                        <ul class="style1">
                                            <li>
                                                <a data-qv-tab="#qvt-cart" class="btn-cart btn-rectangle btn-blue flytoQuickView" href="#"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
                                            </li>
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
                            <div data-pid="xyz401" data-name="Smartphone Apple iPhone 5 64GB" data-category="mobiles" data-price="250" class="xv-accessories text-center pt-30 pb-30 border-right">
                                <figure>
                                    <img class="xv-superimage" src="/Duanmautemplate/assets/img/product/sell1.jpg" alt="" />
                                    <figcaption>
                                        <ul class="style1">
                                            <li>
                                                <a data-qv-tab="#qvt-cart" class="btn-cart btn-rectangle btn-blue flytoQuickView" href="#"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
                                            </li>
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
                            <div data-pid="xyz401" data-name="Smartphone Apple iPhone 5 64GB" data-category="mobiles" data-price="250" class="xv-accessories text-center pt-30 pb-30 border-right">
                                <figure>
                                    <img class="xv-superimage" src="/Duanmautemplate/assets/img/product/sell1.jpg" alt="" />
                                    <figcaption>
                                        <ul class="style1">
                                            <li>
                                                <a data-qv-tab="#qvt-cart" class="btn-cart btn-rectangle btn-blue flytoQuickView" href="#"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
                                            </li>
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
                            <div data-pid="xyz401" data-name="Smartphone Apple iPhone 5 64GB" data-category="mobiles" data-price="250" class="xv-accessories text-center pt-30 pb-30 border-right">
                                <figure>
                                    <img class="xv-superimage" src="/Duanmautemplate/assets/img/product/sell1.jpg" alt="" />
                                    <figcaption>
                                        <ul class="style1">
                                            <li>
                                                <a data-qv-tab="#qvt-cart" class="btn-cart btn-rectangle btn-blue flytoQuickView" href="#"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
                                            </li>
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
                            <div data-pid="xyz401" data-name="Smartphone Apple iPhone 5 64GB" data-category="mobiles" data-price="250" class="xv-accessories text-center pt-30 pb-30 border-right">
                                <figure>
                                    <img class="xv-superimage" src="/Duanmautemplate/assets/img/product/sell1.jpg" alt="" />
                                    <figcaption>
                                        <ul class="style1">
                                            <li>
                                                <a data-qv-tab="#qvt-cart" class="btn-cart btn-rectangle btn-blue flytoQuickView" href="#"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
                                            </li>
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
                            <div data-pid="xyz401" data-name="Smartphone Apple iPhone 5 64GB" data-category="mobiles" data-price="250" class="xv-accessories text-center pt-30 pb-30 border-right">
                                <figure>
                                    <img class="xv-superimage" src="/Duanmautemplate/assets/img/product/sell1.jpg" alt="" />
                                    <figcaption>
                                        <ul class="style1">
                                            <li>
                                                <a data-qv-tab="#qvt-cart" class="btn-cart btn-rectangle btn-blue flytoQuickView" href="#"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
                                            </li>
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
                            <div data-pid="xyz401" data-name="Smartphone Apple iPhone 5 64GB" data-category="mobiles" data-price="250" class="xv-accessories text-center pt-30 pb-30 border-right">
                                <figure>
                                    <img class="xv-superimage" src="/Duanmautemplate/assets/img/product/sell1.jpg" alt="" />
                                    <figcaption>
                                        <ul class="style1">
                                            <li>
                                                <a data-qv-tab="#qvt-cart" class="btn-cart btn-rectangle btn-blue flytoQuickView" href="#"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
                                            </li>
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
                            <div data-pid="xyz401" data-name="Smartphone Apple iPhone 5 64GB" data-category="mobiles" data-price="250" class="xv-accessories text-center pt-30 pb-30 border-right">
                                <figure>
                                    <img class="xv-superimage" src="/Duanmautemplate/assets/img/product/sell1.jpg" alt="" />
                                    <figcaption>
                                        <ul class="style1">
                                            <li>
                                                <a data-qv-tab="#qvt-cart" class="btn-cart btn-rectangle btn-blue flytoQuickView" href="#"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
                                            </li>
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
    </div><!--container-->
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
        </div><!--xv-signup-->
    </div><!--container-->

</main><!--pageContentArea-->
<script>
    $(document).ready(function() {
        $('input[name="brandFilter-radio"]').on('change', function() {
            var categoryId = $(this).attr('id').replace('pcheck', ''); // Lấy categoryId từ id của radio button
            if (categoryId === 'all') {
                // Hiển thị tất cả sản phẩm

            } else {
                // Gửi yêu cầu AJAX để lấy sản phẩm dựa trên danh mục được chọn
                $.get('/get-Products/' + categoryId, function(data) {
                    // Đổ dữ liệu sản phẩm vào một phần tử trên trang
                    $('#product-container').html(data);
                });
            }
        });
    });
</script>
@endsection