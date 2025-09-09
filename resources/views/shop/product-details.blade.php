@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>{{ $product->name }}</h2>
                        <span>{{ $product->description }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="left-images">
                        <img src="{{ asset('assets/images/single-product-01.jpg') }}" alt="{{ $product->name }}">
                        <img src="{{ asset('assets/images/single-product-02.jpg') }}" alt="{{ $product->name }}">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-content">
                        <h4>{{ $product->name }}</h4>
                        <span class="price">${{ $product->price }}</span>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>{{ $product->description }}</span>
                        </div>
                </div>
            </div>
        </div>
    </section>

@endsection
