<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset("asset/form.css")}}">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset("asset/fontawesome-free/css/all.min.css")}}">
        <link rel="stylesheet" href="{{asset("asset/fontawesome-free/css/all.css")}}">
        <link rel="stylesheet" href="{{asset("asset/boxicons/css/boxicons.min.css")}}">
        <link rel="stylesheet" href="{{asset("asset/bootstrap-icons/bootstrap-icons.css")}}">
        <link rel="stylesheet" href="{{ asset('asset/style.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body >
        <div>
            <div>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
