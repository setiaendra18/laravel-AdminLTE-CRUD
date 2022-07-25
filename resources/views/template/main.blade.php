<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} | @yield('title')</title>
    @include('template.include.partials.css')
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
        <div class="preloader">
            <div class="loading">
                <img src="{{url('adminlte/img/loader/loaderbtc.gif')}}">
            </div>
        </div>
        @include('template.include.navbar')
        @include('template.include.sidebar')
        @yield('content')
        @include('template.include.footer')
    </div>
    @stack('scripts')
</body>
</html>
