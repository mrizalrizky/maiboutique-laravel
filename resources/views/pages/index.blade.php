@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- hero area -->
<div class="hero-area hero-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-2 text-center">
                <div class="hero-text">
                    <div class="hero-text-tablecell">
                        <p class="subtitle">MaiBoutique Clothing Store</p>
                        <h1>MaiBoutique Fashion</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end hero area -->

<!-- product section -->
<div class="product-section mt-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Our</span> Products</h3>
                    <p>Check out our products below!</p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="/details/{{ $product->slug }}"><img src="{{ Storage::url($product->image) }}" alt=""></a>
                    </div>
                    <h3>{{$product->name}}</h3>
                    <p class="product-price"><span>Per pcs</span>Rp {{ number_format($product->price, 0, ',', '.') }} </p>
                    <a href="/details/{{ $product->slug }}" class="cart-btn"><i class="fas fa-info-circle"></i>More Detail</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end product section -->

<div class="row">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="pagination-wrap">
                    <ul>
                        {{ $products->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
