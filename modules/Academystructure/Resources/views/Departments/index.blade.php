@extends('layouts.master')

@section('content')

<a href="{{ route('as.departments.create',$term->id) }}" class="btn btn-primary pull-left">
	<i class="fa fa-plus"></i> @lang('academystructure::departments.create_term')
</a>
<div class="clearfix"></div>
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
	<thead>
		<tr class="headings">
			<th width="5%"> 
				<input type="checkbox" id='check-all' class="tableflat">
			</th>
			<th width="30%">
				{{ trans('academystructure::departments.name') }}
			</th>
			<th width="10%">
				{{ trans('academystructure::departments.code') }}
			</th>
			<th width="20%">
				{{ trans('academystructure::departments.parent_id') }}
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
<!--			<th width="25%" class=" no-link last">
            <span class="nobr">
			<i class="fa fa-table"></i> {{ trans('academystructure::departments.name') }}
			</span>
			</th>-->
	</tr>
</thead>
<tbody>
	@foreach($departments as $department)
	<tr class="even pointer">
		<td class="a-center ">
			<input type="checkbox" class="tableflat" value='{{ $department->id }}' name='table_records[]'>
		</td>
		<td>
			{{ $department->name }}
		</td>
		<td>
			{{ $department->code }}
		</td>
		<td>
			{{ $department->parent_id }}
		</td>
		<td align="center">
			<a href="{{ route('as.departments.edit' ,$department->id)}}" class='btn btn-sm btn-success'>
				<i class="fa fa-edit"></i> @lang('global.edit')
			</a>
		</td>
		<td align="center">
			<a href="{{ route('as.departments.delete' ,$department->id)}}" class="btn btn-danger btn-sm">
			<i class="fa fa-trash"></i> @lang('global.delete')
			</a>
		</td>
<!--		<td align="center">
			<a href="{{ route('as.departments.index' ,$term->id)}}" class="btn btn-info btn-md">
			<i class="fa fa-table"></i> {{ trans('academystructure::departments.name') }}
			</a>
        </td>-->
    </tr>
	@endforeach
</tbody>
</table>

@stop