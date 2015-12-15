@extends('layouts.registration')
@section('content')
<div class="x_panel panel-white">
	<div class="x_title text-center">
		<h3>طلب التحاق بالتعليم عن بعد</h3>
		<h2>@section('heading') @show</h2>
	</div>
	<div class="x_content">
		
		
		@if(!empty($errors->all()))
		<div class='alert alert-danger'>
			<ul>
				@foreach($errors->all() as $error)
				<li>
					{{ $error }}
				</li>
				@endforeach
			</ul>
		</div>
		@endif
	</div>
</div>
{!! Form::open(['route'=>'registration.registrar.apply','data-parsley-validate'=>'data-parsley-validate' ,'class'=>'registration-form', 'id'=>'registrationForm', 'data-parsley-excluded'=>'.novalidate,input[type=button], input[type=submit], input[type=reset], input[type=hidden], [disabled]']) !!}
@include('registration::registrar._fields')
<div class="row">
	<div class="col-xs-12 col-sm-4 col-sm-offset-4">
		<button class='btn btn-primary btn-block btn-lg'>
		<i class="fa fa-send"></i> ارسال
		</button>
	</div>
</div>

{!! Form::close() !!}

@stop
@section('heading')
<b class="text-info">{{ $period->year->name }}</b>
@stop