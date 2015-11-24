@extends('layouts.master')

@section('content')
{!! Form::open(['route'=>['subject.update_element', $elements->id]])!!}
<input type="text" name="name" value="{{$elements->title}}">
<input type="text" name="order" value="{{$elements->order}}">
<input type="text" name="type" value="{{$elements->type}}">
<input type="text" name="value" value="{{$elements->value}}">
<button>update</button>
{!!Form::close()!!}
@stop