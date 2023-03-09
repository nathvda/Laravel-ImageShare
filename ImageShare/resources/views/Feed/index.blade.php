@extends('Feed/layout')
@section('title', 'Welcome to your feed')

@section('content')

Hi there
<form method="post" action="/logout">
    @csrf
<button class="bg-slate-400 mt-5 p-2 rounded-md text-white from-slate-400 to-slate-700" type="submit">Me déconnecter</button>
</form>

@endsection
