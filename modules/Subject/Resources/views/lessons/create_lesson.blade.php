@extends('layouts.master')

@section('content')

{!! Form::open(['route'=>['lessons.store',$sid ],'class'=>'form-horizontal form-label-left']) !!}
   
   @include('subject::lessons._fields')
   {!! Form::hidden('subject_subject_id', $sid) !!}

{!! Form::close() !!}
@stop