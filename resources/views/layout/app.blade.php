<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Basic -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Site Metas -->
        <meta name="keywords" content="IRAP,Institut,Rééducation,Audio-Phonétique">
        <meta name="description" content="Institut de Rééducation Audio-Phonétique">
        <meta name="author" content="AhmadSakr">
        <meta name="copyright" content="AhmadSakr">

        <!-- Title -->
        <title>@yield('title') - {{ config('app.name', 'IRAP') }}</title>

        <!-- Icon -->
        <link rel="shortcut icon" href="{{asset('favicon.ico')}}"/>

        <!-- Font Awesome   -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Compiled Bootstrap css   -->
        <link href="{{asset('css/main.css')}}" rel="stylesheet">

        <!-- Custom Stylesheet -->
        <link href="{{asset('css/styles.css')}}?<?php echo time(); ?>" rel="stylesheet">

        <!-- For Styling Specific Pages -->
        @yield('styles')
    </head>
    <body>
        <div class="wrapper">
            @include('partials.navbar')

            @yield('content')

            @include('partials.footer')
        </div>

        <!-- Bootstrap js   -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <!-- custom js -->
        <script src="{{ asset('js/main.js') }}"></script>

        <!-- For Custom Scripts In Specific Pages -->
        @yield('scripts')
    </body>
</html>
