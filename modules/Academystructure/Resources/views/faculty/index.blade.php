@extends('layouts.master')

@section('content')
<a href="{{ route('faculty.create') }}" class="btn btn-primary pull-left">
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
				faculty name
			</th>
			<th class=" no-link last"><span class="nobr">
			<i class="fa fa-cog"></i>
			links
			</span>
		</th>
	</tr>
</thead>
<tbody>
	@foreach($faculties as $faculty)
	<tr class="even pointer">
		<td class="a-center ">
			<input type="checkbox" class="tableflat" value='{{ $faculty->id }}' name='table_records[]'>
		</td>
		<td>
			{{ $faculty->name }}
		</td>
		<td class=" last">
			<a href="{{ route('faculty.edit' ,$faculty->id)}}" class='btn btn-sm btn-success'>
				<i class="fa fa-edit"></i> edit
			</a>
			<a href="{{ route('faculty.delete' ,$faculty->id)}}" class="btn btn-danger btn-sm">
			<i class="fa fa-trash"></i> delete
			</a>
        </td>
    </tr>
	@endforeach
</tbody>
</table>
@stop