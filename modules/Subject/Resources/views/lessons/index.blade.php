@extends('layouts.master')

@section('content')
	
@foreach($tasks as $task)
    <h3>{{ $task->title }}</h3>
    <p>{{ $task->name}}</p>
    <p>{{ $task->order}}</p>
    <p>{{ $task->state}}</p>
    <p>
        <a href="{{ route('subject.index', $task->id) }}" class="btn btn-info">View Task</a>
        <a href="{{ route('subject.edit_lesson', $task->id) }}" class="btn btn-primary">Edit Task</a>
    </p>
    <hr>
@endforeach
@stop