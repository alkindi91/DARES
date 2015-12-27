@extends('layouts.master')

@section('content')

{!! Form::open(['route'=>['choice.store', $qid ],'class'=>'form-horizontal form-label-left']) !!}
   
   @include('questionbank::choice._fields')
   
   {!! Form::hidden('question_id',$qid) !!}

{!! Form::close() !!}
@stop