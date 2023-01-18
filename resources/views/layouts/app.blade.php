<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CM @yield('title')</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">
        @include('admin.partials.header')
        <div class="container-fluid main-wrapper">
            <div class="row h-100">
                <div class="col-1 bg-dark h-100">
                    @include('admin.partials.aside')
                </div>
                <div class="col-11">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>

</html>
