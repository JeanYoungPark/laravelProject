@extends('layouts.app')

@section('title', 'task detail')

@section('content')
    <div class="px-64">
        <div class="flex py-2">
            <h1 class="font-bold text-3xl flex-1">Show Task</h1>
            <div class="flex-initial">
                <a href="/tasks/{{ $task->id }}/edit">
                    <button class="bg-gray-300 px-2 hover:bg-gray-500">Edit</button>
                </a>
                <form action="/tasks/{{ $task->id }}" method="post" class="float-right ml-1">
                    @method('delete')
                    @csrf
                    <button class="bg-red-300 px-2 hover:bg-gray-500">Delete</button>
                </form>
            </div>
        </div>
        Title: {{ $task->title }}
        <small class="float-right">Created at {{ $task->created_at }}</small><br>
        <small class="float-right">Updated at {{ $task->updated_at }}</small><br>
        <p class="border p-3">{{ $task->body }}</p>
    </div>
@endsection