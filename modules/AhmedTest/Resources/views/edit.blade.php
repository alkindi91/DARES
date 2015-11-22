@extends('layouts.master')

@section('content')
{!! Form::open(['route'=>['ahmedtest.update', $task->id]])!!}
<h1>{{ $task->title }}</h1>
<p class="lead">{{ $task->description }}</p>

<input type="text" value="{{$task->title}}">
<input type="text" value="{{$task->description}}">
<button>update</button>
{!!Form::close()!!}
@stop