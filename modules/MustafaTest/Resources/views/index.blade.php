@extends('layouts.master')

@section('content')
	
	<h1>Hello World</h1>
	
	<p>
		@foreach($data as $dt)
		<h1>$dt->name</h1>

		@endforeach
	</p>

@stop