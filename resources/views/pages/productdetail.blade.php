@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>See more Details</p>
                    <h1>Product Detail</h1>
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
                    <img src="{{ Storage::url($product->image) }}" alt="">
                </div>
            </div>
            <div class="col-md-7">
                <div class="single-product-content">
                    <h3>{{ $product->name }}</h3>
                    <p class="single-product-pricing"><span>Per Pcs</span> Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    <p>{{ $product->description }}</p>
                    @if (Auth::user()->roles->name == 'Member')
                    <div class="single-product-form">
                        <form action="{{ route('add-to-cart')}}" method="POST">
                            @csrf

                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <p>
                                <input class="@error('qty') is-invalid @enderror" id="qty" name="qty" type="number" placeholder="1">
                                @error('qty')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </p>

                            <br>
                            <a href="{{ route('index') }}" class="cart-btn">Back</a>
                            <button type="submit" class="boxed-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </form>
                    </div>
                    @elseif (Auth::user()->roles->name == 'Admin')
                    <div class="single-product-form">
                        <form action="/details/{{ $product->slug}}" method="POST">
                            {{ method_field('DELETE') }}
                            @csrf

                            <a href="{{ route('index') }}" class="cart-btn">Back</a>
                            <button class="cart-btn" type="submit"><i class="fas fa-trash"></i> Delete Item</button>
                        </form>
                    </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end single product -->
@endsection
