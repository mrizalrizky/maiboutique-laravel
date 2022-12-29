@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Manage your profile</p>
                    <h1>My Profile</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- contact form -->
<div class="contact-from-section mt-150 mb-150">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="contact-form-wrap mb-3">
                    <div class="contact-form-box">
                        <h4><i class="fas fa-user"></i> Username</h4>
                        <p>{{ $user->username}}</p>
                    </div>
                    <div class="contact-form-box">
                        <h4><i class="fas fa-user"></i> Role</h4>
                        <p>{{ $user->roles->name }}</p>
                    </div>
                    <div class="contact-form-box">
                        <h4><i class="fas fa-location-arrow"></i> Address</h4>
                        <p>{{ $user->address}}</p>
                    </div>
                    <div class="contact-form-box">
                        <h4><i class="fas fa-address-book"></i> Contact</h4>
                        <p>Phone: {{ $user->phone }} <br> Email: {{ $user->email}}</p>
                    </div>
                </div>
                @if (Auth::user()->roles->name == 'Member')
                <a class="boxed-btn" href="/profile/settings/update">Edit Profile</a>
                @endif
                <a class="boxed-btn" href="/profile/settings/password">Change Password</a>
            </div>
        </div>
    </div>
</div>
<!-- end contact form -->
@endsection
