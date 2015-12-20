@extends('layouts.registered')

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
{!! Form::model($registration, ['id'=>'registrationForm','route'=>'registration.registrar.form','data-parsley-validate'=>'data-parsley-validate','data-parsley-excluded'=>'.novalidate,input[type=button], input[type=submit], input[type=reset], input[type=hidden], [disabled]']) !!}
@include('registration::registrar._fields')
<div class="text-center">
<br />
<br />
<br />
<br />
<button type='submit' class="btn btn-success btn-lg">
	<i class="fa fa-save "></i> @lang('global.save')
</button>
<br />
<br />
<br />
<br />
<br />
<div class="clearfix"></div>
</div>
{!! Form::close() !!}

@stop