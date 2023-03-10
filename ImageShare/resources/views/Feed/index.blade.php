@extends('Feed/layout')
@section('title', 'Welcome to your feed')

@section('content')

<div class="gap-8 w-5/7 columns-6">

@foreach($images as $image)

<div class="mb-4 flex flex-col flew-wrap-0 break-inside-avoid-column">
<a href="/viewcard/{{$image->id}}">
    <img class="w-48 aspect-auto flex-initial rounded-md" src="/images/assets/{{$image->name}}"/>
</a>
@livewire('like', ['image' => $image->id])
</div>

@endforeach

</div>

@endsection
