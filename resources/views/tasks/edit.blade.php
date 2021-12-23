@extends('layout')

@section('title','Edit Task')
    
@section('content')
    <h1 class="font-bold text-3xl">Edit Task</h1>
    <form action="/tasks/{{ $task->id }}" method="post">
        @method('put')
        @csrf
        <label class="block" for="title">Title</label>
        <input class="border border-gray-800" type="text" name="title" id="title" value="{{ $task->title }}">
        <br>
        <label class="block" for="body">Body</label>
        <textarea class="border border-gray-800" name="body" id="body" cols="30" rows="10">{{ $task->body }}</textarea>
        <br>
        <button class="bg-gray-300">Submit</button>
    </form>
@endsection