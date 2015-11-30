@extends('layouts.master')

@section('content')
{!! Form::model($elements,['route'=>['subject.update_element', $elements->id],'class'=>'form-horizontal form-label-left'])!!}
{!! @$id = $elements -> subject_lesson_id!!}
@include('subject::elements._fields')

{!!Form::close()!!}
@stop