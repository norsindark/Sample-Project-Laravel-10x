@extends('frontend/layouts.master')

@section('title')
    <title>Blog page</title>
@endsection

@section('content')
    <!--=======Page Content Area=========-->
    <main id="pageContentArea">
        <header class="page-head text-center">
            <div class="blog-main-slider" style="background-image: radial-gradient(circle, #7ca3dc, #1e71de);">
                <div class="overlay"></div>
                <div class="container">
                    <h2>THANH TOÁN</h2>
                    <p>Hiện thị các thông tin thanh toán.</p>
                </div>
            </div>
        </header>
        <div class="page-contentArea pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <aside class="sidebar">
                            <section class="widget widget-category pb-30">
                                <header>
                                    <h3>Tiến trình thanh toán</h3>
                                </header><!--Widget header-->
                                <div class="widget-content">
                                    <ul>
                                        <li class="parent"><a href="#">Thông tin Người đặt</a>
                                            <ul>
                                                <li><a href="#">Họ và tên</a></li>
                                                <li><a href="#">Số điện thoại</a></li>
                                                <li><a href="#">Email</a></li>
                                            </ul>
                                        </li>
                                        <li class="parent"><a href="#">Địa chỉ nhận hàng</a>
                                            <ul>
                                                <li><a href="#">Họ và tên người nhận</a></li>
                                                <li><a href="#">Số điện thoại</a></li>
                                                <li><a href="#">Nhập địa chỉ cụ thế</a></li>
                                            </ul>
                                        </li>
                                        <li class="parent"><a href="#">Phương thức thanh toán</a>
                                            <ul>
                                                <li><a href="#">Thanh toán tiền mặt khi nhận hàng</a></li>
                                                <li><a href="#">Thanh toán bằng thẻ ATM nội địa (Qua VNPay)</a></li>
                                                <li><a href="#">Thanh toán bằng thẻ quốc tế Visa, Master, JCB</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div><!--widget-content-->
                            </section><!--widget-->
                        </aside><!--aside-->
                    </div><!--sidebar Column-->
                    <div class="col-xs-12 col-sm-8 col-md-9">
                        <form class="checkout-form">
                            <div class="accordian-wrapper">
                                <a href="#" class="accordian-trigger">
                                    1 - ĐĂNG NHẬP ĐỂ THANH TOÁN
                                    <i class="fa fa-angle-down fa-2x"></i>
                                </a>
                                <div class="accordian-pane active">

                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <label>Thanh toán với tư cách là khách hoặc đăng ký</label>
                                            <label>Đăng ký để thuận tiện trong tương lai:</label>
                                            <label><input type="radio">Thanh toán với tư cách là khách</label>
                                            <label><input type="radio">Đăng ký</label>
                                            <label>Đăng ký và tiết kiệm thời gian!</label>
                                            <ul>
                                                <li><label>Thanh toán nhanh chóng và dễ dàng</label></li>
                                                <li><label>Dễ dàng truy cập vào lịch sử và trạng thái đơn hàng của bạn</label></li>
                                            </ul>
                                            <button class="btn btn-send btn-blue mt-25">Tiếp tục</button>
                                        </div><!--column-->
                                        <div class="col-xs-12 col-md-6">
                                            <label><a href="#">Đăng nhập</a></label>
                                            <label>Đã đăng ký? Vui lòng đăng nhập bên dưới</label>
                                            <label>Địa chỉ email: </label>
                                            <input type="email">
                                            <label>Mật khẩu: </label>
                                            <input type="password">
                                            <button class="btn btn-send btn-pink">ĐĂNG NHẬP</button>
                                            <label><a href="#">Quên mật khẩu?</a></label>
                                        </div><!--column-->
                                    </div><!--row-->
                                </div>
                            </div><!--accordian-wrapper-1-->

                            <div class="accordian-wrapper">
                                <a href="#" class="accordian-trigger">
                                    2 - THÔNG TIN NGƯỜI ĐẶT
                                    <i class="fa fa-angle-down fa-2x"></i>
                                </a>
                                <div class="accordian-pane">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <label><a href="#">Nhập thông tin người đặt hàng</a></label>
                                            <label>Họ và tên: </label>
                                            <input type="name">
                                            <label>Số điện thoại: </label>
                                            <input type="phone">
                                            <label>Email (Không bắt buộc): </label>
                                            <input type="email">
                                            <button class="btn btn-send btn-blue">Tiếp tục</button>
                                        </div><!--column-->
                                    </div><!--row-->
                                </div>
                            </div><!--accordian-wrapper-2-->

                            <div class="accordian-wrapper">
                                <a href="#" class="accordian-trigger">
                                    3 - ĐỊA CHỈ NHẬN HÀNG
                                    <i class="fa fa-angle-down fa-2x"></i>
                                </a>
                                <div class="accordian-pane">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <label><a href="#">Nhập địa chỉ nhận hàng</a></label>
                                            <label>Họ và tên người nhận:</label>
                                            <input type="nameget">
                                            <label>Số điện thoại:</label>
                                            <input type="phoneget">
                                            <label>Địa chỉ nhận hàng: </label>
                                            <input type="addressget">
                                            <button class="btn btn-send btn-blue">Tiếp tục</button>
                                        </div><!--column-->
                                    </div><!--row-->
                                </div>
                            </div><!--accordian-wrapper-3-->

                            <div class="accordian-wrapper">
                                <a href="#" class="accordian-trigger">
                                    4 - PHƯƠNG THỨC THANH TOÁN
                                    <i class="fa fa-angle-down fa-2x"></i>
                                </a>
                                <div class="accordian-pane">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <label><a href="#">Chọn hình thức thanh toán</a></label>
                                            <label><input type="radio">Thanh toán tiền mặt khi nhận hàng</label>
                                            <label><input type="radio">Thanh toán bằng thẻ ATM nội địa (Qua VNPay)</label>
                                            <label><input type="radio">Thanh toán bằng thẻ quốc tế Visa, Master, JCB</label>
                                            <button class="btn btn-send btn-blue mt-25">Hoàn thành thanh toán</button>
                                        </div><!--column-->
                                        <!--column-->
                                    </div><!--row-->
                                </div>
                            </div><!--accordian-wrapper-4-->
                        </form><!--checkout-form-->
                    </div><!--conten Coloumn-->
                </div><!--Main row-->
            </div><!--container-->
        </div><!--page-contentArea-->
    </main>
@endsection
