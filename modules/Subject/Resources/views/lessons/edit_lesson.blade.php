@extends('layouts.master')

@section('content')

{!! Form::model($lesson,['route'=>['lessons.update', $lesson->id],'class'=>'form-horizontal form-label-left'])!!}

@include('subject::lessons._fields')

	{!!Form::close()!!}
@stop