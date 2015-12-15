@extends('layouts.registered')

@section('content')

{!! Form::model($registration, ['route'=>'registration.registrar.form']) !!}
@include('registration::registrar._fields')
{!! Form::close() !!}

@stop