@extends('main')
@section('content')
<div class="position-absolute start-0 end-0 start-0 bottom-0 w-100 h-100">
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 1920 1024">
        <g mask="url(&quot;#SvgjsMask1046&quot;)" fill="none">
            <rect width="1920" height="1024" x="0" y="0" fill="url(#SvgjsLinearGradient1047)"></rect>
            <path d="M1920 0L1864.16 0L1920 132.5z" fill="rgba(255, 255, 255, .1)"></path>
            <path d="M1864.16 0L1920 132.5L1920 298.4L1038.6100000000001 0z" fill="rgba(255, 255, 255, .075)"></path>
            <path d="M1038.6100000000001 0L1920 298.4L1920 379.53999999999996L857.7000000000002 0z" fill="rgba(255, 255, 255, .05)"></path>
            <path d="M857.7 0L1920 379.53999999999996L1920 678.01L514.57 0z" fill="rgba(255, 255, 255, .025)"></path>
            <path d="M0 1024L939.18 1024L0 780.91z" fill="rgba(0, 0, 0, .1)"></path>
            <path d="M0 780.91L939.18 1024L1259.96 1024L0 585.71z" fill="rgba(0, 0, 0, .075)"></path>
            <path d="M0 585.71L1259.96 1024L1426.79 1024L0 408.19000000000005z" fill="rgba(0, 0, 0, .05)"></path>
            <path d="M0 408.19000000000005L1426.79 1024L1519.6599999999999 1024L0 404.09000000000003z" fill="rgba(0, 0, 0, .025)"></path>
        </g>
        <defs>
            <mask id="SvgjsMask1046">
                <rect width="1920" height="1024" fill="#ffffff"></rect>
            </mask>
            <linearGradient x1="11.67%" y1="-21.87%" x2="88.33%" y2="121.88%" gradientUnits="userSpaceOnUse" id="SvgjsLinearGradient1047">
                <stop stop-color="#0e2a47" offset="0"></stop>
                <stop stop-color="#00459e" offset="1"></stop>
            </linearGradient>
        </defs>
    </svg>
</div>
<div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-4 col-lg-5">
                <div class="card">

                    <!-- Logo -->
                    <div class="card-header pt-4 text-center">
                        <div class="auth-brand mb-0">
                            <a href="index.html" class="logo-dark">
                                <span><img src="assets/images/logo-dark.png" alt="dark logo" height="45"></span>
                            </a>
                            <a href="index.html" class="logo-light">
                                <span><img src="assets/images/logo.png" alt="logo" height="45"></span>
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="text-center w-75 m-auto">
                            <h4 class="text-dark-50 text-center pb-0">Sign In</h4>
                            <p class="text-muted mb-4">Hospital Management Information System</p>
                        </div>
                        @if (session()->has('error'))
                        <div class="alert alert-danger" role="alert">
                            <i class="ri-close-circle-line me-1 align-middle fs-16"></i>
                            {{ session()->get('error') }}
                        </div>    
                        @endif
                        <form action="{{ url('login')}}" class="needs-validation" method="POST" novalidate >
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label for="password" class="form-label">Organization</label>
                                <div class="input-group input-group-merge">
                                    <select name="organization" id="organization" class="form-control" required>
                                    <option value="" data-domain="" selected >-- Select Organization --</option>
                                    @foreach ($organizations as $organization)
                                        <option value="{{ $organization->id }}" data-domain="{{ $organization->email }}">{{$organization->name}}</option>    
                                    @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select organization
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Segment</label>
                                <div class="input-group input-group-merge">
                                    <select name="segments" id="segments" class="form-control" required>
                                        <option value="" selected>-- Select Segment --</option>
                                        @foreach ($segments as $segment)
                                        <option value="{{ $segment->id }}">{{$segment->name}}</option>    
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select segment
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Username</label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" name="username" type="text" id="emailaddress" required="" placeholder="Enter your username" required>
                                    <div class="input-group-text">
                                        <span class="email"></span>
                                    </div>
                                    <div class="invalid-feedback">
                                        Please enter username
                                    </div>
                                </div>
                            </div>

                            <input name="computerName" type="hidden" value="{{gethostname()}}">
                            <input class="email" name="email" type="hidden" value="">

                            <div class="mb-3">
                                <a href="auth-recoverpw.html" class="text-muted float-end fs-12">Forgot your password?</a>
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                    <div class="invalid-feedback">
                                        Please enter password
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                    <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>
                            <div class="mb-3 mb-0 text-center">
                                <button class="btn btn-primary" type="submit"> Log In </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
@endsection
@section('script')
    <script>
        $(function() {
            $("#organization").on('change' , function() {
                $('.email').html(($(this).find('option:selected')).attr('data-domain')); 
                $('.email').val(($(this).find('option:selected')).attr('data-domain')); 
            });
            $("#organization").trigger('change');
        });
    </script>
@endsection


