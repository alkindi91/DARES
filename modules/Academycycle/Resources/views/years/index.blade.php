@extends('layouts.master')
@section('content')

{{-- Start breadcrumbs --}}
<ol class="breadcrumb">
  <li><a href="{{ route('welcome')}}">@lang('global.home')</a></li>
  <li><a href="{{ route('academycycle.index') }}">
  	@lang('academycycle::academycycle.header')
  	</a>
  </li>
  <li class="active">
	@lang('academycycle::years.header')
  </li>
</ol>
{{-- End breadcrumbs --}}
 <div class="x_panel" style="min-height:600px;">
<div class="x_title">
    <h2><i class="fa fa-calendar"></i> @lang('academycycle::years.header')</h2>

<div class="clearfix"></div>
</div>
@permission('create.academycycle.years')
<a href="{{ route('academycycle.years.create') }}" class="btn btn-primary pull-left">
	<i class="fa fa-plus"></i> @lang('global.new')
</a>
@endif
<div class="clearfix"></div>
<br />
@if($years->isEmpty())
<div class="alert alert-info">
	<i class="fa fa-info"></i> @lang('academycycle::years.no_items')
</div>
@else
{!! Form::open(['route'=>'academycycle.years.delete-bulk' ,'method'=>'GET']) !!}
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
	<thead>
		<tr class="headings">
			<th>
				<input type="checkbox" id='check-all' class="tableflat">
			</th>
			<th>
				@lang('academycycle::years.name')
			</th>
			<th>
				<i class="fa fa-calendar"></i> @lang('academycycle::years.start_at')
			</th>
			<th>
				<i class="fa fa-calendar"></i> @lang('academycycle::years.finish_at')
			</th>
			
			
			<th class=" no-link last"><span class="nobr">
			<i class="fa fa-cog"></i>
			@lang('global.actions')
			</span>
		</th>
	</tr>
</thead>
<tbody>
	@foreach($years as $year)
	<tr class="even pointer">
		<td class="a-center ">
			<input type="checkbox" class="tableflat" value='{{ $year->id }}' name='table_records[]'>
		</td>
		<td>
			{{ $year->name }}
		</td>
		<td class='text-center {!! $year->edit_form ? 'success' : 'danger' !!}'>
			{{ $year->start_at }}
		</td>
		<td class='text-center {!! $year->finish_at ? 'success' : 'danger' !!}'>
			{{ $year->finish_at }}
		</td>
		
		<td class=" last">
			<a href="{{ route('academycycle.years.edit' ,$year->id)}}" class='btn btn-sm btn-success'>
				<i class="fa fa-edit"></i> @lang('global.edit')
			</a>
			<a href="{{ route('academycycle.years.delete' ,$year->id)}}" class="btn btn-danger btn-sm">
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