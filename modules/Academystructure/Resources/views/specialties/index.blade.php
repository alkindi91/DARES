@extends('layouts.master')

@section('content')

<a href="{{ route('as.specialties.create') }}" class="btn btn-primary pull-left">
	<i class="fa fa-plus"></i> @lang('academystructure::specialties.create_specialty')
</a>
<div class="clearfix"></div>
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
	<thead>
		<tr class="headings">
			<th width="5%"> 
				<input type="checkbox" id='check-all' class="tableflat">
			</th>
			<th width="30%">
				{{ trans('academystructure::specialties.name') }}
			</th>
			<th width="30%">
				{{ trans('academystructure::specialties.code') }}
			</th>
			<th width="10%" class=" no-link last">
            <span class="nobr">
			<i class="fa fa-edit"></i> @lang('global.edit')
			</span>
			</th>
			<th width="10%" class=" no-link last">
            <span class="nobr">
			<i class="fa fa-trash"></i> @lang('global.delete')
			</span>
			</th>
	</tr>
</thead>
<tbody>
	@foreach($specialties as $spec)
	<tr class="even pointer">
		<td class="a-center ">
			<input type="checkbox" class="tableflat" value='{{ $spec->id }}' name='table_records[]'>
		</td>
		<td>
			{{ $spec->name }}
		</td>
		<td>
			{{ $spec->code }}
		</td>
		<td align="center">
			<a href="{{ route('as.specialties.edit' ,$spec->id)}}" class='btn btn-sm btn-success'>
				<i class="fa fa-edit"></i> @lang('global.edit')
			</a>
		</td>
		<td align="center">
			<a href="{{ route('as.specialties.delete' ,$spec->id)}}" class="btn btn-danger btn-sm">
			<i class="fa fa-trash"></i> @lang('global.delete')
			</a>
		</td>
    </tr>
	@endforeach
</tbody>
</table>

@stop