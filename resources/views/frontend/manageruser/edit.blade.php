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


                    <div class="wrap_informaiton" style="">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                        <div class="container" style="width: 600px; background-color: #ecf0f3; padding: 0 20px">

                            <form class="form_create" method="POST" action="{{ route('update-profile') }}" style="margin-top: 60px;">
                            @csrf
                            <div class="form-group">
                                <label for="username">Họ và tên</label>
                                <input class="form-control" type="text" id="name" name="name" >
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="text" id="email" name="email"  >
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input class="form-control" type="tel" id="phone" name="phone"  >
                            </div>
                            <div class="form-group">
                                <label for="password">Mật khẩu</label>
                                <input class="form-control" type="password" id="password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ</label>
                                <input class="form-control" type="text" id="address" name="address"  >
                            </div>
                            <button type="submit" class="btn btn-primary btn_location" style="margin-bottom: 130px; top: 60px ">Cập nhập thông tin</button>
                        </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

@endsection
