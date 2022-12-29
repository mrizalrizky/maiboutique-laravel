@extends('layouts.app')

@section('title', 'Login')

@section('content')
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Login to your account</p>
                    <h1>Login</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- Login form -->
<div class="contact-from-section mt-150 mb-150">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="form-title">
                    <h2>Login To Your Account</h2>
                </div>
                <div class="contact-form">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf

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
                            <input class="@error('password') is-invalid @enderror" type="password" placeholder="5-20 characters" name="password" id="password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </p>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <button class="boxed-btn" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
