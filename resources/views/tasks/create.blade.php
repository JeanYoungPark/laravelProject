@extends('layout')

@section('title','Create Task')
    
@section('content')
    <div class="px-64">
        <h1 class="font-bold text-3xl">Create Task</h1>
        <form action="/tasks" method="post">
            @csrf
            <label class="block" for="title">Title</label>
            <input class="@error('title') border border-red-500 @enderror border border-gray-800 w-full" type="text" name="title" id="title" required value="{{ old('title') ? old('title') : '' }}">
            <br>
            @error('title')
                <small class="text-red-500">{{ $message }}</small>
            @enderror
            <label class="block" for="body">Body</label>
            <textarea class="@error('body') border border-red-500 @enderror border border-gray-800 w-full" name="body" id="body" cols="30" rows="10" required>{{ old('body') ? old('body') : '' }}</textarea>
            <br>
            @error('body')
                <small class="text-red-500">{{ $message }}</small>
            @enderror
            <button class="bg-gray-300">Submit</button>
        </form>
    </div>
@endsection