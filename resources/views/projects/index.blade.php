@extends('layout')

@section('content')
    <h1>project List</h1>
    <ul>
    @foreach ($projects as $project)
        <li>
        Title : {{ $project->title }}<br>
        Description : {{ $project->description }}
        </li>
    @endforeach
    </ul>
@endsection