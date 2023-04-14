@extends('Feed/layout')
@section('title', 'See user: ' . $user->username)

@section('content')

<div clas="flex flex-row w-full">
<div class="bg-slate-100 rounded-md p-10 self-start mb-10"><img class="w-48 h-48 object-cover rounded-full" src="/images/{{$user->avatar}}" />
    <h3 class="text-6xl">@ {{ $user->username}}</h3>
    <div class="p-2">
        <h4>{{$user->lastname}} {{$user->firstname}}</h4>
        <span>Joined : {{$user->created_at}}</span>
    </div>
    @if(auth()->user()->id != $user->id)
@livewire('subscription-button', ['user' => $user])
@endif

</div>
<div class="">

<div class="gap-8 w-5/7 columns-5 break-inside-avoid-column">

    @foreach($user->images as $image)
    <div class="group mb-4 flex flex-col flew-wrap-0 break-inside-avoid-column relative">
    <a href="/viewcard/{{$image->id}}">
        <img class="w-48 aspect-auto flex-initial rounded-md" src="/images/assets/{{$image->name}}" />
    </a>@livewire('like', ['image' => $image->id])
</div>

    @endforeach

</div>

@if($user->id === auth()->user()->id)
<h3 class="text-3xl font-bold">Liked posts</h3>
<div class="gap-8 w-5/7 columns-5 break-inside-avoid-column">


    @foreach($user->likes as $liked)
    <div class="group mb-4 flex flex-col flew-wrap-0 break-inside-avoid-column relative">
        <a href="/viewcard/{{$liked->image->id}}">
            <img class="w-48 aspect-auto flex-initial rounded-md" src="/images/assets/{{$liked->image->name}}" />
        </a>
    @livewire('like', ['image' => $liked->image->id])
    </div>

    @endforeach

</div>

<h3>Subscriptions posts</h3>
<div class="gap-8 w-5/7 columns-5">
    @foreach($user->subscriptions as $subs)

    @foreach($subs->images as $image)
    <div class="group mb-4 flex flex-col flew-wrap-0 break-inside-avoid-column relative">
        <a href="/viewcard/{{$image->id}}">
            <img class="w-48 aspect-auto flex-initial rounded-md" src="/images/assets/{{$image->name}}" />
        </a>
        @livewire('like', ['image' => $image->id])
    </div>

    @endforeach
    @endforeach

</div>
@endif
</div>

@endsection