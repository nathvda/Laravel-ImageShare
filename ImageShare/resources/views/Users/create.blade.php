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
    <form method="post" action="/register" class="w-2/5 bottom-9 p-4 rounded-md bg-white shadow-md" enctype="multipart/form-data">
        @csrf
        <h3 class="font-bold text-xl text-slate-500">Register</h3>
        <div class="flex justify-between items-center w-full mt-6">
            <label class="font-bolder text-slate-700">Last Name</label>
            <input class="p-2 border-solid border rounded-md border-slate-100 text-sm w-3/5" type="text" name="lastname">
        </div>
        <span class="text-red-500 text-sm">@if($errors->has('lastname'))
        {{$errors->first('lastname')}}
        @endif</span>
        <div class="flex justify-between items-center w-full mt-6">
            <label class="font-bolder text-slate-700">First Name</label>
            <input class="p-2 border-solid border rounded-md border-slate-100 text-sm w-3/5" type="text" name="firstname">
        </div>
        <span class="text-red-500 text-sm">@if($errors->has('firstname'))
        {{$errors->first('firstname')}}
        @endif</span>
        <div class="flex justify-between items-center w-full mt-6">
            <label class="font-bolder text-slate-700">Username</label>
            <input class="border-solid p-2 border rounded-md border-slate-100 text-sm w-3/5" type="text" name="username">
        </div>
        <span class="text-red-500 text-sm">@if($errors->has('username'))
        {{$errors->first('username')}}
        @endif</span>
        <div class="flex justify-between items-center w-full mt-6">
            <label class="font-bolder text-slate-700">Profile Picture</label>
            <input class="border-solid p-2 border rounded-md border-slate-100 text-sm w-3/5" type="file" name="avatar">
        </div>
        <span class="text-red-500 text-sm">@if($errors->has('avatar'))
        {{$errors->first('avatar')}}
        @endif</span>
        <div class="flex justify-between items-center w-full mt-6">
            <label class="font-bolder text-slate-700">email</label>
            <input class="border-solid p-2 border rounded-md border-slate-100 text-sm w-3/5" type="text" name="email">
        </div>
        <span class="text-red-500 text-sm">@if($errors->has('email'))
        {{$errors->first('email')}}
        @endif</span>
        <div class="flex justify-between items-center w-full mt-6">
            <label class="font-bolder text-slate-700">Password</label>
            <input class="p-2 border-solid border rounded-md border-slate-100 text-sm w-3/5" type="password" name="password">
        </div>
        <span class="text-red-500 text-sm">@if($errors->has('password'))
        {{$errors->first('password')}}
        @endif</span>
        <div class="flex justify-between items-center w-full mt-6">
            <label class="font-bolder text-slate-700">Confirm password</label>
            <input class="p-2 border-solid border rounded-md border-slate-100 text-sm w-3/5" type="password" name="password_confirmation">
        </div>
        <span class="text-red-500 text-sm">@if($errors->has('password_confirmation'))
        {{$errors->first('password_confirmation')}}
        @endif</span>
        <div class="flex justify-between items-center w-full mt-6"><button class="bg-slate-400 mt-5 p-2 rounded-md text-white from-slate-400 to-slate-700" type="submit">Me connecter</button>
        </div>
    </form>
    
</body>

</html>