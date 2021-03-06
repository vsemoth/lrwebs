<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LRWebs') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap-3/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
    <style type="text/css">
        p {
            font-size: 20px;
        }

        h5 {
            font-size: 20px;
        }
    </style>
</head>
<body>

    @yield('nav')

    <div id="app">
      @yield('content')
    </div>

    <!-- Scripts -->
    @yield('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
