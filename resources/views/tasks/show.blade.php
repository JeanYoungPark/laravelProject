@extends('layout')

@section('title', 'task detail')

@section('content')
    <div class="px-64">
        <h1 class="font-bold text-3xl">Show Task</h1>
        Title: {{ $task->title }} <small class="float-right">Created at {{ $task->created_at }}</small><br>
        <p class="border p-3">{{ $task->body }}</p>
    </div>
@endsection