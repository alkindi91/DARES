@extends('layouts.master')

@section('content')

{!! Form::open(['route'=>'subject.store_lesson' ,'class'=>'form-horizontal form-label-left']) !!}
   
   @include('subject::lessons._fields')

{!! Form::close() !!}
@stop