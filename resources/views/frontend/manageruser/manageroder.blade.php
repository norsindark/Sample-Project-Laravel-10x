@extends('frontend/layouts.master')

@section('title')
    <title>manageruser page</title>
@endsection

@section('content')
    <!--=======Page Content Area=========-->
    @extends('frontend/layouts.master')

    @section('title')
        <title>manageruser page</title>
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
                        <h2>QUẢN LÍ TÀI KHOẢN</h2>
                        <p>Hiển thị thông tin tài khoản và các thông tin khác.</p>
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
                            @include('frontend.manageruser.components.sidebar')
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <header class="sec-heading style text-center">
                                <div class="category-wrap">
                                <span class="categorise" style="font-size: 20px;
    font-weight: 700;">Đơn hàng của bạn</span>
                                </div>
                                <div class="search_addresss">
                                    <input type="text" placeholder="Từ khóa tìm kiếm..." />
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </header>
                            <div class="wrap_informaiton">
                                <table class="table table_layout">
                                    <thead>
                                    <tr>
                                        <th scope="col ">Tất cả</th>
                                        <th scope="col">Đang xử lý</th>
                                        <th scope="col">Đang giao</th>
                                        <th scope="col">Đã giao</th>
                                        <th scope="col">Đã hủy</th>
                                        <th scope="col">Trả hàng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="imgnoproduct_block">
                                </div>
                                <div class="text-center">
                                    <h4>Bạn chưa có đơn hàng nào</h4>
                                    <span>Khám phá thêm sản phẩm tại trang website</span>
                                </div>
                                <button type="button" class="btn btn-primary btn_location">Khám phá ngay</button>

                            </div>
                        </div>
                    </div><!--row-->
                </div><!--product overview-->
            </div><!--container-->

        </main><!--pageContentArea-->

    @endsection


@endsection

