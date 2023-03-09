@extends('Feed/layout')
@section('title', 'Welcome to your feed')

@section('content')

<div class="gap-8 w-5/7 columns-4 mt-36">

@foreach($images as $image)

<a href="/viewcard/{{$image->id}}">
    <img class="w-48  mb-10 aspect-auto flex-initial rounded-md" src="/images/assets/{{$image->name}}"/>
</a>

@endforeach

</div>

@endsection
