@extends('layouts.master')

@section('content')
{!! Form::open(['files'=>true,'route'=>['elements.store',$lessonid],'class'=>'form-horizontal form-label-left']) !!}
    @include('subject::elements._fields')
{!! Form::hidden('subject_lesson_id',$lessonid) !!}
{!! Form::close() !!}
@stop 