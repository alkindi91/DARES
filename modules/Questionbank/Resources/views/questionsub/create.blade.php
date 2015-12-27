@extends('layouts.master')

@section('content')

{!! Form::open(['route'=>['questionbank.storequestion', $subjectid],'class'=>'form-horizontal form-label-left']) !!}
   
   @include('questionbank::questionsub._fields')
   
{!! Form::close() !!}
@stop