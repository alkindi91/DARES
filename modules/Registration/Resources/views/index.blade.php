@extends('layouts.master')

@section('content')

{{-- Start breadcrumbs --}}
<ol class="breadcrumb">
  <li><a href="{{ route('welcome')}}">@lang('global.home')</a></li>
  <li class='active'>
  	@lang('registration::registration.header')
  </li>
 
</ol>
{{-- End breadcrumbs --}}

	<div class="x_panel" style="min-height:600px;">
	<div class="x_title">
		تحت الانشاء
		<div class="clearfix"></div>
	</div>
		
	<div class="x_content">
		تحت الانشاء
	</div>
	</div>
@stop