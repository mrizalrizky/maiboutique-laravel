@extends('layouts.app')

@section('title', 'Update Password')

@section('content')
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Update your password</p>
                    <h1>Update Password</h1>
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
                    <h2>Update Password</h2>
                </div>
                <div class="contact-form">
                    <form enctype="multipart/form-data" action="{{ route('update-password') }}" method="POST">
                        {{ method_field('PUT') }}
                        @csrf

                        <h6 class="mb-2">Old Password</h6>
                        <p>
                            <input class="@error('old_password') is-invalid @enderror" type="password" placeholder="(5-20 letters)" name="old_password" id="old_password">

                            @error('old_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </p>

                        <h6 class="mb-2">New Password</h6>
                        <p>
                            <input class="@error('new_password') is-invalid @enderror" type="password" placeholder="(5-20 letters)" name="new_password" id="new_password">

                            @error('new_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </p>

                        <a class="boxed-btn" href="{{ route('profile') }}">Back</a>
                        <button type="submit" class="boxed-btn">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
