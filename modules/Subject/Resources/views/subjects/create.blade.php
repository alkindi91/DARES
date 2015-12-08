@extends('layouts.master')

@section('content')

{!! Form::open(['route'=>'subject.store' ,'class'=>'form-horizontal form-label-left']) !!}
   
   @include('subject::subjects._fields')

{!! Form::close() !!}
@stop