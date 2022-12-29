@extends('layouts.app')

@section('title', 'Edit Cart')

@section('content')

<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Edit your cart</p>
                    <h1>Edit Cart</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- single product -->
<div class="single-product mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="single-product-img">
                    <img src="{{ $product->image }}" alt="">
                </div>
            </div>
            <div class="col-md-7">
                <div class="single-product-content">
                    <h3>{{$product->name}}</h3>
                    <p class="single-product-pricing"><span>Per Pcs</span> Rp. {{ number_format($product->price) }}</p>
                    <p>{{ $product->description}}</p>
                    <div class="single-product-form">
                        <form action="index.html">
                            <input type="number" placeholder="0">
                        </form>
                        <a href="{{ route('index') }}" class="cart-btn">Back</a>
                        <a href="{{ route('cart') }}" class="cart-btn"><i class="fas fa-wrench"></i> Update Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end single product -->
@endsection
