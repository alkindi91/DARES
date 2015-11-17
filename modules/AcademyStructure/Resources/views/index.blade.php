@extends('layouts.master')

@section('content')
	
	<a href="{{ route('academystructure.create') }}">
		اضافة
	</a>
@stop

@section('footer')
<!-- PNotify -->
    <script type="text/javascript" src="{{ asset('template/js/notify/pnotify.core.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/notify/pnotify.buttons.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/notify/pnotify.nonblock.js') }}"></script>
@stop