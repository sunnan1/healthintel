@extends('main')
@section('header-content')
    @yield('header-content')
@endsection
@section('content')
<div class="wrapper">
    <!-- ========== Topbar Start ========== -->
        @include('layout.top-navbar')
    <!-- ========== Topbar End ========== -->
    <!-- ========== Left Sidebar Start ========== -->
        @include('layout.side-navbar')
    <!-- ========== Left Sidebar End ========== -->
    <div class="content-page">
        @yield('main-content')
        @include('layout.footer')
    </div>
</div>
@yield('sidebar-content')
@endsection
@section('script')
    @yield('script')
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/vendor/select2/js/select2.min.js"></script>
@endsection
