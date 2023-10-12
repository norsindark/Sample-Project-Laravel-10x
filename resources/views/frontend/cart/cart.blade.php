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
    <div class="blog-main-slider color-white text-center" style="background-image: radial-gradient(circle, #7ca3dc, #1e71de);">
        <div class="overlay"></div>
        <div class="container">
            <h2>GIỎ HÀNG</h2>
            <p>Hiển thị các sản phẩm đã thêm vào giỏ hàng.</p>
        </div>
    </div>
    <!--========================================
        cart content
        ===========================================-->

    <div class="container">
        <div class="xv-cart pt-60">
            <div class="xv-cart-top pb-45">
                <div class="table-responsive cart-cal text-center">
                    <table class="table">
                        <thead>
                            <tr class="table-head">
                                <th>HÌNH ẢNH</th>
                                <th>MÔ TẢ</th>
                                <th>SỐ LƯỢNG</th>
                                <th>ĐƠN GIÁ</th>
                                <th>GIÁ TIỀN</th>
                                <th>HOẠT ĐỘNG</th>
                            </tr>
                        </thead>
                        <tbody class="shadow-around">
                            @foreach($cartItems as $item)
                            @foreach ($products as $product)
                            @if($item->product_id = $product->ProductId)
                            <tr class="table-body">
                                <td>
                                    <figure>
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
                                    </figure>
                                </td>
                                <td>
                                    <div class="cart-wrappper text-left">
                                        <h6>{{ $product['ProductName'] }}</h6>
                                        <p><span>Mô tả:</span>: {{ $product['Description'] }}</p>
                                        <!-- <p><span>Nhà sản xuất:</span>: {{ $item['manufacturer'] }}</p>-->
                                        <p><span>Mã sản phẩm</span>: {{ $product['Id_Product'] }}</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity-control">
                                        <span class="btn-cart btn-square btn-plus btn-qty"><i class="fa fa-plus"></i></span>
                                        <input type="text" value="{{ $item['quantity'] }}" data-min="1" data-minalert="Minimum limit reached" data-max="5" data-maxalert="Maximum limit reached" data-invalid="Enter valid quantity">
                                        <span class="btn-cart btn-square btn-minus btn-qty"><i class="fa fa-minus"></i></span>
                                    </div>
                                </td>
                                <td><span class="cart-price fixsizecart">{{ $item['price'] }} VNĐ</span></td>
                                <!-- <td><span class="cart-price fixsizecart">{{ $item['subtotal'] }} VNĐ</span></td> -->
                                <td>
                                    <ul class="cart-action">
                                        <li><a href="#" class="btn-cart btn-square style"><i class="fa fa-repeat"></i></a></li>
                                        <li><a href="#" class="btn-cart btn-square btn-pink"><i class="fa fa-cog"></i></a></li>
                                        <li><a href="#" class="btn-cart btn-square btn-blue"><i class="fa fa-trash-o"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="xv-accordian pt-15 pb-55">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-md-offset-1">


                        <div class="accordian-wrapper style">
                            <a href="#" class="accordian-trigger">
                                <i class="fa fa-caret-right"></i>
                                Áp dụng mã giảm giá
                            </a>
                            <div class="accordian-pane">
                                <div class="accordian-form text-left">

                                    <div class="accordian-form-wrap">
                                        <label>Mã giảm giá của bạn</label>
                                        <input type="text">
                                    </div>
                                    <div class="accordian-form-button">
                                        <button class="btn btn-accordian btn-blue">Áp dụng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <table class="table">
                            <tr class="Sub-Total">
                                <th>TỔNG GIÁ</th>
                                <td>{{$totalPrice}} VNĐ</td>
                            </tr>

                            <tr class="Promotion-Discount">
                                <th>KHUYẾN MÃI</th>
                                <td>0 VNĐ</td>
                            </tr>
                            <tr class="VAT">
                                <th>VAT</th>
                                <td>0 VNĐ</td>
                            </tr>
                            <tr class="Total">
                                <th>TỔNG TIỀN</th>
                                <td>{{$totalPrice}} VNĐ</td>
                            </tr>
                            <tr class="Continue-Shopping">
                                <th> <a href="#">Tiếp tục mua hàng</a></th>
                                <td><a href="#" class="btn btn-send btn-pink">THANH TOÁN</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <div class="container">
        <div class="xv-cart pt-60">
            <div class="xv-cart-top pb-45">
                <div class="table-responsive cart-cal  text-center">
                    <table class="table">
                        <thead>
                            <tr class="table-head">
                                <th>HÌNH ẢNH</th>
                                <th>MÔ TẢ</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>SỐ LƯỢNG</th>
                                <th>ĐƠN GIÁ</th>
                                <th>GIÁ TIỀN</th>
                                <th>HOẠT ĐỘNG</th>
                            </tr>
                        </thead>
                        <tbody class="shadow-around">
                            <tr class="table-body">
                                <td>
                                    <figure><img class="setwidtandheight" src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg" alt="" /></figure>
                                </td>
                                <td>
                                    <div class="cart-wrappper text-left">
                                        <h6>Bông tẩy trang Pharmacity Cotton Puffs (Hộp 90 miếng) - New</h6>
                                        <p><span>Mô tả:</span>: Elevit bổ sung acid folic, sắt và các vitamin, khoáng chất cần thiết cho...</p>
                                        <p><span>Nhà sản xuất:</span>: DELPHARM GAILLARD</p>
                                        <p><span>Mã sản phẩm</span>: CwT4a</p>
                                    </div>
                                </td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>
                                    <div class="quantity-control">
                                        <span class="btn-cart btn-square btn-plus btn-qty"><i class="fa fa-plus"></i></span>
                                        <input type="text" value="2" data-min="1" data-minalert="Minimum limit reached" data-max="5" data-maxalert="Maximum limit reached" data-invalid="Enter valid quantity">
                                        <span class="btn-cart btn-square btn-minus btn-qty"><i class="fa fa-minus"></i></span>
                                    </div>
                                </td>
                                <td><span class="cart-price fixsizecart">250.000 VNĐ</span></td>
                                <td><span class="cart-price fixsizecart">500.000 VNĐ</span></td>
                                <td>
                                    <ul class="cart-action">
                                        <li><a href="#" class="btn-cart btn-square style"><i class="fa fa-repeat"></i></a></li>
                                        <li><a href="#" class="btn-cart btn-square btn-pink"><i class="fa fa-cog"></i></a></li>
                                        <li><a href="#" class="btn-cart btn-square btn-blue"><i class="fa fa-trash-o"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>

                            </tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>



            <div class="xv-accordian pt-15 pb-55">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-md-offset-1">


                        <div class="accordian-wrapper style">
                            <a href="#" class="accordian-trigger">
                                <i class="fa fa-caret-right"></i>
                                Áp dụng mã giảm giá
                            </a>
                            <div class="accordian-pane">
                                <div class="accordian-form text-left">

                                    <div class="accordian-form-wrap">
                                        <label>Mã giảm giá của bạn</label>
                                        <input type="text">
                                    </div>
                                    <div class="accordian-form-button">
                                        <button class="btn btn-accordian btn-blue">Áp dụng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <table class="table">
                            <tr class="Sub-Total">
                                <th>TỔNG GIÁ</th>
                                <td>1.000.000 VNĐ</td>
                            </tr>

                            <tr class="Promotion-Discount">
                                <th>KHUYẾN MÃI</th>
                                <td>0 VNĐ</td>
                            </tr>
                            <tr class="VAT">
                                <th>VAT</th>
                                <td>0 VNĐ</td>
                            </tr>
                            <tr class="Total">
                                <th>TỔNG TIỀN</th>
                                <td>1.000.000 VNĐ</td>
                            </tr>
                            <tr class="Continue-Shopping">
                                <th> <a href="#">Tiếp tục mua hàng</a></th>
                                <td><a href="#" class="btn btn-send btn-pink">THANH TOÁN</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!--xv-cart-->
</main>
@endsection