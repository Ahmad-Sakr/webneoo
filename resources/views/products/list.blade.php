@extends('layout.app')

@section('title', 'Produits ' . $category->name)

@section('content')

    <!-- Title Start -->
    <section class="category-title container clearfix">
        <div class="section-text">
            <p class="title"><span>{{$category->name}}</span> De L'IRAP</p>
            <p class="description">Lors du pèlerinage d’un groupe de handicapés du Liban à Lourdes en 1960, deux jeunes filles promettent de vivre l’expérience d’une fraternité réelle solidaires sous un même toit. Lors du pèlerinage d’un groupe de handicapés du Liban à Lourdes en 1960, deux jeunes filles promettent de vivre l’expérience d’une fraternité réelle solidaires sous un même toit.</p>
        </div>
    </section>
    <!-- Title End -->

    <!-- Products Start -->
    <section class="products container clearfix">
        <div class="row">
            @foreach($products as $product)
                <div class="col-sm-6 col-md-4">
                    <div class="single-product">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($product->image) }}" alt="{{$product->name}}" class="img-fluid">
                        <a class="product-name" href="{{route('products.details', ['product' => $product])}}">{{$product->name}}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- Products End -->

@endsection

