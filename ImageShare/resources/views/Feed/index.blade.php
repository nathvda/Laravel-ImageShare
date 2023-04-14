@extends('Feed/layout')
@section('title', 'Welcome to your feed')

@section('content')

<div class="w-5/7 md:columns-4 lg:columns-6 p-10">

@foreach($images as $image)

<div class="group mb-4 flex flex-col flew-wrap-0 break-inside-avoid-column relative">
<a href="/viewcard/{{$image->id}}">
    <img class="w-full aspect-auto flex-initial rounded-md" src="/images/assets/{{$image->name}}"/>
</a>
@livewire('like', ['image' => $image->id])
</div>

@endforeach

</div>

@endsection
