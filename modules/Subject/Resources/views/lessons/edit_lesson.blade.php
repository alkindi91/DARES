@extends('layouts.master')

@section('content')
{!! Form::open(['route'=>['subject.update_lesson', $tasks->id]])!!}
<input type="text" name="name" value="{{$tasks->name}}">
<input type="text" name="order" value="{{$tasks->order}}">
<input type="text" name="state" value="{{$tasks->state}}">
<button>update</button>
{!!Form::close()!!}
@stop