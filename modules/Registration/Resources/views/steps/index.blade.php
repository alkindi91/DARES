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
	@lang('registration::steps.header')
  </li>
</ol>
{{-- End breadcrumbs --}}
 <div class="x_panel" style="min-height:600px;">
<div class="x_title">
    <h2><i class="fa fa-recycle"></i> @lang('registration::steps.header')</h2>

<div class="clearfix"></div>
</div>
@permission('create.registration.steps')
<a href="{{ route('registration.steps.create') }}" class="btn btn-primary pull-left">
	<i class="fa fa-plus"></i> @lang('global.new')
</a>
@endif
<div class="clearfix"></div>
<br />
@if($steps->isEmpty())
<div class="alert alert-info">
	<i class="fa fa-info"></i> @lang('registration::steps.no_items')
</div>
@else
{!! Form::open(['route'=>'registration.steps.delete-bulk' ,'method'=>'GET']) !!}
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
	<thead>
		<tr class="headings">
			<th>
				<input type="checkbox" id='check-all' class="tableflat">
			</th>
			<th>
				@lang('registration::steps.name')
			</th>
			<th>
				<i class="fa fa-edit"></i> @lang('registration::steps.edit_form')
			</th>
			<th>
				<i class="fa fa-upload"></i> @lang('registration::steps.upload_files')
			</th>
			<th>
				<i class="fa fa-envelope"></i> @lang('registration::steps.verify_email')
			</th>
			<th>
				<i class="fa fa-angle-double-left"></i> @lang('registration::steps.next_steps')
			</th>
			
			<th class=" no-link last"><span class="nobr">
			<i class="fa fa-cog"></i>
			@lang('global.actions')
			</span>
		</th>
	</tr>
</thead>
<tbody>
	@foreach($steps as $step)
	<tr class="even pointer">
		<td class="a-center ">
			<input type="checkbox" class="tableflat" value='{{ $step->id }}' name='table_records[]'>
		</td>
		<td>
			{{ $step->name }}
		</td>
		<td class='text-center {!! $step->edit_form ? 'success' : 'danger' !!}'>
			{!! $step->edit_form ? '<i class="glyphicon text-success glyphicon-ok"></i>' : '<i class="glyphicon text-danger glyphicon-remove"></i>' !!}
		</td>
		<td class='text-center {!! $step->upload_files ? 'success' : 'danger' !!}'>
			{!! $step->upload_files ? '<i class="glyphicon text-success glyphicon-ok"></i>' : '<i class="glyphicon text-danger glyphicon-remove"></i>' !!}
		</td>
		<td class='text-center {!! $step->verify_email ? 'success' : 'danger' !!}'>
			{!! $step->verify_email ? '<i class="glyphicon text-success glyphicon-ok"></i>' : '<i class="glyphicon text-danger glyphicon-remove"></i>' !!}
		</td>
		<td>
			@foreach($step->children as $nextstep)
				&nbsp;<a href='{{ route('registration.steps.edit' ,$nextstep->id)}}' class="label label-info">
					{{ $nextstep->name }}
				</a>
			@endforeach
		</td>
		<td class=" last">
			<a href="{{ route('registration.steps.edit' ,$step->id)}}" class='btn btn-sm btn-success'>
				<i class="fa fa-edit"></i> @lang('global.edit')
			</a>
			<a href="{{ route('registration.steps.delete' ,$step->id)}}" class="btn btn-danger btn-sm">
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