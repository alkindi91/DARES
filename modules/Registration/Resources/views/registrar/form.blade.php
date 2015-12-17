@extends('layouts.registered')

@section('content')

{!! Form::model($registration, ['route'=>'registration.registrar.form','data-parsley-validate'=>'data-parsley-validate','data-parsley-excluded'=>'.novalidate,input[type=button], input[type=submit], input[type=reset], input[type=hidden], [disabled]']) !!}
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