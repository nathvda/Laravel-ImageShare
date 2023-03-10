@extends('Feed/layout')
@section('title', 'See user: ' . $user->username)

@section('content')

<img class="w-10 h-10 object-cover rounded-full" src="/images/{{$user->avatar}}"/>
{{$user->username}}
{{$user->lastname}} {{$user->firstname}}
{{$user->created_at}}
@if(auth()->user()->id != $user->id)
@livewire('subscription-button', ['user' => $user])
@endif

<div class="gap-8 w-5/7 columns-4">

@foreach($user->images as $image)

<a href="/viewcard/{{$image->id}}">
    <img class="w-48 mb-10 aspect-auto flex-initial rounded-md" src="/images/assets/{{$image->name}}"/>
</a>

@endforeach

</div>

@if($user->id === auth()->user()->id)
<h3>Liked posts</h3>
<div class="gap-8 w-5/7 columns-4">


@foreach($user->likes as $liked)

<a href="/viewcard/{{$liked->image->id}}">
    <img class="w-48 mb-10 aspect-auto flex-initial rounded-md" src="/images/assets/{{$liked->image->name}}"/>
</a>

@endforeach

</div>

<h3>Subscriptions posts</h3>
<div class="gap-8 w-5/7 columns-4">
@foreach($user->subscriptions as $subs)
    
    @foreach($subs->images as $image)

<a href="/viewcard/{{$image->id}}">
    <img class="w-48 mb-10 aspect-auto flex-initial rounded-md" src="/images/assets/{{$image->name}}"/>
</a>
    @endforeach
@endforeach

</div>
@endif

@endsection