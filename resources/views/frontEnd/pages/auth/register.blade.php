@extends('frontEnd.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/signup.css') }}">
    <!-- Universal Banner Sec Start Here -->
    <section class="universal_banner">
        <div class="container-fluid p-0">
            <div class="banner-content">
                <div class="banner_image">
                    <figure><img src="{{ asset('assets/img/inner-banner.png') }}" class="img-fluid"></figure>
                </div>
                <div class="page-title">
                    <h2 class="title">Sign Up</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Universal Banner Sec End Here -->
    <!--Start Register User-->
    <section class="register-user">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="register-img">
                        <img src="{{ asset('assets/img/auth-img.png') }}" class="img-fluid">
                        <div class="text-on-img text-center text-white">
                            <h3 class="mb-4 font-weight-normal">Welcome to Nutritions24</h3>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore.</p>
                            <div class="get-connected mb-4">
                                <img class="img-fluid border1" src="{{ asset('assets/img/connected-border1.png') }}">
                                <span>Get Connected With</span>
                                <img class="img-fluid border1" src="{{ asset('assets/img/connected-border2.png') }}">
                            </div>
                            <div class="social-icons mb-5">
                                <ul class="row justify-content-center">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid twitter" src="{{ asset('assets/img/twitter-icon.png') }}">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid facebook"
                                                src="{{ asset('assets/img/facebook-icon.png') }}">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid google" src="{{ asset('assets/img/google-icon.png') }}">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="auth-btn text-right">
                        <a href="{{ route('user.login') }}" class="btn light-btn">Sign in</a>
                        <a href="javascript:void(0);" class="btn">Sign up</a>
                    </div>
                    <div class="signup-form">
                        <h2 class="mb-4">Sign Up</h2>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore.</p>
                        <hr>
                        <form action="{{ route('user.create') }}" method="POST">
                            @csrf
                            <div class="row mt-4">
                                <div class="col">
                                    <label for="">First Name</label>
                                    <input type="text" value="{{ old('first_name') }}" name="first_name"
                                        class="form-control @error('first_name') is-invalid @enderror">
                                    @error('first_name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="">Last Name</label>
                                    <input type="text" value="{{ old('last_name') }}" name="last_name"
                                        class="form-control @error('last_name') is-invalid @enderror">
                                    @error('last_name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mt-4">
                                    <label for="">Email Address</label>
                                    <input type="email" value="{{ old('email') }}" name="email"
                                        class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mt-4">
                                    <label for="">Phone Number</label>
                                    <input type="number" value="{{ old('phone') }}" name="phone"
                                        class="form-control @error('phone') is-invalid @enderror">
                                    @error('phone')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col mt-4">
                                    <label for="">Password</label>
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror">
                                    @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col mt-4">
                                    <label for="">Confirm Password</label>
                                    <input type="password" name="password_confirmation"
                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                        id="password_confirmation">
                                    @error('password_confirmation')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mt-5">
                                    <button class="btn w-100" type="submit">Sign up</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
