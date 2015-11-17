@extends('layouts.master')


@section('content')

	
	{!! Form::open(['route'=>'academystructure.store' ,'method'=>'POST' ,'class'=>'form-horizontal']) !!}
	
	<div class="form-group">
	<label for="">الاسم</label>
	
	{!! Form::text('faculty_name' ,null ,['class'=>'form-control']) !!}
	{!! $errors->first('faculty_name' ,'<div class="alert alert-danger">:message</div>') !!}
	
	</div>
	<div class="form-group">
		<button>
			ارسل
		</button>
	</div>

	{!! Form::close() !!}
@stop
