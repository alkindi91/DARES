@extends('layouts.master')

@section('content')

{!! Form::model($program,['route'=>['supportprograms.edit', $program->id],'class'=>'form-horizontal form-label-left'])!!}

   @include('supportprograms::_fields')

	{!!Form::close()!!}
@stop