@extends('Feed/layout')
@section('title', 'Welcome to your feed')

@section('content')

<nav class="flex flex-row p-5 bg-white w-full justify-end items-center absolute top-0 left-0 right-0 shadow-md">
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

@endsection
