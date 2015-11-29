@extends('layouts.master')

@section('content')

<a href="{{ route('as.terms.create',$year->id) }}" class="btn btn-primary pull-left">
	<i class="fa fa-plus"></i> @lang('academystructure::terms.create_term')
</a>
<div class="clearfix"></div>
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
	<thead>
		<tr class="headings">
			<th width="5%"> 
				<input type="checkbox" id='check-all' class="tableflat">
			</th>
			<th width="60%">
				{{ trans('academystructure::terms.name') }}
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
			<th width="25%" class=" no-link last">
            <span class="nobr">
			<i class="fa fa-table"></i> {{ trans('academystructure::terms.name') }}
			</span>
			</th>
	</tr>
</thead>
<tbody>
	@foreach($terms as $term)
	<tr class="even pointer">
		<td class="a-center ">
			<input type="checkbox" class="tableflat" value='{{ $year->id }}' name='table_records[]'>
		</td>
		<td>
			{{ $term->name }}
		</td>
		<td align="center">
			<a href="{{ route('as.terms.edit' ,$year->id)}}" class='btn btn-sm btn-success'>
				<i class="fa fa-edit"></i> @lang('global.edit')
			</a>
		</td>
		<td align="center">
			<a href="{{ route('as.terms.delete' ,$year->id)}}" class="btn btn-danger btn-sm">
			<i class="fa fa-trash"></i> @lang('global.delete')
			</a>
		</td>
		<td align="center">
			<a href="{{ route('as.terms.index' ,$year->id)}}" class="btn btn-info btn-md">
			<i class="fa fa-table"></i> {{ trans('academystructure::terms.name') }}
			</a>
        </td>
    </tr>
	@endforeach
</tbody>
</table>

@stop