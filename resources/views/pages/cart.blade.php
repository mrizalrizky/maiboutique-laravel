@extends('layouts.app')

@section('title', 'Cart')

@section('content')
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Fresh and Organic</p>
                    <h1>Cart</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- cart -->
<div class="cart-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="cart-table-wrap">
                    <table class="cart-table">
                        <thead class="cart-table-head">
                            <tr class="table-head-row">
                                <th class="product-remove"></th>
                                <th class="product-image">Product Image</th>
                                <th class="product-name">Name</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-total">Total</th>
                                <th class="product-action">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total = 0;
                                $qty = 0;
                            @endphp
                            @forelse($user->product as $product)
                                <tr class="table-body-row">
                                    <form enctype="multipart/form-data" method="POST" action="{{ route('remove-from-cart') }}">
                                        {{ method_field('DELETE') }}
                                        @csrf

                                        <td class="product-remove">
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <button type="submit"><i class="far fa-window-close"></i></button>
                                        </td>
                                    </form>
                                    <td class="product-image">
                                        <a href="/details/{{ $product->slug}}">
                                            <img src="{{ Storage::url($product->image) }}" alt="">
                                        </a>
                                    </td>
                                    <td class="product-name">{{ $product->name }}</td>
                                    <td class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                                    <form enctype="multipart/form-data" action="{{ route('update-cart') }}" method="POST">
                                        {{ method_field('PUT') }}
                                        @csrf

                                        @php
                                            $qty = $product->pivot->qty;
                                            $total += $product->price*$qty;
                                        @endphp
                                        <td class="product-quantity">
                                            <input type="hidden" id="product_id" name="product_id" value="{{ $product->id }}">
                                            <input class="@error('qty') is-invalid @enderror" id="qty" name="qty" type="number" placeholder="{{ $qty }}">

                                            @error('qty')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                        <td class="product-total">Rp {{ number_format($product->price*$qty, 0, ',', '.') }}</td>
                                        <td class="cart-buttons">
                                            <button class="boxed-btn" type="submit">Update Cart</button>
                                        </td>
                                    </tr>
                                </form>
                            @empty
                            <tr>
                                <td colspan="7">Cart is empty</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="total-section">
                    <table class="total-table">
                        <thead class="total-table-head">
                            <tr class="table-total-row">
                                <th>Total</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="total-data">
                                <td><strong>Total: </strong></td>
                                <td>Rp {{ number_format($total, 0, ',', '.') }}</td>
                            </tr>
                        </tbody>
                    </table>
                        <form action="{{ route('checkout') }}" method="POST">
                            @csrf

                            <input type="hidden" name="total" value="{{ $total }}">
                            <input type="hidden" name="qty" value="{{ $qty }}">

                            <button class="boxed-btn" type="submit">Place Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end cart -->
@endsection
