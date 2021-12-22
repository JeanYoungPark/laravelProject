@extends('layout')

@section('title','Tasks')

@section('content')
    <div class="px-64">
        <h1 class="font-bold text-3xl">Tasks</h1>
        <ul>
            @foreach ($tasks as $task)
                <li class="border p-2 my-2">Title: {{ $task->title }} <small class="float-right">Created at {{ $task->created_at }}</small></li>
            @endforeach
        </ul>
    </div>
@endsection