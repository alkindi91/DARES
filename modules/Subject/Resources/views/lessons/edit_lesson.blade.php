@extends('layouts.master')

@section('content')
{!! Form::open(['route'=>['subject.update_lesson', $task->id]])!!}
<input type="text" value="{{$task->name}}">
<input type="text" value="{{$task->order}}">
<input type="text" value="{{$task->state}}">
<button>update</button>
{!!Form::close()!!}
@stop