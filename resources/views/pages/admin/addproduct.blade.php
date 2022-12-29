@extends('layouts.app')

@section('title', 'Add Product')

@section('content')
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Add New Product</p>
                    <h1>Add Product</h1>
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
                    <h2>Add New Product</h2>
                </div>
                <div class="contact-form">
                    <form enctype="multipart/form-data" action="{{ route('add-product') }}" method="POST">
                        @csrf

                        <h6 class="mb-2">Product Image<span class="text-danger">*</span></h6>
                        <p>
                            <input class="@error('image') is-invalid @enderror" type="file"  name="image" id="image">

                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </p>

                        <h6 class="mb-2">Product Name<span class="text-danger">*</span></h6>
                        <p>
                            <input class="@error('name') is-invalid @enderror" type="text" name="name" id="name">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </p>

                        <h6 class="mb-2">Product Description<span class="text-danger">*</span></h6>
                        <p>
                            <input class="@error('description') is-invalid @enderror" type="text" name="description" id="description">

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </p>

                        <h6 class="mb-2">Product Price<span class="text-danger">*</span></h6>
                        <p>
                            <input class="@error('price') is-invalid @enderror" type="text" name="price" id="price">

                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </p>

                        <h6 class="mb-2">Product Stock<span class="text-danger">*</span></h6>
                        <p>
                            <input class="@error('stock') is-invalid @enderror" type="text" name="stock" id="stock">

                            @error('stock')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </p>

                        <a class="boxed-btn" href="{{ route('index') }}">Back</a>
                        <button class="boxed-btn" type="submit">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
