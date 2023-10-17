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
                    <aside class="sidebar" style="border-right: 1px solid #ccc">
                        <ul class="breadcrumb">
                            <li><a href="#"><i class="fa fa-home"></i>Trang chủ</a></li>
                            <li><a href="#">Danh mục sản phẩm</a></li>

                        </ul>
                        <h4>DANH MỤC</h4>

                        <!-- show all products  -->
                        <ul class="customeField clearfix">
                            <li>
                                <input name="brandFilter-radio" id="pcheck6" class="required-check" type="radio" value="0">
                                <label for="pcheck6">
                                    <a class="category_css" href="{{ route('show-products', ['categoryName' => 'tat-ca' , 'categoryId' =>  0 ]) }}">
                                        Tất cả danh mục
                                    </a>
                                </label>
                            </li>
                        </ul>

                        <!-- filter by category  -->
                        @foreach($categories as $category)
                        <ul class="customeField clearfix">
                            <li>
                                <input name="brandFilter-radio" id="pcheck{{ $category->CategoryId }}" class="required-check" type="radio" value="{{ $category->CategoryId }}">
                                <label for="pcheck{{ $category->CategoryId }}">
                                    <a class="category_css" href="{{ route('show-products', ['categoryName' => $category->CategoryName ,'categoryId' => $category->CategoryId]) }}">
                                        {{ $category->CategoryName }}
                                    </a>
                                </label>
                            </li>
                        </ul>
                        @endforeach
                    </aside>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <header class="sec-heading style text-center">
                        <div class="category-wrap">
                            <!-- <span class="categorise">Sắp xếp theo Gía (Thấp - Cao)<i class="fa style fa-caret-down"></i></span> -->
                            <ul>
                                <li>
                                    <a href="{{ route('danh-muc', ['sort' => 'low_to_high']) }}">Sắp xếp theo Gía (Thấp - Cao)</a>
                                </li>
                                <li>
                                    <a href="{{ route('danh-muc', ['sort' => 'high_to_low']) }}">Sắp xếp theo Gía (Cao - Thấp)</a>
                                </li>
                                <!-- <li>
                                    <a href="#">Sắp xếp theo đánh giá</a>
                                </li> -->
                            </ul>
                        </div>
                        <!-- <div class="item-selector-wrap">
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
                        </div> -->
                        <span class="btn-list"><i class="fa fa-bars"></i></span>
                        <span class="btn-grid"><i class="fa fa-th-large"></i></span>
                    </header>
                    <div class="xv-product-slides grid-view products" data-thumbnail="figure .xv-superimage" data-product=".xv-product-unit">
                        <div class="row">
                            <!-- show products theo category  -->
                            @if($Sproducts != null)
                            @foreach($Sproducts as $product)
                            <div data-pid="{{ $product->ProductId }}" data-name="{{ $product->ProductName }}" data-price="{{ $product->Price }}" class="xv-product-unit">
                                <div class="xv-product mb-15 mt-15 shadow-around">
                                    <figure>
                                        @php
                                        $firstImageDisplayed = false;
                                        @endphp
                                        @foreach ($product_images as $product_image)
                                        @if ($product_image->ProductId == $product->ProductId && !$firstImageDisplayed)
                                        <a href="#"><img style="width: 180px;" src="{{ asset('storage/' . $product_image->path) }}" alt="Product Image"></a>
                                        @php
                                        $firstImageDisplayed = true;
                                        @endphp
                                        @endif
                                        @endforeach

                                        <figcaption>
                                            <ul class="style1">
                                                <li><a data-qv-tab="#qvt-wishlist" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a data-qv-tab="#qvt-compare" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-exchange"></i></a></li>
                                                <li><a class="btn-cart btn-square btn-blue" href="#"><i class="fa fa-expand"></i></a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <div class="xv-product-content">
                                        <h3 style="line-height: 20px; font-weight: 600"><a href="{{ route('product.details', ['productName' => $product->ProductName , 'ProductId' => $product->ProductId]) }}">{{ $product->ProductName }}</a></h3>

                                        <p style=" height: 3em;white-space: nowrap;text-overflow: ellipsis; overflow: hidden;">{{ $product->Description }}</p>

                                        <ul class="extra-links">
                                            <li><a href="#"><i class="fa fa-heart"></i>Wishlist</a></li>
                                            <li><a href="#"><i class="fa fa-exchange"></i>Compare</a></li>
                                            <li><a href="#"><i class="fa fa-expand"></i>Expand</a></li>
                                        </ul>
                                        <div class="xv-rating stars-5"></div>
                                        <!-- <span class="xv-price">{{ $product->Price }} VNĐ</span> -->
                                        @if ($product->Sale >= 1)
                                        <span class="xv-price">{{ ($product->Price - ($product->Sale/100*$product->Price))  }} VNĐ</span>
                                        <del class="">{{ $product->Price }} VNĐ</del>
                                        @else
                                        <span class="xv-price">{{ $product->Price }} VNĐ</span>
                                        @endif
                                        <a data-qv-tab="#qvt-cart" href="#" class="product-buy flytoQuickView">MUA</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{$Sproducts->links()}}
                            @else
                            @foreach($productss as $product)
                            <div data-pid="{{ $product->ProductId }}" data-name="{{ $product->ProductName }}" data-price="{{ $product->Price }}" class="xv-product-unit">
                                <div class="xv-product mb-15 mt-15 shadow-around">
                                    <figure>
                                        @php
                                        $firstImageDisplayed = false;
                                        @endphp
                                        @foreach ($product_images as $product_image)
                                        @if ($product_image->ProductId == $product->ProductId && !$firstImageDisplayed)
                                        <a href="#"><img style="width: 180px;" src="{{ asset('storage/' . $product_image->path) }}" alt="Product Image"></a>
                                        @php
                                        $firstImageDisplayed = true;
                                        @endphp
                                        @endif
                                        @endforeach

                                        <figcaption>
                                            <ul class="style1">
                                                <li><a data-qv-tab="#qvt-wishlist" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a data-qv-tab="#qvt-compare" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-exchange"></i></a></li>
                                                <li><a class="btn-cart btn-square btn-blue" href="#"><i class="fa fa-expand"></i></a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <div class="xv-product-content">
                                        <h3 style="line-height: 20px; font-weight: 600"><a href="{{ route('product.details', ['productName' => $product->ProductName , 'ProductId' => $product->ProductId]) }}">{{ $product->ProductName }}</a></h3>

                                        <p style=" height: 3em;white-space: nowrap;text-overflow: ellipsis; overflow: hidden;">{{ $product->Description }}</p>

                                        <ul class="extra-links">
                                            <li><a href="#"><i class="fa fa-heart"></i>Wishlist</a></li>
                                            <li><a href="#"><i class="fa fa-exchange"></i>Compare</a></li>
                                            <li><a href="#"><i class="fa fa-expand"></i>Expand</a></li>
                                        </ul>
                                        <div class="xv-rating stars-5"></div>
                                        <!-- <span class="xv-price">{{ $product->Price }} VNĐ</span> -->
                                        @if ($product->Sale >= 1)
                                        <span class="xv-price">{{ ($product->Price - ($product->Sale/100*$product->Price))  }} VNĐ</span>
                                        <del class="">{{ $product->Price }} VNĐ</del>
                                        @else
                                        <span class="xv-price">{{ $product->Price }} VNĐ</span>
                                        @endif
                                        <a data-qv-tab="#qvt-cart" href="#" class="product-buy flytoQuickView">MUA</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{$productss->links()}}
                            @endif
                        </div>
                    </div>
                    <!-- <div class="pagination text-center pt-10 pb-05">
                        <ul>
                            <li><a href="#">Trước</a></li>
                            <li><a href="#">1</a></li>
                            
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Sau</a></li>
                        </ul>
                    </div>  -->
                </div>
            </div>
        </div>
    </div>
    <!--========================================
        Custom Block
        ===========================================-->
    <!-- <div class="container">
        <div class="cutom-block">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <a class="xv-block text-center" href="#" style="background-image:url('/Duanmautemplate/assets/img/block-img.jpg'); no-repeat"> <span>Khuyến mãi hàng tuần</span>
                    </a>
                </div>

                <div class="col-xs-12 col-md-6">
                    <a class="xv-block text-center" href="#" style="background-image:url('/Duanmautemplate/assets/img/block-img2.jpg'); no-repeat"> <span>Combo giảm giá </span>
                    </a>
                </div>
            </div>
        </div>
    </div> -->
    <!--=================================
        Sales
        =================================-->
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
<!-- <script>
    $(document).ready(function() {
        $('input[name="brandFilter-radio"]').on('change', function() {
            var categoryId = $(this).val(); // Lấy giá trị value của radio button

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
</script> -->
@endsection