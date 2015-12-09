@extends('layouts.master')

@section('content') 
<a href="{{ route('as.faculties.create') }}" class="btn btn-primary pull-left">
	<i class="fa fa-plus"></i> @lang('academystructure::faculties.create_faculty')
</a>
<div class="clearfix"></div>
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
	<thead>
		<tr class="headings">
			<th width="5%"> 
				<input type="checkbox" id='check-all' class="tableflat">
			</th>
			<th width="60%">
				@lang('academystructure::faculties.name')
			</th>
			<th class=" no-link last" width="10%">
            <span class="nobr">
			<i class="fa fa-cog"></i>
			@lang('global.edit') 
			</span>
			</th>
			<th class=" no-link last" width="10%">
            <span class="nobr">
			<i class="fa fa-cog"></i>
			@lang('global.delete') 
			</span>
			</th>
			<th class=" no-link last" width="15%">
            <span class="nobr">
			<i class="fa fa-cog"></i>
			@lang('academystructure::years.name') 
			</span>
			</th>
	</tr>
</thead>
<tbody>
	@foreach($faculties as $faculty)
	<tr class="even pointer">
		<td class="a-center"  align="center">
			<input type="checkbox" class="tableflat" value='{{ $faculty->id }}' name='table_records[]'>
		</td>
		<td>
			{{ $faculty->name }}
		</td>
		<td class=" last" align="center">
			<a href="{{ route('as.faculties.edit' ,$faculty->id)}}" class='btn btn-sm btn-success'>
				<i class="fa fa-edit"></i> @lang('global.edit')
			</a>
		</td>
		<td class=" last" align="center">
			<a href="{{ route('as.faculties.delete' ,$faculty->id)}}" class="btn btn-danger btn-sm">
			<i class="fa fa-trash"></i> @lang('global.delete')
			</a>
		</td>
		<td class=" last" align="center">
			<a href="{{ route('as.years.index' ,$faculty->id)}}" class="btn btn-info btn-md">
			<i class="fa fa-table"></i> @lang('academystructure::years.name')
			</a>
        </td>
    </tr>
	@endforeach
</tbody>
</table>
@stop