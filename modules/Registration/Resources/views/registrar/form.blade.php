@extends('layouts.registered')

@section('content')

{!! Form::model($registration, ['route'=>'registration.registrar.form']) !!}
@include('registration::registrar._fields')
<div class="text-center">
<br />
<br />
<br />
<br />
<a href="" class="btn btn-success btn-lg">
	<i class="fa fa-save "></i> @lang('global.save')
</a>
<br />
<br />
<br />
<br />
<br />
<div class="clearfix"></div>
</div>
{!! Form::close() !!}

@stop