@extends('ahmedtest::layouts.master')

@section('content')
@foreach($tasks as $task)
    <h3>{{ $task->title }}</h3>
    <p>{{ $task->description}}</p>
    <p>
        <a href="{{ route('ahmedtest.show', [$task->id ,"name"=>'test' ,'age'=>18]) }}" class="btn btn-info">View Task</a>
        <a href="{{ route('ahmedtest.edit', [$task->id ,'test']) }}" class="btn btn-primary">Edit Task</a>
    </p>
    <hr>
@endforeach
@stop