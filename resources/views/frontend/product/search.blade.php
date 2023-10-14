@extends('frontend/layouts.master')

@section('title')
<title>Blog page</title>
@endsection

@section('content')

<main id="pageContentArea">

    <div class="page-head text-center">
        <div class="blog-main-slider" style="background-image: radial-gradient(circle, #7ca3dc, #1e71de);">
            <div class="overlay"></div>
            <div class="container">
                <h2 style="margin-top: 120px;">Kết quả tìm kiếm cho: {{ $search }}</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="product-overview pt-50 pb-50">
            <div class="row">
                <div class="col-xs-12 col-sm-3 hidden-xs">
                    <!-- <aside class="sidebar" style="border-right: 1px solid #ccc">
                        <ul class="breadcrumb">
                            <li><a href="#"><i class="fa fa-home"></i>Trang chủ</a></li>
                            <li><a href="#">Danh mục sản phẩm</a></li>

                        </ul>
                        <h4>DANH MỤC</h4>


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
                    </aside> -->
                </div>
                <div class="col-xs-12 col-sm-9">
                    <!-- <header class="sec-heading style text-center">
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
                    </header> -->
                    <div class="xv-product-slides grid-view products" data-thumbnail="figure .xv-superimage" data-product=".xv-product-unit">
                        <div class="row">

                            @foreach($sProducts as $product)
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
                                        <span class="xv-price">{{ $product->Price }} VNĐ</span>
                                        {{-- <del class="">giá giiảm VNĐ</del>--}}
                                        <a data-qv-tab="#qvt-cart" href="#" class="product-buy flytoQuickView">MUA</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
                    </div> -->


                </div>
            </div>
        </div>
    </div>

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

</main>
@endsection