@extends('layouts.master')
@section('content')
{{-- Start breadcrumbs --}}
<ol class="breadcrumb">
	<li><a href="{{ route('welcome')}}">@lang('global.home')</a></li>
	<li><a href="{{ route('registration.index') }}">
		@lang('registration::registration.header')
	</a>
</li>
<li class="active">
	@lang('registration::registrations.header')
</li>
</ol>
{{-- End breadcrumbs --}}
<div class="x_panel" style="min-height:600px;">
<div class="x_title">
	<h2><i class="fa fa-calendar"></i> @lang('registration::registrations.header')</h2>
	<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<div class="ln_solid"></div>
{!! Form::open(['route'=>'registration.registrations.index','class'=>'row','method'=>'GET']) !!}
	<div class="col-sm-4 col-lg-3">
	<label for="registration_step_id">
	@lang('registration::registrations.registration_step_id')
	</label>
		{!! Form::select('registration_step_id[]',$steps,request('registration_step_id'),['class'=>'form-control select2_multiple','multiple'=>'multiple']) !!}
	</div> 
	<div class="col-sm-4 col-lg-3">
	<label for="nationality_type">
	@lang('registration::registrations.nationality_type')
	</label>
		{!! Form::select('nationality_type[]',['omani'=>'عماني','expat'=>'غير عماني'],request('nationality_type'),['class'=>'form-control select2_multiple','placeholder'=>'الجنسية','multiple'=>'multiple']) !!}
	</div>
	<div class="col-sm-4 col-lg-3">
	<label for="nationality_type">
	@lang('registration::registrations.contact_country_id')
	</label>
		{!! Form::select('contact_country_id[]',$countries,request('contact_country_id'),['class'=>'form-control select2_multiple','placeholder'=>'الجنسية','multiple'=>'multiple']) !!}
	</div>
	<div class="col-sm-4 col-lg-3">
	<label>
	@lang('registration::registrations.social_status')
	</label>
		{!! Form::select('social_status[]',config('registration.social_status'),request('social_status'),['class'=>'form-control select2_multiple','placeholder'=>'الجنسية','multiple'=>'multiple']) !!}
	</div>
	<div class="clearfix"></div>
	<div class="ln_solid"></div>
	<div class="col-sm-4 col-lg-3">
		<label for="nationality_type">
	@lang('registration::registrations.academycycle_year')
	</label>
		{!! Form::select('academycycle_year[]',$years,request('academycycle_year'),['class'=>'form-control select2_multiple','placeholder'=>'الجنسية','multiple'=>'multiple']) !!}<label for="nationality_type">
	</div>
	<div class="col-sm-4 col-lg-3">
	<label>
	@lang('registration::registrations.gender')
	</label>
		{!! Form::select('gender[]',config('registration.genders'),request('gender'),['class'=>'form-control select2_multiple','placeholder'=>'الجنسية','multiple'=>'multiple']) !!}
	</div>
	<div class="col-sm-4 col-lg-3">
	<label>
	@lang('registration::registrations.social_job')
	</label>
		{!! Form::select('social_job[]',config('registration.social_jobs'),request('social_job'),['class'=>'form-control select2_multiple','placeholder'=>'الوظيفة','multiple'=>'multiple']) !!}
	</div>
	<div class="col-sm-4 col-lg-3">
	<label>
	@lang('registration::registrations.national_id')
	</label>
		{!! Form::text('national_id',request('national_id'),['class'=>'form-control','placeholder'=>trans('registration::registrations.national_id')]) !!}
	</div>
	<div class="col-sm-4 col-lg-3">
	<label>
	@lang('registration::registrations.contact_email')
	</label>
		{!! Form::text('contact_email',request('contact_email'),['class'=>'form-control','placeholder'=>trans('registration::registrations.contact_email')]) !!}
	</div>
	<div class="col-sm-12">
		<button class="btn btn-primary pull-left">
			@lang('global.search')
		</button>
	</div>
{!! Form::close() !!}
<div class="clearfix"></div>
<div class="ln_solid"></div>

<div class="clearfix"></div>
@if($registrations->isEmpty())
<div class="alert alert-info">
	<i class="fa fa-info"></i> @lang('registration::registrations.no_items')
</div>
@else
{!! Form::open(['route'=>['registration.registrations.delete-bulk'] ,'method'=>'GET']) !!}
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
	<thead>
		<tr class="headings">
			<th>
				<input type="checkbox" id='check-all' class="tableflat">
			</th>
			<th>
				@lang('registration::registrations.step')
			</th>
			<th>
				@lang('registration::registrations.fullname')
			</th>
			<th>
				@lang('registration::registrations.code')
			</th>
			<th>
				@lang('registration::registrations.national_id')
			</th>
			<th>
				@lang('registration::registrations.created_at')
			</th>
			<th>
				@lang('registration::registrations.contact_mobile')
			</th>
			<th>
				@lang('registration::registrations.contact_email')
			</th>
			
			
			<th class=" no-link last"><span class="nobr">
				<i class="fa fa-cog"></i>
				@lang('global.actions')
			</span>
		</th>
	</tr>
</thead>
<tbody>
	@foreach($registrations as $registration)
	<tr class="even pointer">
		<td class="a-center ">
			<input type="checkbox" class="tableflat" value='{{ $registration->id }}' name='table_records[]'>
		</td>
		<td class='success'>
			{{ $registration->step->name }}
		</td>
		<td >
			{{ $registration->fullname }}
		</td>
		<td class='info'>
			<b>{{ $registration->code }}</b>
		</td>
		<td>
			{{ $registration->national_id }}
		</td>
		<td>
			{{ $registration->created_at->format('D, F d-m-Y') }}
		</td>
		<td>
			{{ $registration->contact_mobile }}
		</td>
		<td>
			{{ $registration->contact_email }}
		</td>
		
		<td class=" last">
			<a href="{{ route('registration.registrations.edit' ,$registration->id)}}" class='btn btn-sm btn-success'>
				<i class="fa fa-edit"></i> @lang('global.edit')
			</a>
			<a href="{{ route('registration.registrations.delete' ,$registration->id)}}" class="btn btn-danger btn-sm">
				<i class="fa fa-trash"></i> @lang('global.delete')
			</a>
			
		</td>
		@endforeach
	</tr>
</tbody>
</table>
<div class="bulk-actions">
<button id='js-delete-all' class="btn btn-danger">
<i class="fa fa-trash"></i> @lang('global.delete')
</button>
</div>
@endif
{!! Form::close() !!}
</div>
@stop
@section('footer')
<!-- select2 -->
<script src="{{ asset('template/js/select/select2.full.min.js') }}"></script>
<script src="{{ asset('template/js/select/i18n/ar.js') }}"></script>
<script>
	jQuery(document).ready(function($) {
		$(".select2_multiple").select2({
maximumSelectionLength: 4,
allowClear: true
});
	});
</script>
@endsection
@section('head')
{{-- select2 --}}
<link href="{{ asset('template/css/select/select2.min.css') }}" rel="stylesheet">
@endsection