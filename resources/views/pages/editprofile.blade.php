@extends('layouts.app')

@section('title', 'Update Profile')

@section('content')
    <!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Update your profile</p>
                    <h1>Update Profile</h1>
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
                    <h2>Update Profile</h2>
                </div>
                <div class="contact-form">
                    <form enctype="multipart/form-data" action="{{ route('update-profile') }}" method="POST">
                        {{ method_field('PUT') }}
                        @csrf

                        <h6 class="mb-2">Username</span></h6>
                        <p>
                            <input class="@error('username') is-invalid @enderror" type="text" placeholder="{{ $user->username }}" name="username" id="username">

                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </p>

                        <h6 class="mb-2">Email</h6>
                        <p>
                            <input class="@error('email') is-invalid @enderror" type="email" placeholder="{{ $user->email }}" name="email" id="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </p>

                        <h6 class="mb-2">Phone Number</h6>
                        <p>
                            <input class="@error('phone') is-invalid @enderror" type="tel" placeholder="{{ $user->phone }}" name="phone" id="phone">

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </p>

                        <h6 class="mb-2">Address</h6>
                        <p>
                            <input class="@error('address') is-invalid @enderror" type="text" placeholder="{{ $user->address }}" name="address" id="address">

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror</p>

                        <a href="{{ route('profile') }}" class="boxed-btn">Back</a>
                        <button class="boxed-btn" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
