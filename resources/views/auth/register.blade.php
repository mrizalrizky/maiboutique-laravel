@extends('layouts.app')

@section('title', 'Register')

@section('content')
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Register your account</p>
                    <h1>Register</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- Register form -->
<div class="contact-from-section mt-150 mb-150">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="form-title">
                    <h2>Register New Account</h2>
                </div>
                <div class="contact-form">
                    <form method="POST" action="{{ route('register') }}">
                    @csrf

                        <h6 class="mb-2">Username</h6>
                        <p>
                            <input class="@error('username') is-invalid @enderror" type="text" placeholder="(5-20 letters)" name="username" id="username">

                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </p>

                        <h6 class="mb-2">Email</h6>
                        <p>
                            <input class="@error('email') is-invalid @enderror" type="email" placeholder="Email" name="email" id="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </p>

                        <h6 class="mb-2">Password</h6>
                        <p>
                            <input class="@error('password') is-invalid @enderror" type="password" placeholder="(5-20 letters)" name="password" id="password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </p>

                        <h6 class="mb-2">Phone Number</h6>
                        <p>
                            <input class="@error('phone') is-invalid @enderror" type="tel" placeholder="(10-13 numbers)" name="phone" id="phone">

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </p>

                        <h6 class="mb-2">Address</h6>
                        <p>
                            <input class="@error('address') is-invalid @enderror" type="text" placeholder="(min 5 letters)" name="address" id="address">

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </p>

                        <button class="boxed-btn" type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
