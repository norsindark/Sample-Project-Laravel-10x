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



    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif


    <div class="container">
        <div class="product-overview pt-50 pb-50 fix_pading">
            <div class="row">
                <div class="col-xs-12 col-sm-3 hidden-xs">
                    @include('frontend.manageruser.components.sidebar')
                </div>
                <div class="col-xs-12 col-sm-9">
                    <header class="sec-heading style text-center fix_secheading">
                        <div class="category-wrap" style="top: 2px">
                            <span class="categorise wrap_text-center" style="font-size: 20px; font-weight: 700;">Thông tin cá nhân</span>
                        </div>
                    </header>
                    <div class="wrap_informaiton" style="width: 75%;     margin: 32px 0 0;">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="container">

                            <form class="form_create" style="padding: 40px" method="POST" action="{{ route('update-profile') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Họ và tên</label>
                                    <input class="form-control-width50" type="text" id="name" name="name" value="{{ $user->name }}" >
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control-width50" type="text" id="email" name="email" value="{{ $user->email }}" >
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input class="form-control-width50" type="tel" id="phone" name="phone" value="{{ $user->phone }}" >
                                </div>
                                <div class="form-group">
                                    <label for="password">Mật khẩu</label>
                                    <input class="form-control-width50" type="password" id="password" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="address">Địa chỉ</label>
                                    <input class="form-control-width50" type="text" id="address" name="address" value="{{ $user->address }}" >
                                </div>
                                <button type="submit" class="btn btn-primary btn_location" style="position: relative; top: 25px;right: 275px">Cập nhập thông tin</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

@endsection
