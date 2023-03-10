@extends('Feed/layout')
@section('title', 'See user: ' . $user->username)

@section('content')

<img class="w-10 h-10 object-cover rounded-full" src="/images/{{$user->avatar}}"/>
{{$user->username}}
{{$user->lastname}} {{$user->firstname}}
{{$user->created_at}}
@livewire('subscription-button')

<div class="gap-8 w-5/7 columns-4">

@foreach($user->images as $image)

<a href="/viewcard/{{$image->id}}">
    <img class="w-48 mb-10 aspect-auto flex-initial rounded-md" src="/images/assets/{{$image->name}}"/>
</a>

@endforeach

</div>

@if($user->id === auth()->user()->id)
<div class="gap-8 w-5/7 columns-4">

<h3>Liked posts</h3>
@foreach($user->likes as $liked)

<a href="/viewcard/{{$liked->image->id}}">
    <img class="w-48 mb-10 aspect-auto flex-initial rounded-md" src="/images/assets/{{$liked->image->name}}"/>
</a>

@endforeach

</div>
@endif

@endsection