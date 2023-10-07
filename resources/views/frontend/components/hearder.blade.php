<!--========================================
Quick view
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
                        <li class="@if(session('user_logged_in')) topnav-hide @else topnav-show @endif">
                            <a href="#qvt-userrr"><i class="fa fa-user"></i>ĐĂNG NHẬP</a>
                        </li>
                        <li class="@if(session('user_logged_in')) topnav-hide @else topnav-show @endif">
                            <a href="#"><i class="fa fa-lock"></i>ĐĂNG KÍ</a>
                        </li>
                        <li class="@if(session('user_logged_in')) topnav-show @else topnav-hide @endif">
                            <a href="{{route('manageruser')}}"><i class="fa fa-solid fa-bars-progress"></i>QUẢN LÍ TÀI KHOẢN</a>
                        </li>
                        <li class="@if(session('user_logged_in')) topnav-show @else topnav-hide @endif">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-solid fa-right-from-bracket"></i>LOG OUT
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="GET" style="display: none;">
                                @csrf
                            </form>
                        </li>
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
                            <li><a href="{{ route('san-pham') }}">CHI TIẾT SẢN PHẨM</a></li>
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
                    <table class="table">
                        <tbody class="shadow-around">
                            <tr class="table-body">
                                <td>
                                    <figure>
                                        <img style="
                            height: 100px;
                            max-width: 108px;
                            margin: 0 10px;
                          " src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg" alt="" />
                                    </figure>
                                </td>
                                <td>
                                    <div class="cart-wrappper text-left">
                                        <h6>Thuốc trị sốt</h6>
                                        <p><span>Trạng thái</span>: Còn hàng</p>
                                        <p><span>Mã sản phẩm</span>: CwT4a</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity-control">
                                        <span class="btn-cart btn-square btn-plus btn-qty"><i class="fa fa-plus"></i></span>
                                        <input type="text" value="2" data-min="1" data-minalert="Minimum limit reached" data-max="10" data-maxalert="Maximum limit reached" data-invalid="Enter valid quantity" />
                                        <span class="btn-cart btn-square btn-minus btn-qty"><i class="fa fa-minus"></i></span>
                                    </div>
                                </td>
                                <td>
                                    <span class="cart-content">Đơn giá:</span>
                                    <span class="cart-price">50.000VNĐ</span>
                                </td>
                                <td>
                                    <span class="cart-content">Tổng giá:</span>
                                    <span class="cart-price">100.000VNĐ</span>
                                </td>
                                <td>
                                    <a class="cart-action" href="#"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="table-body">
                                <td>
                                    <figure>
                                        <img style="
                            height: 100px;
                            max-width: 108px;
                            margin: 0 10px;
                          " src="/Duanmautemplate/assets/img/product/P25900_1-thumbnail-510x510-70.jpg" alt="" />
                                    </figure>
                                </td>
                                <td>
                                    <div class="cart-wrappper text-left">
                                        <h6>Thuốc trị sốt</h6>
                                        <p><span>Trạng thái</span>: Còn hàng</p>
                                        <p><span>Mã sản phẩm</span>: CwT4a</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity-control">
                                        <span class="btn-cart btn-square btn-plus btn-qty"><i class="fa fa-plus"></i></span>
                                        <input type="text" value="2" data-min="1" data-minalert="Minimum limit reached" data-max="5" data-maxalert="Maximum limit reached" data-invalid="Enter valid quantity" />
                                        <span class="btn-cart btn-square btn-minus btn-qty"><i class="fa fa-minus"></i></span>
                                    </div>
                                </td>
                                <td>
                                    <span class="cart-content">Đơn giá:</span>
                                    <span class="cart-price">50.000VNĐ</span>
                                </td>
                                <td>
                                    <span class="cart-content">Tổng giá:</span>
                                    <span class="cart-price">100.000VNĐ</span>
                                </td>
                                <td>
                                    <a class="cart-action" href="#"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="table-body style">
                                <td></td>
                                <td class="fix_td">
                                    <a href="cart1.html" class="btn-cart btn-rectangle">Giỏ hàng</a>
                                    <a href="checkout1.html" style="margin-left: 15px" class="btn-cart btn-rectangle">Thanh toán</a>
                                </td>
                                <td></td>
                                <td></td>
                                <td class="style">
                                    <div>TỔNG CỘNG:</div>
                                    <span class="colpink">200.000VNĐ</span>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
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
        <form class="search-form">
            <div class="custome-select">
                <b class="fa fa-caret-down"></b>
                <span>DANH MỤC SẢN PHẨM</span>
                <select class="search-cate notranslate" id="search-dropdown-box">
                    <option value="">Danh mục sản phẩm</option>
                    <option value="">Dinh dưỡng</option>
                    <option value="">Vitamin & Khoáng chất</option>
                    <option value="">Sức khoẻ tim mạch</option>
                    <option value="">Tăng sức đề kháng, miễn dịch</option>
                    <option value="">Hỗ trợ tiêu hóa</option>
                    <option value="">Sinh lý - Nội tiết tố</option>
                    <option value="">Chăm sóc da mặt</option>
                </select>
            </div>
            <input type="text" placeholder="Từ khóa tìm kiếm..." />
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        <!--search-form-->
    </div>
    <!--container-->
</div>
<!--social-search-->
<div class="clearfix"></div>