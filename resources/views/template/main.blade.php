<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} | @yield('title')</title>
    @include('template.partials.css')
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <div class="preloader">
            <div class="loading">
                <img src="{{url('adminlte/img/loader/loaderbtc.gif')}}">
            </div>
        </div>
        @include('template.partials.navbar')
        @include('template.partials.sidebar')
        @yield('content')
        @include('template.partials.foooter')
    </div>
</body>
</html>
