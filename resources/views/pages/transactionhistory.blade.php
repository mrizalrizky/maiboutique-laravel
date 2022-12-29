@extends('layouts.app')

@section('title', 'Transaction History')

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
                    <h3><span class="orange-text">Your</span> Transactions</h3>
                    <p>Check out your purchased products below!</p>
                </div>
            </div>
        </div>

        <div class="row">
            @forelse ($userTransactions as $ut)
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <h6>{{ $ut->created_at->format('j F Y') }}</h6>
                    <h3>Invoice ID {{ $ut->id }}</h3>
                    <p class="product-price">Rp {{ number_format($ut->total_price, 0, ',', '.') }} </p>
                    <a href="/transactions/{{ $ut->id }}" class="boxed-btn"><i class="fas fa-info-circle"></i> More Transactions</a>
                </div>
            </div>
            @empty
            <div class="col-lg-8 offset-lg-2 mb-5 text-center">
                    <p><strong>You have no transactions!</strong></p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
