@extends('layouts.master')

@section('content')

<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
	<thead>
		<tr class="headings">
			<th>
				<input type="checkbox" id='check-all' class="tableflat">
			</th>
			<th>
				@lang('users::users.name')
			</th>
			<th class=" no-link last"><span class="nobr">
			<i class="fa fa-cog"></i>
			@lang('global.actions')
			</span>
		</th>
	</tr>
</thead>
<tbody>
	@foreach($Faculties as $Faculty)
	<tr class="even pointer">
		<td class="a-center ">
			<input type="checkbox" class="tableflat" value='{{ $user->id }}' name='table_records[]'>
		</td>
		<td>
			{{ $Faculty->name }}
		</td>
		<td class=" last">
			<a href="{{ route('users.edit' ,$user->id)}}" class='btn btn-sm btn-success'>
				<i class="fa fa-edit"></i> @lang('global.edit')
			</a>
			<a href="{{ route('users.delete' ,$user->id)}}" class="btn btn-danger btn-sm">
			<i class="fa fa-trash"></i> @lang('global.delete')
			</a>
			<a href="{{ route('users.show' ,$user->id)}}" class="btn btn-info btn-md">
			<i class="fa fa-table"></i> @lang('global.details')
			</a>
	</td>
	@endforeach
</tr>
</tbody>
</table>
@stop