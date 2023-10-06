<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link href="{{ asset('dashboard/css/styles.css') }}" rel="stylesheet">

    @yield('title')
</head>
<body>

@include('dashboard.components.sildebar')
<section id="content">
    @include('dashboard.components.search')
@yield('content')
</section>

<script>"{{ asset('dashboard/js/script.css') }}"</script>
</body>
</html>
</html>

