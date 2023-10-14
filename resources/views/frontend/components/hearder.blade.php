<!--========================================
Quick view
U
===========================================-->
@include('frontend.components.login')
<!--========================================
Header
===========================================-->
<header class="doc-header header-light">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-5">
                    <ul class="top-nav">
                        <li><a href="#">BẢO VỆ NGƯỜI MUA</a></li>
                        <li class="parent">
                            <a href="#">HỖ TRỢ</a>
                            <ul>
                                <li><a href="#">Trung tâm hỗ trợ</a></li>
                                <li><a href="#">SĐT: (+84)123-456-789 </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-7">
                    <ul class="top-nav text-right">
                        <li>
                            <a href="#"><i class="fa fa-exchange"></i>SO SÁNH SẢN PHẨM</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-heart"></i>DANH SÁCH YÊU THÍCH</a>
                        </li>
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                <i class="fa-solid fa-user" style="margin-right: 5px;"></i>
                                {{ __('ĐĂNG NHẬP') }}
                            </a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                                <i class="fa-solid fa-user-plus" style="margin-right: 5px;"></i>
                                {{ __('ĐĂNG KÍ') }}
                            </a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a style="text-transform: uppercase" id="navbarDropdown" class="nav-link dropdown-toggle" href="{{route('manageruser')}}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa-solid fa-bars-progress"></i>
                                {{--{{ __('QUẢN LÍ TÀI KHOẢN') }}--}}
                                {{ Auth::user()->name }}
                            </a>

                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                {{ __('ĐĂNG XUẤT') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--top header-->
    <div class="header-bottom">
        <div class="container">
            <a class="logo" href="{{ route('home') }}">
                <img src="/Duanmautemplate/assets/img/logo/logo.png" alt="" />
            </a>
            <nav>
                <ul class="main_menu">
                    <li class="home-dropdown"><a href="{{ route('home') }}">TRANG CHỦ</a></li>
                    <li class="home-dropdown">
                        <a href="#">TRANG HIỂN THỊ</a>
                        <ul>
                            <li><a href="{{ route('tin-tuc') }}">TIN TỨC</a></li>
                            <!-- <li><a href="#">CHI TIẾT SẢN PHẨM</a></li> -->
                            <li><a href="{{ route('danh-muc') }}">DANH MỤC</a></li>
                            <li><a href="{{ route('gio-hang') }}">GIỎ HÀNG</a></li>
                            <li><a href="{{ route('thanh-toan') }}">THANH TOÁN</a></li>
                        </ul>
                    </li>
                    <li><a href="#">BÁN CHẠY NHẤT</a></li>
                    <li><a href="#">THƯƠNG HIỆU NỔI BẬT</a></li>
                </ul>
                <a href="#" class="openCart"></a>
                <div class="table-responsive cart-calculations text-center">
                    @auth
                    <table class="table">
                        <tbody class="shadow-around">
                            @foreach ($cartItems as $cartItem)
                            @foreach ($products as $product)
                            @if($cartItem->product_id == $product->ProductId)
                            <tr class="table-body">
                                <td>
                                    <figure>
                                        @php
                                        $firstImageDisplayed = false;
                                        @endphp
                                        @foreach ($product_images as $product_image)
                                        @if ($product_image->ProductId == $product->ProductId && !$firstImageDisplayed)
                                        <a href="#"><img src="{{ asset('storage/' . $product_image->path) }}" alt="Product Image" width="50px"></a>
                                        @php
                                        $firstImageDisplayed = true;
                                        @endphp
                                        @endif
                                        @endforeach
                                    </figure>
                                </td>
                                <td>
                                    <div class="cart-wrappper text-left">
                                        <h6>{{ $product->ProductName }}</h6>
                                        <p><span>Mã sản phẩm</span>: {{ $product->Id_Product }}</p>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" value="{{ $cartItem->quantity }}" readonly />
                                </td>
                                <td>
                                    <span class="cart-content">Đơn giá:</span>
                                    <span class="cart-price">{{ number_format($product->Price) }}VNĐ</span>
                                </td>
                                <td>
                                    <span class="cart-content">Tổng giá:</span>
                                    <span class="cart-price">{{ number_format($product->Price * $cartItem->quantity) }}VNĐ</span>
                                </td>
                                <!-- <td>
                                    <a class="cart-action" href="#"><i class="fa fa-trash-o"></i></a>
                                </td> -->
                            </tr>
                            @endif
                            @endforeach
                            @endforeach
                            <tr class="table-body style">
                                <td colspan="6" class="fix_td">
                                    <a href="{{ route('gio-hang') }}" class="btn-cart btn-rectangle">Giỏ hàng</a>
                                    <a href="checkout1.html" style="margin-left: 15px" class="btn-cart btn-rectangle">Thanh toán</a>
                                </td>
                                <td colspan="6">
                                    <div>TỔNG CỘNG: <span class="colpink">{{ number_format($totalPrice) }}VNĐ</span></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @endauth
                    @guest
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{ $error }}</li>
                        </ul>
                    </div>
                    @endif
                </div>
            </nav>
        </div>
    </div>
    <!--header Bottom-->
</header>
<!--document Header-->
<!--========================================
Search
===========================================-->

<div class="social-search style shadow-around style-wide">
    <div class="container">
        <div class="social">
            <span>Chào mừng đến với...!<br />Phone: (+84)123-456-789</span>
            <ul>
                <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                </li>
            </ul>
            <!--ul-->
        </div>
        <!--social-->
        <div class="search-form">
            <div class="custome-select">
                <b class="fa fa-caret-down"></b>
                <span>DANH MỤC SẢN PHẨM</span>
                <select class="search-cate notranslate" id="search-dropdown-box">
                    @if(!empty($categories))
                    @foreach ($categories as $category)
                    <option value="{{ $category->CategoryId }}">{{ $category->CategoryName }}</option>
                    @endforeach
                    @endif
                </select>
            </div>
            <form action="{{ route('search') }}" method="GET">
                @csrf
                <input type="text" name="search" placeholder="Từ khóa tìm kiếm..." />
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>

    <!--container-->
</div>
<!--social-search-->
<div class="clearfix"></div>
