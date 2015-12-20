@extends('layouts.registered')

@section('content')

<div class="x_panel">
	<div class="x_title">
		<h2><i class="fa fa-smile-o"></i> مرحبا بك {{ $registration->fullname }}</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<div class="text-center">
			<h2>رقم طلبك هو : <b style='font-family:tahoma' class='text-success'>{{ $registration->code }}</b></h2>
		</div>
		<ul>
		@if($registration->step->upload_files)
		<li><i class="fa fa-upload"></i> رفع الملفات متاح</li>
		@endif
		@if($registration->step->edit_form)
		<li><i class="fa fa-edit"></i> تعديل البيانات متاح</li>
		@endif
		</ul>
	</div>
</div>

@stop