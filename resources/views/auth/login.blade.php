<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Proyojone.xyz " name="description" />
        <meta content="Mohammad Hasibul Hasan" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.min.css" rel="stylesheet') }}" type="text/css" />

        {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    </head>

    <body class="authentication-bg authentication-bg-pattern d-flex align-items-center">

        <div class="home-btn d-none d-sm-block">
            {{-- <a href="index.html"><i class="fas fa-home h2 text-white"></i></a> --}}
        </div>

        <div class="account-pages w-100 mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="card-body p-4">

                                <div class="text-center mb-4">
                                    <a href="#">
                                        <span>
                                            {{-- <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="28"> --}}
                                        </span>
                                    </a>
                                </div>

                                <form method="POST" action="{{ route('login') }}" class="pt-2">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <label for="email">Email address</label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="Enter your email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="form-group mb-3">
                                        @if (Route::has('password.request'))
                                            <a class="text-muted float-right" href="{{ route('password.request') }}">
                                                <small>{{ __('Forgot Your Password?') }}</small>
                                            </a>
                                        @endif
                                        {{-- <a href="#" class="text-muted float-right"><small>Forgot your password?</small></a> --}}
                                        <label for="password">Password</label>
                                        <input class="form-control @error('password') is-invalid @enderror" type="password" required id="password" placeholder="Enter your password" name="password" autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                        <label class="custom-control-label" for="checkbox-signin"> {{ __('Remember Me') }}</label>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-success btn-block" type="submit"> Log In </button>
                                    </div>

                                </form>

                                <div class="row mt-3">
                                    <div class="col-12 text-center">
                                        <p class="text-muted mb-0">Don't have an account? <a href="{{ route('register') }}" class="text-dark ml-1"><b>Sign Up</b></a></p>
                                    </div> <!-- end col -->
                                </div>
                                <!-- end row -->

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.min.js') }}"></script>

    </body>
</html>
