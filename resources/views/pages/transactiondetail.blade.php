@extends('layouts.app')

@section('title', 'Transaction Details')

@section('content')
<!-- hero area -->
<div class="hero-area hero-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-2 text-center">
                <div class="hero-text">
                    <div class="hero-text-tablecell">
                        <p class="subtitle">Check What You've Bought!</p>
                        <h1>Transaction History</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end hero area -->

<div class="product-section mt-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Purchased</span> Products</h3>
                    <p>Check out your purchased products below!</p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($transactions as $t)
            <div class="col-lg-4 col-md-6 text-center mt-5">
                <div class="single-product-item">
                    <div class="product-image">
                        <img src="{{ Storage::url($t->product->image) }}" alt=""></a>
                    </div>
                    <h3>{{$t->product->name}}</h3>
                    <p class="product-price"><span>{{ $t->quantity }} pc(s)</span>Rp {{ number_format($t->product->price*$t->quantity, 0, ',', '.') }} </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
