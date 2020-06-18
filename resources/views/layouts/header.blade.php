<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#a9095a"/>
{{--    <title>Arctic Computers -Home</title>--}}
    @yield('title')

    <link rel="icon" href="{{asset('img/icon.png')}}" type="image/png">
    <link rel="stylesheet" href="{{asset('vendors/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/nice-select/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/nouislider/nouislider.min.css')}}">

    <!-- Snipcart -->
    <link rel="preconnect" href="https://app.snipcart.com">
    <link rel="preconnect" href="https://cdn.snipcart.com">
    <link rel="stylesheet" href="https://cdn.snipcart.com/themes/v3.0.15/default/snipcart.css" />

    <div id="snipcart" data-api-key="NGJjYzEwODgtMTlkOS00NmRiLWFhNzUtYWQ0MzViMmNhZTgxNjM3MjY2MzY4MDAwODY3MjE3" hidden></div>
    <script src="https://cdn.snipcart.com/themes/v3.0.15/default/snipcart.js"></script>

    <!-- Algolia -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/algoliasearch@4.0.0/dist/algoliasearch-lite.umd.js" integrity="sha256-MfeKq2Aw9VAkaE9Caes2NOxQf6vUa8Av0JqcUXUGkd0=" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@4.0.0/dist/instantsearch.production.min.js" integrity="sha256-6S7q0JJs/Kx4kb/fv0oMjS855QTz5Rc2hh9AkIUjUsk=" crossorigin="anonymous"></script> --}}

    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>

    {{--    Bootstrap--}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">


</head>
