@extends('layouts.master')

@section('content')

{!! Form::model($subjects,['route'=>['subject.update', $subjects->id],'class'=>'form-horizontal form-label-left'])!!}
@include('subject::subjects._fields')
	{!!Form::close()!!}
@stop