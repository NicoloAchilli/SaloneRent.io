<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{asset('css/configuration/root.css')}}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>SaloneRent.io | @yield('title', 'Home')</title>
</head>
<body>
<div id="wrapper">
    <div id="header">
        <div id="logo">
            <a href="{{route('home')}}" title="SaloneRent">
                <img src="{{asset('images/logo.png')}}" alt="SaloneRent">
            </a>
        </div>

        <div id="menu">
            @include('layouts.navbar')
        </div>
        <!-- end #menu -->
    </div>

    <div id="page">
        @yield('content')
    </div>

    <!-- end #content -->
    <div id="footer">
        @yield('footer')
    </div>
    <!-- end #footer -->
</div>
</body>
</html>


{{--@section('body')--}}

{{--    <link rel="stylesheet" href="{{asset('css/layout/public.css')}}">--}}

{{--    <div class="top-block" >--}}
{{--        <div class="logo-container">--}}
{{--            <a href="{{route('home')}}" title="SaloneRent">--}}
{{--                <img src="{{asset('images/logo.png')}}" alt="SaloneRent">--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="navbar-container">--}}
{{--            @include('layouts.navbar')--}}
{{--        </div>--}}
{{--        <div class="button-container">--}}
{{--            <button class="login-button">--}}
{{--                <img class="button-image" src="{{asset('images/account.png')}}" alt="Login">--}}
{{--                <span class="button-text">Accedi</span>--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
