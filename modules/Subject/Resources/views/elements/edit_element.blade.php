@extends('layouts.master')

@section('content')
{!! Form::model($elements,['route'=>['subject.update_element', $elements->id],'class'=>'form-horizontal form-label-left'])!!}
@include('subject::elements._fields')

{!!Form::close()!!}
@stop