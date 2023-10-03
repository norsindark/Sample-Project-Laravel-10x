<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8" />
    @yield('title')
    <meta name="description" content="" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta
        name="viewport"
        content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no"
    />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,600"
        rel="stylesheet"
        type="text/css"
    />
    <link
        rel="stylesheet"
        type="text/css"
        href="/Duanmautemplate/assets/css/bootstrap.min.css"
    />
    <link
        rel="stylesheet"
        type="text/css"
        href="/Duanmautemplate/assets/css/font-awesome.min.css"
    />
    <link rel="stylesheet" type="text/css" href="/Duanmautemplate/assets/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="/Duanmautemplate/assets/css/flags.css" />
    <link rel="stylesheet" href="/Duanmautemplate/assets/css/main.css" />
    @yield('css')
</head>
<body>

@include('frontend.components.hearder')

@yield('content')

@include('frontend.components.footer')

<script src="/Duanmautemplate/assets/js/jquery.js"></script>
<script src="/Duanmautemplate/assets/js/ajaxify.min.js"></script>
<script src="/Duanmautemplate/assets/js/jquery.easing-1.3.pack.js"></script>
<script src="/Duanmautemplate/assets/js/jquery.countdown.min.js"></script>
<script src="/Duanmautemplate/assets/js/jquery.waitforimages.js"></script>
<script src="/Duanmautemplate/assets/js/owl.carousel.min.js"></script>
<script src="/Duanmautemplate/assets/js/masonry.pkgd.min.js"></script>
<script src="/Duanmautemplate/assets/js/main.js"></script>
<script src="https://kit.fontawesome.com/6ba9abbc1c.js" crossorigin="anonymous"></script>
@yield('js')
</body>
</html>
</html>
