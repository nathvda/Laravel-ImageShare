@extends('Feed/layout')
@section('title', 'See user: ' . $user->username)

@section('content')

<img class="w-10 h-10 object-cover rounded-full" src="/images/{{$user->avatar}}"/>
{{$user->username}}
{{$user->lastname}} {{$user->firstname}}
{{$user->created_at}}

<div class="gap-8 w-5/7 columns-4 mt-36">

@foreach($user->images as $image)

<a href="/viewcard/{{$image->id}}">
    <img class="w-48  mb-10 aspect-auto flex-initial rounded-md" src="/images/assets/{{$image->name}}"/>
</a>

@endforeach

</div>

@endsection