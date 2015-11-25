@extends('layouts.master')

@section('content')
<a href="{{ route('year.create',$faculty->id) }}" class="btn btn-primary pull-left">
	<i class="fa fa-plus"></i> Craete
</a>
<div class="clearfix"></div>
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
	<thead>
		<tr class="headings">
			<th> 
				<input type="checkbox" id='check-all' class="tableflat">
			</th>
			<th>
				year name
			</th>
			<th class=" no-link last"><span class="nobr">
			<i class="fa fa-cog"></i>
			links
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
		<td class=" last">
			<a href="{{ route('year.edit' ,$year->id)}}" class='btn btn-sm btn-success'>
				<i class="fa fa-edit"></i> edit
			</a>
			<a href="{{ route('year.delete' ,$year->id)}}" class="btn btn-danger btn-sm">
			<i class="fa fa-trash"></i> delete
			</a>
			<a href="{{ route('term.index' ,$year->id)}}" class="btn btn-danger btn-sm">
			<i class="fa fa-trash"></i> term
			</a>
        </td>
    </tr>
	@endforeach
</tbody>
</table>
@stop