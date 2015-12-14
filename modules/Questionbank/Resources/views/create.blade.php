@extends('layouts.master')

@section('content')

{!! Form::open(['route'=>['questionbank.store',$id ],'class'=>'form-horizontal form-label-left']) !!}
   
   @include('questionbank::_fields')
   {!! Form::hidden('subject_subject_id', $id) !!}

{!! Form::close() !!}
@stop