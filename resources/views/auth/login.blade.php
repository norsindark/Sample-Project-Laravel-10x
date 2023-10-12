<!--  -->

@extends('frontend/layouts.master')

@section('title')
<title>Login</title>
@endsection

@section('content')
<!--=======Page Content Area=========-->

<!--=======Page Content Area=========-->
<main id="pageContentArea">
    <div class="page-head text-center">
        <div class="blog-main-slider" style="background-image: radial-gradient(circle, #7ca3dc, #1e71de);">
            <div class="overlay"></div>
            <div class="container">
                <h2>ĐĂNG NHẬP</h2>
                <p>Hiện thị các thông tin đăng nhập vào hệ thống.</p>
            </div>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    {{--<div class="card-header">{{ __('ĐĂNG NHẬP') }}
                </div>--}}

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end text_lable-content ">{{ __('Vui lòng nhập Email') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end text_lable-content">{{ __('Mật khẩu') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12 offset-md-4">
                                <div class="form-check" style="margin-bottom: 10px;  display: flex; align-items: center">
                                    <input style="width: 16px; height: 16px;margin-right: 5px;" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label " for="remember">
                                        {{ __('Nhớ mật khẩu') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12 offset-md-4">
                                <button type="submit" class=" btn btn-primary">
                                    {{ __('Đăng nhập') }}
                                </button>
                            </div>
                            <div class="col-md-12 offset-md-4">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" style="color:black; padding: 10px 0" href="{{ route('password.request') }}">
                                    {{ __('Quên mật khẩu ?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
<!--pageContentArea-->
@endsection