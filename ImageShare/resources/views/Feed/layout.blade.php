<!DOCTYPE html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')

</head>

<body class="antialiased flex h-full bg-gradient-to-br from-slate-200 to-slate-500 bg-slate-200 flex-col justify-center items-center gap-8">
 @yield('content')
</body>

</html>