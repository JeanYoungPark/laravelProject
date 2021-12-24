@extends('layouts.app')

@section('title','Tasks')

@section('content')
    <div class="px-64">
        <div class="flex pt-2">
            <h1 class="font-bold text-3xl flex-1">Tasks</h1>
            <a href="/tasks/create"><button class="bg-gray-300 hover:bg-gray-400 px-4 py-2">Create Task</button></a>
        </div>
        <ul>
            @foreach ($tasks as $task)
                <li class="border p-2 my-2"><a class="block" href="/tasks/{{ $task->id }}">Title: {{ $task->title }}<small class="float-right">Created at {{ $task->created_at }}</small></a></li>
            @endforeach
        </ul>
    </div>
@endsection