@extends('layouts.master')

@section('content')
{!! Form::open(['route'=>['elements.store',$id],'class'=>'form-horizontal form-label-left']) !!}
    @include('subject::elements._fields')
{!! Form::hidden('subject_lesson_id',$id) !!}
{!! Form::close() !!}
@stop