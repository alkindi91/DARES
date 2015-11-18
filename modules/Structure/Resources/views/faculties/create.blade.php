@extends('layouts.master')

@section('content')

{!! Form::open(['route'=>'faculties.store' ,'method'=>'POST' ,'files'=>true]) !!}
<div class="form-group">
	{!! Form::file('photo') !!}
</div>
<div class="form-group">
	{!! Form::file('file') !!}
</div>
<button>
	submit
</button>

{!! Form::close() !!}
@stop