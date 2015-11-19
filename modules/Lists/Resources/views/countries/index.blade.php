@extends('layouts.master')
@section('content')
 <div class="x_panel" style="min-height:600px;">
<div class="x_title">
    <h2>@lang('lists::countries.header')</h2>

<div class="clearfix"></div>
</div>
@permission('create.countries')
<a href="{{ route('countries.create') }}" class="btn btn-primary pull-left">
	<i class="fa fa-plus"></i> @lang('global.new')
</a>
@endif
<div class="clearfix"></div>
<br />
{!! Form::open(['route'=>'countries.delete-bulk' ,'method'=>'GET']) !!}
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
	<thead>
		<tr class="headings">
			<th>
				<input type="checkbox" id='check-all' class="tableflat">
			</th>
			<th>
				@lang('lists::countries.name')
			</th>
			
			<th class=" no-link last"><span class="nobr">
			<i class="fa fa-cog"></i>
			@lang('global.actions')
			</span>
		</th>
	</tr>
</thead>
<tbody>
	@foreach($countries as $country)
	<tr class="even pointer">
		<td class="a-center ">
			<input type="checkbox" class="tableflat" value='{{ $country->id }}' name='table_records[]'>
		</td>
		<td>
			{{ $country->name }}
		</td>
		
		<td class=" last">
			<a href="{{ route('countries.edit' ,$country->id)}}" class='btn btn-sm btn-success'>
				<i class="fa fa-edit"></i> @lang('global.edit')
			</a>
			<a href="{{ route('countries.delete' ,$country->id)}}" class="btn btn-danger btn-sm">
			<i class="fa fa-trash"></i> @lang('global.delete')
			</a>
			<a href="{{ route('cities.index' ,$country->id)}}" class="btn btn-primary btn-md">
				<i class="fa fa-map-marker"></i> @lang('lists::cities.header')
			</a>
	</td>
	@endforeach
</tr>
</tbody>
</table>
<div class="bulk-actions">
<button id='js-delete-all' href="{{ route('countries.delete')}}" class="btn btn-danger">
<i class="fa fa-trash"></i> @lang('global.delete')
</button>
</div>
{!! Form::close() !!}
</div>
@stop