@extends('layouts.master')

@section('content')
{!! Form::open(['route'->'mustafatest.store'])!!}
	
	<h1>create new user</h1>
	
	<p>
		<input type="text" name="name">
		<button>Create</button>
	</p>
{!! Form::close()!!}
@stop