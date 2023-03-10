@extends('Feed.layout')
@section('title', 'Add a new image')
@section('content')

<form id="upload_form" method="post" action="/create" class="w-2/5 bottom-9 p-4 rounded-md bg-white justify-center shadow-md" enctype="multipart/form-data">
        @csrf
        <h3 class="font-bold text-xl text-slate-500">Create a new image</h3>
        <div class="flex justify-between items-center w-full mt-6">
            <label class="font-bolder text-slate-700">Title</label>
            <input class="p-2 border-solid border rounded-md border-slate-100 text-sm w-3/5" type="text" name="title">
        </div>
        @if($errors->has('title'))
        {{$errors->first('title')}}
        @endif
        <div class="flex justify-between items-center w-full mt-6">
            <label class="font-bolder text-slate-700">Link</label>
            <input class="p-2 border-solid border rounded-md border-slate-100 text-sm w-3/5" type="text" name="url">
        </div>
        @if($errors->has('url'))
        {{$errors->first('url')}}
        @endif
        <div class="flex justify-between items-center w-full mt-6">
            <label class="font-bolder text-slate-700">Description</label>
            <textarea form="upload_form" class="border-solid p-2 border rounded-md border-slate-100 text-sm w-3/5" type="text" name="description"></textarea>
        </div>
        @if($errors->has('description'))
        {{$errors->first('description')}}
        @endif
        <div class="flex justify-between items-center w-full mt-6">
            <label class="font-bolder text-slate-700">Profile Picture</label>
            <input class="border-solid p-2 border rounded-md border-slate-100 text-sm w-3/5" type="file" name="image">
        </div>
        @if($errors->has('image'))
        {{$errors->first('image')}}
        @endif
        <button class="bg-slate-400 mt-5 p-2 rounded-md text-white from-slate-400 to-slate-700" type="submit">Add image</button>
    </form>
@endsection