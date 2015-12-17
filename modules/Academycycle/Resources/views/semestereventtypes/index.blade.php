@extends('layouts.master')
@section('content')

<div class="x_panel" style="min-height:600px;">
<div class="x_title">
	<h2><i class="fa fa-calendar"></i> @lang('academycycle::semestereventtypes.header')</h2>
	<div class="clearfix"></div>
</div>

<a href="{{ route('ac.semestereventtypes.create') }}" class="btn btn-primary pull-left">
	<i class="fa fa-plus"></i> @lang('academycycle::semestereventtypes.create_event')
</a>
<div class="clearfix"></div>

{!! Form::open(['route'=>['ac.semestereventtypes.delete-bulk'] ,'method'=>'GET']) !!}
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
	<thead>
		<tr class="headings">
			<th>
				<input type="checkbox" id='check-all' class="tableflat">
			</th>
			<th>
				@lang('academycycle::semestereventtypes.name')
			</th>
			<th>
				<i class="fa fa-calendar"></i> @lang('academycycle::semestereventtypes.show')
			</th>
			<th>
				<i class="fa fa-calendar"></i> @lang('academycycle::semestereventtypes.category')
			</th>		
			<th class=" no-link last"><span class="nobr">
				<i class="fa fa-cog"></i>
				@lang('global.actions')
			</span>
		</th>
	</tr>
</thead>
<tbody>
	@foreach($types as $type)
	<tr class="even pointer">
		<td class="a-center ">
			<input type="checkbox" class="tableflat" value='{{ $type->id }}' name='table_records[]'>
		</td>
		<td>
			{{ $type->name }}
		</td>
		<td align="center" style="font-size:24px"> <li class="fa {!! $type->show ? 'fa-check-circle-o text-success' : 'fa-ban text-danger' !!}"></li>
		</td>
		<td>
			{{ config("academycycle.categories")[$type->category] }}
		</td>
		
		<td class=" last">
			<a href="{{ route('ac.semestereventtypes.edit' ,$type->id)}}" class='btn btn-sm btn-success'>
				<i class="fa fa-edit"></i> @lang('global.edit')
			</a>
			<a href="{{ route('ac.semestereventtypes.delete' ,$type->id)}}" class="btn btn-danger btn-sm">
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
{!! Form::close() !!}
</div>
@stop
