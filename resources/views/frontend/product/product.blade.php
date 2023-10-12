@extends('frontend/layouts.master')

@section('title')
<title>DetailProduc page</title>
@endsection

@section('content')
<!--=======Page Content Area=========-->
<main id="pageContentArea">

    <!--========================================
        Product Details
        ===========================================-->

    <div class="page-head style text-center">
        <div class="blog-main-slider" style="background-image: radial-gradient(circle, #7ca3dc, #1e71de);">
            <div class="overlay"></div>
            <div class="container">
                <h2>CHI TIẾT SẢN PHẨM</h2>
                <p>Hiển thị các thông tin đầy đủ về sản phẩm</p>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <!--========================================
        single product details
        ===========================================-->
    <div class="container">
        <div class="single-product-detail pt-60 pb-30">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="product-slider-wrap text-center shadow-around">
                        <div class="product-slide">
                            <figure id="main-image">@php
                                $firstImageDisplayed = false;
                                @endphp
                                @foreach ($product_images as $image)
                                @if ($image->ProductId == $product->ProductId && !$firstImageDisplayed)
                                <a href="#">
                                    <img src="{{ asset('storage/' . $image->path) }}" alt="Product Image">
                                </a>
                                @php
                                $firstImageDisplayed = true;
                                @endphp
                                @endif
                                @endforeach
                            </figure>
                        </div>
                        <div class="product-slider styleDetail">
                            <div class="detail-slider">
                                <div class="owl-carousel slider_controls5" data-dots="false" data-prev="fa fa-angle-left" data-next="fa fa-angle-right" data-margin="20" data-slides="4" data-slides-md="3" data-slides-sm="1" data-loop="false" data-nav="true">
                                    @foreach($product_images as $image)
                                    <figure class="border-around">
                                        <a href="#">
                                            <img src="{{ asset('storage/' . $image->path) }}" alt="Product Image">
                                        </a>
                                    </figure>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        // Lấy danh sách tất cả các hình ảnh trong carousel
                        var thumbnailImages = document.querySelectorAll('.slider_controls5 figure');

                        // Lặp qua từng hình ảnh và thêm sự kiện click
                        thumbnailImages.forEach(function(thumbnailImage) {
                            thumbnailImage.addEventListener('click', function() {
                                event.preventDefault();
                                // Lấy đường dẫn hình ảnh từ thuộc tính 'src' của hình ảnh nhỏ
                                var imageUrl = thumbnailImage.querySelector('img').getAttribute('src');

                                // Lấy đối tượng hình ảnh chính
                                var mainImage = document.getElementById('main-image');

                                // Đặt đường dẫn hình ảnh chính thành đường dẫn của hình ảnh nhỏ khi click
                                mainImage.querySelector('img').setAttribute('src', imageUrl);
                            });
                        });
                    </script>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="single-product-overview">
                        <h2>{{ $product->ProductName }}</h2>
                        <div class="xv-rating stars-5"></div>
                        <ul class="review">
                            <li>15 Đánh giá</li>
                            <li><a href="#">Tạo một đánh giá</a></li>
                        </ul>
                        <p class="no-mar">{{ $product->Description }}</p>
                        <div class="cart-options">
                            <a href="#" class="price"><span>{{ number_format($product->Price, 0, ',', ' ') }} VNĐ</span></a>


                            <form action="{{ route('add-to-cart', ['ProductId' => $product->ProductId]) }}" method="POST" id="addToCartForm">
                                @csrf
                                <ul class="cart-buttons mt-45 clearfix">
                                    <li>
                                        @if ($errors != null)
                                        <input type="text" class="form-control" id="quantity" name="quantity" value="1">
                                        @elseif($error == null)
                                        <div class="alert alert-danger">
                                            <ul>
                                                <li>{{ $error }}</li>
                                            </ul>
                                        </div>
                                        @endif
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-continue" id="addToCartButton">THÊM VÀO GIỎ HÀNG</button>
                            </form>


                            <!-- <form action="{{ route('add-to-cart', ['ProductId' => $product->ProductId]) }}" method="POST">
                                @csrf
                                <ul class="cart-buttons mt-45 clearfix">
                                    <li>
                                        @if ($errors != null) -->
                            <!-- <div class="quantity-control">
                                            <span class="btn-cart btn-square btn-plus btn-qty"><i class="fa fa-plus"></i></span>
                                            <input id="quantity" name="quantity" type="number" data-invalid="Enter valid quantity" data-maxalert="Trong kho hàng chỉ còn {{ $quantityInWarehouse }}" data-max="{{ $quantityInWarehouse }}" data-minalert="Minimum limit reached" data-min="1" value="1">
                                            <span class="btn-cart btn-square btn-minus btn-qty"><i class="fa fa-minus"></i></span>
                                        </div> -->
                            <!-- <div class="quantity-control">
                                            <span class="btn-cart btn-square btn-plus btn-qty"><i class="fa fa-plus"></i></span>
                                            <input type="number" id="quantity" name="quantity"  min="1" value="1">
                                            <span class="btn-cart btn-square btn-minus btn-qty"><i class="fa fa-minus"></i></span>
                                        </div> -->
                            <!-- <input type="number" class="form-control" id="qtity" name="qtity" value="1">
                                        @elseif($error == null)
                                        <div class="alert alert-danger">
                                            <ul>
                                                <li>{{ $error }}</li>
                                            </ul>
                                        </div>
                                        @endif
                                    </li> -->
                            <!-- <li>
                                        <a href="#" class="btn-cart btn-square">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn-cart btn-square">
                                            <i class="fa fa-exchange"></i>
                                        </a>
                                    </li> -->
                            <!-- </ul>

                                <a href="{{ route('add-to-cart', ['ProductId' => $product->ProductId]) }}" class="btn btn-continue">THÊM VÀO GIỎ HÀNG</a>
                            </form> -->

                        </div>
                    </div>
                </div>
            </div>
            <div class="tabs-pane mt-60">
                <ul class="tab-sections">
                    <li class="active"><a href="#tab01" class="btn-cart">Mô tả</a></li>
                    <li><a href="#tab02" class="btn-cart">Công dụng</a></li>
                    <li><a href="#tab03" class="btn-cart">Cách dùng</a></li>
                    <li><a href="#tab04" class="btn-cart">Tác dụng phụ</a></li>
                    <li><a href="#tab05" class="btn-cart">Đánh giá</a></li>
                </ul>
                <div class="tab-panels">
                    <div id="tab01" class="tab-content active">
                        <h4>{{ $product->ProductName }} là gì ?</h4>
                        <h4>Mô tả sản phẩm</h4>
                        <p>{{ $product->Description }}</p>
                        <!-- <h4>Thành phần</h4> -->
                        <!-- <ul>
                            @foreach(explode(', ', $product->Ingredients) as $ingredient)
                            <li>{{ $ingredient }}</li>
                            @endforeach
                        </ul> -->
                    </div>
                    <div id="tab02" class="tab-content">
                        <h4>Công dụng của {{ $product->ProductName }} ?</h4>
                        <p>{{ $product->uses }}</p>
                    </div>
                    <div id="tab03" class="tab-content">
                        <h4>Cách dùng {{ $product->ProductName }} ?</h4>
                        <p>{{ $product->howToUse }}</p>
                        <!-- <h4>Đối tượng sử dụng</h4>
                        <p>{{ $product->User }}</p> -->
                    </div>
                    <div id="tab04" class="tab-content">
                        <h4>Tác dụng phụ</h4>
                        <p>{{ $product->sideEffects }}</p>
                        <!-- <h4>Lưu ý:</h4>
                        <p>
                            {{ $product->Notes }}
                        </p> -->
                    </div>
                </div>
            </div>
        </div>


        <!--========================================
        related products
        ===========================================-->

        <div class="container">
            <div class="xv-featured pt-25 ">
                <header class="sec-heading text-center">
                    <div class="category-wrap style">
                        <span class="categorise"><i class="fa fa-bars"></i>Danh mục sản phẩm<i class="fa style fa-caret-down"></i></span>
                        <ul class="cat-dropDown">
                            <li><a href="#">Dinh dưỡng</a></li>
                            <li><a href="#">Vitamin & Khoáng chất</a></li>
                            <li><a href="#">Sức khoẻ tim mạch</a></li>
                            <li><a href="#">Tăng sức đề kháng, miễn dịch</a></li>
                            <li><a href="#">Hỗ trợ tiêu hóa</a></li>
                    </div>
                    <h2><span>SẢN PHẨM LIÊN QUAN</span></h2>
                    <span>Tháng 10 - 2023</span>
                </header><!--header-->
                <div class="xv-product-slides mt-25 mb-25">
                    <div class="owl-carousel slider_controls1" data-dots="false" data-prev="fa fa-angle-left" data-next="fa fa-angle-right" data-slides="4" data-slides-md="2" data-slides-sm="1" data-margin="24" data-loop="true" data-nav="true">
                        <div class="xv-product style shadow-around">
                            <figure>
                                <a href="#"><img class="xv-superimage" src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg" alt="" /></a>
                                <figcaption>
                                    <ul>
                                        <li><a data-qv-tab="#qvt-wishlist" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a data-qv-tab="#qvt-compare" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i class="fa fa-expand"></i></a></li>
                                    </ul>
                                </figcaption>
                            </figure><!--figure-->
                            <div class="xv-product-content">
                                <h3><a href="detail1.html">Bông tẩy trang Pharmacity Cotton Puffs (Hộp 90 miếng) - New</a></h3>
                                <div class="color-opt">
                                    <p>Bông tẩy trang được làm từ 100% cotton tự nhiên mang lại cảm giác mềm mại và mịn màng khi sử dụng...</p>
                                </div>

                                <span class="xv-price">250.000 VNĐ</span>
                                <a data-qv-tab="#qvt-cart" href="#" class="product-buy flytoQuickView">MUA</a>
                            </div>
                        </div><!--xv-product-->
                        <div class="xv-product style shadow-around">
                            <figure>
                                <a href="#"><img class="xv-superimage" src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg" alt="" /></a>
                                <figcaption>
                                    <ul>
                                        <li><a data-qv-tab="#qvt-wishlist" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a data-qv-tab="#qvt-compare" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i class="fa fa-expand"></i></a></li>
                                    </ul>
                                </figcaption>
                            </figure><!--figure-->
                            <div class="xv-product-content">
                                <h3><a href="detail1.html">Bông tẩy trang Pharmacity Cotton Puffs (Hộp 90 miếng) - New</a></h3>
                                <div class="color-opt">
                                    <p>Bông tẩy trang được làm từ 100% cotton tự nhiên mang lại cảm giác mềm mại và mịn màng khi sử dụng...</p>
                                </div>

                                <span class="xv-price">250.000 VNĐ</span>
                                <a data-qv-tab="#qvt-cart" href="#" class="product-buy flytoQuickView">MUA</a>
                            </div>
                        </div><!--xv-product-->
                        <div class="xv-product style shadow-around">
                            <figure>
                                <a href="#"><img class="xv-superimage" src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg" alt="" /></a>
                                <figcaption>
                                    <ul>
                                        <li><a data-qv-tab="#qvt-wishlist" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a data-qv-tab="#qvt-compare" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i class="fa fa-expand"></i></a></li>
                                    </ul>
                                </figcaption>
                            </figure><!--figure-->
                            <div class="xv-product-content">
                                <h3><a href="detail1.html">Bông tẩy trang Pharmacity Cotton Puffs (Hộp 90 miếng) - New</a></h3>
                                <div class="color-opt">
                                    <p>Bông tẩy trang được làm từ 100% cotton tự nhiên mang lại cảm giác mềm mại và mịn màng khi sử dụng...</p>
                                </div>

                                <span class="xv-price">250.000 VNĐ</span>
                                <a data-qv-tab="#qvt-cart" href="#" class="product-buy flytoQuickView">MUA</a>
                            </div>
                        </div><!--xv-product-->
                        <div class="xv-product style shadow-around">
                            <figure>
                                <a href="#"><img class="xv-superimage" src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg" alt="" /></a>
                                <figcaption>
                                    <ul>
                                        <li><a data-qv-tab="#qvt-wishlist" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a data-qv-tab="#qvt-compare" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i class="fa fa-expand"></i></a></li>
                                    </ul>
                                </figcaption>
                            </figure><!--figure-->
                            <div class="xv-product-content">
                                <h3><a href="detail1.html">Bông tẩy trang Pharmacity Cotton Puffs (Hộp 90 miếng) - New</a></h3>
                                <div class="color-opt">
                                    <p>Bông tẩy trang được làm từ 100% cotton tự nhiên mang lại cảm giác mềm mại và mịn màng khi sử dụng...</p>
                                </div>

                                <span class="xv-price">250.000 VNĐ</span>
                                <a data-qv-tab="#qvt-cart" href="#" class="product-buy flytoQuickView">MUA</a>
                            </div>
                        </div><!--xv-product-->
                        <div class="xv-product style shadow-around">
                            <figure>
                                <a href="#"><img class="xv-superimage" src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg" alt="" /></a>
                                <figcaption>
                                    <ul>
                                        <li><a data-qv-tab="#qvt-wishlist" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a data-qv-tab="#qvt-compare" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i class="fa fa-expand"></i></a></li>
                                    </ul>
                                </figcaption>
                            </figure><!--figure-->
                            <div class="xv-product-content">
                                <h3><a href="detail1.html">Bông tẩy trang Pharmacity Cotton Puffs (Hộp 90 miếng) - New</a></h3>
                                <div class="color-opt">
                                    <p>Bông tẩy trang được làm từ 100% cotton tự nhiên mang lại cảm giác mềm mại và mịn màng khi sử dụng...</p>
                                </div>

                                <span class="xv-price">250.000 VNĐ</span>
                                <a data-qv-tab="#qvt-cart" href="#" class="product-buy flytoQuickView">MUA</a>
                            </div>
                        </div><!--xv-product-->
                        <div class="xv-product style shadow-around">
                            <figure>
                                <a href="#"><img class="xv-superimage" src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg" alt="" /></a>
                                <figcaption>
                                    <ul>
                                        <li><a data-qv-tab="#qvt-wishlist" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a data-qv-tab="#qvt-compare" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i class="fa fa-expand"></i></a></li>
                                    </ul>
                                </figcaption>
                            </figure><!--figure-->
                            <div class="xv-product-content">
                                <h3><a href="detail1.html">Bông tẩy trang Pharmacity Cotton Puffs (Hộp 90 miếng) - New</a></h3>
                                <div class="color-opt">
                                    <p>Bông tẩy trang được làm từ 100% cotton tự nhiên mang lại cảm giác mềm mại và mịn màng khi sử dụng...</p>
                                </div>

                                <span class="xv-price">250.000 VNĐ</span>
                                <a data-qv-tab="#qvt-cart" href="#" class="product-buy flytoQuickView">MUA</a>
                            </div>
                        </div><!--xv-product-->
                        <div class="xv-product style shadow-around">
                            <figure>
                                <a href="#"><img class="xv-superimage" src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg" alt="" /></a>
                                <figcaption>
                                    <ul>
                                        <li><a data-qv-tab="#qvt-wishlist" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a data-qv-tab="#qvt-compare" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i class="fa fa-expand"></i></a></li>
                                    </ul>
                                </figcaption>
                            </figure><!--figure-->
                            <div class="xv-product-content">
                                <h3><a href="detail1.html">Bông tẩy trang Pharmacity Cotton Puffs (Hộp 90 miếng) - New</a></h3>
                                <div class="color-opt">
                                    <p>Bông tẩy trang được làm từ 100% cotton tự nhiên mang lại cảm giác mềm mại và mịn màng khi sử dụng...</p>
                                </div>

                                <span class="xv-price">250.000 VNĐ</span>
                                <a data-qv-tab="#qvt-cart" href="#" class="product-buy flytoQuickView">MUA</a>
                            </div>
                        </div><!--xv-product-->
                        <div class="xv-product style shadow-around">
                            <figure>
                                <a href="#"><img class="xv-superimage" src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg" alt="" /></a>
                                <figcaption>
                                    <ul>
                                        <li><a data-qv-tab="#qvt-wishlist" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a data-qv-tab="#qvt-compare" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="btn-cart btn-square btn-blue" href="#"><i class="fa fa-expand"></i></a></li>
                                    </ul>
                                </figcaption>
                            </figure><!--figure-->
                            <div class="xv-product-content">
                                <h3><a href="detail1.html">Bông tẩy trang Pharmacity Cotton Puffs (Hộp 90 miếng) - New</a></h3>
                                <div class="color-opt">
                                    <p>Bông tẩy trang được làm từ 100% cotton tự nhiên mang lại cảm giác mềm mại và mịn màng khi sử dụng...</p>
                                </div>

                                <span class="xv-price">250.000 VNĐ</span>
                                <a data-qv-tab="#qvt-cart" href="#" class="product-buy flytoQuickView">MUA</a>
                            </div>
                        </div><!--xv-product-->
                    </div><!--owl carousel-->
                </div>
            </div><!--xv-featured-->
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

</main>

<script>
    document.getElementById('addToCartButton').addEventListener('click', function() {
        // Lấy giá trị từ trường "quantity"
        var quantity = document.getElementById('quantity').value;

        if (quantity !== '' && quantity > 0) {
            var form = document.getElementById('addToCartForm');

            // Thêm giá trị "quantity" vào biểu mẫu
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", "quantity");
            hiddenField.setAttribute("value", quantity);
            form.appendChild(hiddenField);

            // Gửi biểu mẫu
            form.submit();
        } else if(quantity <= 0) {
            alert('Vui lòng nhập số lượng lớn hơn 0.');
        }
    });
</script>


@endsection