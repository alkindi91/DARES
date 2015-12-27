@extends('layouts.master')

@section('content')

{!! Form::model($choice,['route'=>['choice.update', $choice->id],'class'=>'form-horizontal form-label-left'])!!}

@include('questionbank::_fields')

	{!!Form::close()!!}
@stop