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
	@lang('registration::periods.header')
</li>
</ol>
{{-- End breadcrumbs --}}
<div class="x_panel" style="min-height:600px;">
<div class="x_title">
	<h2><i class="fa fa-calendar"></i> @lang('registration::periods.header')</h2>
	<div class="clearfix"></div>
</div>
@permission('create.registration.periods')
@if(!empty($years))
<a href="{{ route('registration.periods.create') }}" class="btn btn-primary pull-left">
	<i class="fa fa-plus"></i> @lang('global.new')
</a>
@endif
@endif
<div class="clearfix"></div>
<div class="ln_solid"></div>
{!! Form::open(['route'=>'registration.periods.index' ,'class'=>'row' ,'method'=>'GET']) !!}
<div class="col-xs-12 col-sm-6">
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">السنوات</label>
		<div class="col-md-9 col-sm-9 col-xs-12">
			{!! Form::select('academycycle_year_id',$years,null, ['multiple','class'=>'select2_multiple form-control']) !!}
		</div>
	</div>
</div>
<div class="col-xs-12 col-sm-2">
	<div class="checkbox">
		<label>
		{!! Form::checkbox('running',1,request('running'),['class'=>'flat']) !!} جارية حاليا
		</label>
	</div>
</div>
<div class="col-xs-12 col-sm-4">
	<button class='btn btn-primary pull-left'>
	<i class="fa fa-filter"></i> @lang('global.filter')
	</button>
</div>
{!! Form::close() !!}
<div class="clearfix"></div>
<div class="ln_solid"></div>
@if($periods->isEmpty() && empty($years))
<div class="alert alert-warning">
	<i class="fa fa-warning"></i> @lang('registration::periods.no_academycycleyears' ,['link'=>route('academycycle.years.create',['redirectTo'=>'registration.periods.index'])])
</div>
@elseif($periods->isEmpty())
<div class="alert alert-info">
	<i class="fa fa-info"></i> @lang('registration::periods.no_items')
</div>
@else
{!! Form::open(['route'=>['registration.periods.delete-bulk'] ,'method'=>'GET']) !!}
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
	<thead>
		<tr class="headings">
			<th>
				<input type="checkbox" id='check-all' class="tableflat">
			</th>
			<th>
				@lang('registration::periods.name')
			</th>
			<th>
				<i class="fa fa-calendar"></i> @lang('registration::periods.start_at')
			</th>
			<th>
				<i class="fa fa-calendar"></i> @lang('registration::periods.finish_at')
			</th>
			
			
			<th class=" no-link last"><span class="nobr">
				<i class="fa fa-cog"></i>
				@lang('global.actions')
			</span>
		</th>
	</tr>
</thead>
<tbody>
	@foreach($periods as $period)
	<tr class="even pointer">
		<td class="a-center ">
			<input type="checkbox" class="tableflat" value='{{ $period->id }}' name='table_records[]'>
		</td>
		<td>
			{{ $period->name }}
		</td>
		<td class='text-center {!! $period->edit_form ? 'success' : 'danger' !!}'>
			{{ $period->start_at }}
		</td>
		<td class='text-center {!! $period->finish_at ? 'success' : 'danger' !!}'>
			{{ $period->finish_at }}
		</td>
		
		<td class=" last">
			<a href="{{ route('registration.periods.edit' ,$period->id)}}" class='btn btn-sm btn-success'>
				<i class="fa fa-edit"></i> @lang('global.edit')
			</a>
			<a href="{{ route('registration.periods.delete' ,$period->id)}}" class="btn btn-danger btn-sm">
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