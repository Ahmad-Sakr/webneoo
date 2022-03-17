@extends('layout.app')

@section('title', 'Produits')

@section('content')

    <!-- Title Start -->
    <section class="category-title container clearfix">
        <div class="section-text">
            <p class="title"><span>{{$product->name}}</span></p>
        </div>
    </section>
    <!-- Title End -->

@endsection

