<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HealthIntel</title>
</head>
@include('layout.files-header')
<body class="authentication-bg position-relative">
    @include('layout.header')
    @yield('head')
    @yield('content')
</body>
@yield('footer')
@include('layout.files-footer')
@yield('script')
</html>