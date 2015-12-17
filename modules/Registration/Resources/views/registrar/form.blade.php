@extends('layouts.registered')

@section('content')

{!! Form::model($registration, ['route'=>'registration.registrar.form']) !!}
@include('registration::registrar._fields')
<a href="" class="btn btn-success">
	<i class="fa fa-save"></i> @lang('global.save')
</a>
{!! Form::close() !!}

@stop