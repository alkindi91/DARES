@extends('layouts.master')
@section('content')
 <div class="x_panel" style="min-height:600px;">
<div class="x_title">
    <h2>@lang('users::roles.header')</h2>

<div class="clearfix"></div>
</div>
@permission('create.roles')
<a href="{{ route('roles.create') }}" class="btn btn-primary pull-left">
	<i class="fa fa-plus"></i> @lang('global.new')
</a>
@endif
<div class="clearfix"></div>
<br />
{!! Form::open(['route'=>'roles.delete-bulk' ,'method'=>'GET']) !!}
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
	<thead>
		<tr class="headings">
			<th>
				<input type="checkbox" id='check-all' class="tableflat">
			</th>
			<th>
				@lang('users::roles.name')
			</th>
			
			<th class=" no-link last"><span class="nobr">
			<i class="fa fa-cog"></i>
			@lang('global.actions')
			</span>
		</th>
	</tr>
</thead>
<tbody>
	@foreach($roles as $role)
	<tr class="even pointer">
		<td class="a-center ">
			<input type="checkbox" class="tableflat" value='{{ $role->id }}' name='table_records[]'>
		</td>
		<td>
			{{ $role->name }}
		</td>
		
		<td class=" last">
			<a href="{{ route('roles.edit' ,$role->id)}}" class='btn btn-sm btn-success'>
				<i class="fa fa-edit"></i> @lang('global.edit')
			</a>
			<a href="{{ route('roles.delete' ,$role->id)}}" class="btn btn-danger btn-sm">
			<i class="fa fa-trash"></i> @lang('global.delete')
			</a>
			<a href="{{ route('roles.show' ,$role->id)}}" class="btn btn-info btn-md">
			<i class="fa fa-table"></i> @lang('global.details')
			</a>
	</td>
	@endforeach
</tr>
</tbody>
</table>
<div class="bulk-actions">
<button id='js-delete-all' href="{{ route('roles.delete')}}" class="btn btn-danger">
<i class="fa fa-trash"></i> @lang('global.delete')
</button>
</div>
{!! Form::close() !!}
</div>
@stop