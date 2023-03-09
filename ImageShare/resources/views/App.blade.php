<!DOCTYPE html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')

</head>

<body class="antialiased flex h-full bg-gradient-to-br from-slate-200 to-slate-500 bg-slate-200 flex-col justify-center items-center gap-8">
    <form method="post" action="/login" class="w-2/5 bottom-9 p-4 rounded-md bg-white shadow-md">
        @csrf
        <h3 class="font-bold text-xl text-slate-500">Login in</h3>
        <div class="flex justify-between items-center w-full mt-6">
            <label class="font-bolder text-slate-700">Username</label>
            <input class="border-solid p-2 border rounded-md border-slate-100 text-sm w-3/5" type="text" name="username">
        </div>
        @if($errors->has('username'))
        {{$errors->first('username')}}
        @endif
        <div class="flex justify-between items-center w-full mt-6">
            <label class="font-bolder text-slate-700">Password</label>
            <input class="p-2 border-solid border rounded-md border-slate-100 text-sm w-3/5" type="password" name="password">
        </div>
        <button class="bg-slate-400 mt-5 p-2 rounded-md text-white from-slate-400 to-slate-700" type="submit">Me connecter</button>
    </form>
    <a href="/register" class="text-white font-normal filter drop-shadow-md">No account yet ? Create one for free.</a>
</body>

</html>