@extends('layouts.master')

@section('content')
<a href="{{ route('as.years.create',$faculty->id) }}" class="btn btn-primary pull-left">
	<i class="fa fa-plus"></i> Craete
</a>
<div class="clearfix"></div>
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
	<thead>
		<tr class="headings">
			<th width="5%"> 
				<input type="checkbox" id='check-all' class="tableflat">
			</th>
			<th width="70%">
				year name
			</th>
			<th width="10%" class=" no-link last">
            <span class="nobr">
			<i class="fa fa-edit"></i> Edit
			</span>
			</th>
			<th width="10%" class=" no-link last">
            <span class="nobr">
			<i class="fa fa-trash"></i> Delete
			</span>
			</th>
			<th width="15%" class=" no-link last">
            <span class="nobr">
			<i class="fa fa-table"></i> Terms
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
		<td align="center">
			<a href="{{ route('as.years.edit' ,$year->id)}}" class='btn btn-sm btn-success'>
				<i class="fa fa-edit"></i> edit
			</a>
		</td>
		<td align="center">
			<a href="{{ route('as.years.delete' ,$year->id)}}" class="btn btn-danger btn-sm">
			<i class="fa fa-trash"></i> delete
			</a>
		</td>
		<td align="center">
			<a href="{{ route('as.terms.index' ,$year->id)}}" class="btn btn-info btn-md">
			<i class="fa fa-table"></i> term
			</a>
        </td>
    </tr>
	@endforeach
</tbody>
</table>
@stop