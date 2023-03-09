<!DOCTYPE html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')

</head>

<body class="antialiased flex min-h-full bg-gradient-to-br from-slate-200 to-slate-500 bg-slate-200 flex-col justify-center items-center gap-8 bg-cover">
 
<nav class="flex flex-row p-5 bg-white w-full justify-end items-center fixed top-0 left-0 right-0 shadow-md gap-8">
<a href="/create" aria-label="Share a new image"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-card-image fill-slate-500" viewBox="0 0 16 16">
  <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
  <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
</svg>
</a>
<div class="flex gap-4 justify-center items-center">
<div>Hi, 
<span class="font-bold text-slate-500">{{auth()->user()->firstname}}
</span>
</div>

<img class="w-10 h-10 rounded-full object-cover" src="/images/{{auth()->user()->avatar}}"/>
<form method="post" action="/logout">
    @csrf
<button class="bg-slate-400 p-2 rounded-md text-white from-slate-400 to-slate-700" type="submit">Me déconnecter</button>
</form></div>
</nav>
@yield('content')
</body>

</html>