@extends('Feed/layout')
@section('title', 'See Image: ' . $image->title)

@section('content')
<section class="flex mt-36 w-3/5 flex-col p-11">
    <div class="flex-grow bg-white p-4 shadow-md">
        <h3 class="text-4xl font-bold text-slate-500">{{ $image->title }}</h3>
        <span class="font-light">by: <a href="/profile/{{$image->author->id}}">{{$image->author->username}}</a> <a href="/profile/{{$image->author->id}}">
    <img class="w-20 h-20 mb-10 object-cover aspect-auto flex-initial rounded-md" src="/images/{{$image->author->avatar}}"/>
</a>
    {{$image->created_at->diffForHumans()}}</span>
    </div>
    <div class="flex justify-between">
        <div class="h-fit w-1/2">
            <a class="h-fit block" href="{{$image->url}}">
                <img class="w-full object-cover shadow-md" src="/images/assets/{{$image->name}}" />
            </a>
        </div>
        <div class="bg-white p-4 shadow-md w-3/6">
            <p>{{$image->description}}</p>
        </div>
    </div>
</section>

@endsection