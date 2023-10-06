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
                        <h2>Quản lí số địa chỉ</h2>
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
    font-weight: 700;">Quản lí số địa chỉ</span>
                                </div>

                            </header>
                            <div class="wrap_informaiton">

                                <div class="imgnoaddress_block">
                                </div>
                                <div class="text-center">
                                    <h4>Bạn chưa lưu địa chỉ nào</h4>
                                    <span>Cập nhập địa chỉ để có trãi nghiệm mua hàng nhanh nhất.</span>
                                </div>
                                <button type="button" class="btn btn-primary btn_location">Thêm địa chỉ mới</button>

                            </div>
                        </div>
                    </div><!--row-->
                </div><!--product overview-->
            </div><!--container-->

        </main><!--pageContentArea-->

    @endsection


@endsection


