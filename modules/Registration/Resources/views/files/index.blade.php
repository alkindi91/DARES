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
	@lang('registration::files.header')
</li>
</ol>
{{-- End breadcrumbs --}}
<div class="x_panel" style="min-height:600px;">
<div class="x_title">
	<h2><i class="fa fa-calendar"></i> @lang('registration::files.header')</h2>
	<div class="clearfix"></div>
</div>
@permission('create.registration.files')

<a href="{{ route('registration.files.create') }}" class="btn btn-primary pull-left">
	<i class="fa fa-plus"></i> @lang('global.new')
</a>

@endif
<div class="clearfix"></div>
<div class="ln_solid"></div>

@if($files->isEmpty())
<div class="alert alert-warning">
	<i class="fa fa-warning"></i> @lang('registration::files.no_academycycleyears' ,['link'=>route('academycycle.years.create',['redirectTo'=>'registration.files.index'])])
</div>
@elseif($files->isEmpty())
<div class="alert alert-info">
	<i class="fa fa-info"></i> @lang('registration::files.no_items')
</div>
@else
{!! Form::open(['route'=>['registration.files.delete-bulk'] ,'method'=>'GET']) !!}
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
	<thead>
		<tr class="headings">
			<th>
				<input type="checkbox" id='check-all' class="tableflat">
			</th>
			<th>
				@lang('registration::files.type')
			</th>
			
			<th>
				<i class="fa fa-image"></i> @lang('registration::files.file')
			</th>
			
			
			<th class=" no-link last"><span class="nobr">
				<i class="fa fa-cog"></i>
				@lang('global.actions')
			</span>
		</th>
	</tr>
</thead>
<tbody>
	@foreach($files as $file)
	<tr class="even pointer">
		<td class="a-center ">
			<input type="checkbox" class="tableflat" value='{{ $file->id }}' name='table_records[]'>
		</td>
		<td>
			{{ config('registration.files.types.'.$file->type) }}
		</td>
		<td class='text-center {!! $file->edit_form ? 'success' : 'danger' !!}'>
		
			@if(substr($file->file->contentType(),0,5)=='image')
			<img src="{{ asset($file->file->url()) }}" width='48'/>
			@else

			@endif
		</td>
		
		<td class=" last">
			<a href="{{ route('registration.files.edit' ,$file->id)}}" class='btn btn-sm btn-success'>
				<i class="fa fa-edit"></i> @lang('global.edit')
			</a>
			<a href="{{ route('registration.files.delete' ,$file->id)}}" class="btn btn-danger btn-sm">
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
placeholder: "اختيار السنوات",
allowClear: true
});
	});
</script>
@endsection
@section('head')
{{-- select2 --}}
<link href="{{ asset('template/css/select/select2.min.css') }}" rel="stylesheet">
@endsection