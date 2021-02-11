<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/component.css') }}" rel="stylesheet">
    <link href="{{ asset('css/selectric.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/svg-icon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/shotcode.css') }}" rel="stylesheet">
    <link href="{{ asset('css/typography.css') }}" rel="stylesheet">
    <link href="{{ asset('css/widget.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

</head>
@php $lang = session()->get('locale')@endphp
@switch($lang)
    @case('fa')
        <style>
           .mycustomeNav{
               padding-right: 100px
           }
           .containtRaight{
               text-align: right;
           }
           .keo_contact_field>input[type="text"] {
           text-align: right;
           }
        </style>
        @break
        @case('ps')
        <style>
            .containtRaight{
               text-align: right;
           }
         </style>
            @break
            @case('de')
        <style>
            .mycustomeNav{
                padding-right: 5px
            }
        </style>
        @break
    @default
    <style>
        .mycustomeNav{
            padding-right: 110px
        }
    </style>
@endswitch
<body>
   
@include('userViewInc.navbar') 
@include('userViewInc.messages')
<div class="containtRaight">
    @yield('content')
</div>
     @include('cookieConsent::index')
<div class="containtRaight">
    @include('userViewInc.footer')
</div>
</body>

<script src="{{ asset('js/jquery.js') }}"></script> 
    <script src="{{ asset('js/bootstrap.js') }}"></script> 
    <script src="{{ asset('js/modernizr.custom.js') }}"></script> 
    <script src="{{ asset('js/jquery.dlmenu.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/waypoints-min.js') }}"></script> 
    <script src="{{ asset('js/slick.min.js') }}"></script>  
    <script src="{{ asset('js/custom.js') }}"></script>
</html>
