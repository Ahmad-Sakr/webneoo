@extends('layout.app')

@section('title', 'Produits')

@section('content')

    <!-- Main Bg Start -->
    <section class="main-bg container-fluid clearfix">
        <div class="bg-caption">
            <p class="caption-header"><span>Produits</span> De L'IRAP</p>
            <p>Lors du pèlerinage d’un groupe de handicapés du Liban à Lourdes en 1960, deux jeunes filles promettent de vivre l’expérience d’une fraternité réelle solidaires sous un même toit. L’aventure prend naissance sous l’œil vigilant d’une mère incomparable: la vierge Marie. Dès le premier jour, tout est placé sous le signe du partage, et cela continue jusqu’à maintenant.</p>
        </div>
    </section>
    <!-- Main Bg End -->

    <!-- Artisanat Start -->
    <section class="artisanat container-fluid py-5 clearfix">
        <div class="row">
            <div class="col-md-4 offset-md-2 section-text">
                <h2>Artisanat</h2>
                <h6>De L'IRAP</h6>
                <p>Lors du pèlerinage d’un groupe de handicapés du Liban à Lourdes en 1960, deux jeunes filles promettent de vivre l’expérience d’une fraternité réelle solidaires sous un même toit.</p>
                <button class="btn btn-primary">Explorer</button>
            </div>
            <div class="col-md-6">
                <div class="section-image">
                    <img class="img-fluid" src="{{asset('img/bg4.jpg')}}" alt="">
                </div>
                <img class="section-over-image" src="{{asset('img/bg2.jpg')}}" alt="">
            </div>
        </div>
    </section>
    <!-- Artisanat End -->

    <!-- Surgele Start -->
    <section class="surgele container-fluid py-5 bg-primary clearfix">
        <div class="row">
            <div class="col-10 offset-1">
                <p class="caption-header"><span>Surgelés</span> De L'IRAP</p>
                <p>Lors du pèlerinage d’un groupe de handicapés du Liban à Lourdes en 1960, deux jeunes filles.</p>
                <button class="btn btn-primary">Explorer</button>
            </div>
        </div>
    </section>
    <!-- Surgele End -->

    <!-- Secondary Bg Start -->
    <section class="secondary-bg container-fluid clearfix">
        <div class="row">
            <div class="col-12">
                <img class="img-fluid" src="{{asset('img/bg5.jpg')}}" alt="">
            </div>
        </div>
    </section>
    <!-- Secondary Bg End -->

    <!-- Pâtisserie Start -->
    <section class="patisserie container-fluid py-5 clearfix">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <img class="img-fluid" src="{{asset('img/bg6.jpg')}}" alt="">
            </div>
            <div class="col-md-6 col-sm-12 section-text">
                <h2>Pâtisserie</h2>
                <h6>De L'IRAP</h6>
                <p>Lors du pèlerinage d’un groupe de handicapés du Liban à Lourdes en 1960, deux jeunes filles promettent de vivre l’expérience d’une fraternité réelle solidaires sous un même toit.</p>
                <button class="btn btn-primary">Explorer</button>
            </div>
        </div>
    </section>
    <!-- Pâtisserie End -->

@endsection

