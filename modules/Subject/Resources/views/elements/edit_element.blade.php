@extends('layouts.master')

@section('content')
{!! Form::model($elements,['files'=>true,'route'=>['elements.update', $elements->id],'class'=>'form-horizontal form-label-left'])!!}

@include('subject::elements._fields')

{!!Form::close()!!}
@stop 