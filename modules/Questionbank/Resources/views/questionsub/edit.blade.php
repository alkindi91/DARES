@extends('layouts.master')

@section('content')

{!! Form::model($questions,['route'=>['questionbank.update', $questions->id],'class'=>'form-horizontal form-label-left'])!!}

@include('questionbank::questionsub._fields')

	{!!Form::close()!!}
@stop