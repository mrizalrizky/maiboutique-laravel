@extends('layouts.app')

@section('title', 'Search')

@section('content')
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Search An Item</p>
                    <h1>Search</h1>
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
                <div class="form-title text-center">
                    <h2>Search Your Favorite Item</h2>
                </div>
                <div class="contact-form justify-content-center">
                    <form action="{{ route('search') }}">
                        <p>
                            <input name="search" class="form-control" rows="20" type="search" placeholder="Search item...">
                        </p>
                    </form>
                </div>
                <hr>
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
    </div>
</div>

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
