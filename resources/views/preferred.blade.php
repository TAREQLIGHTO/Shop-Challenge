@extends('layouts.main')

@section('content')
<section style="padding-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Produits</h2>
                        @foreach ($products as $product)
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <p>{{$product->name}}</p>
                                        <img src="{{ asset('uploads/products/'.$product->image) }}" alt="" />
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="{{ url('/removelike/'.$product->id) }}">remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
