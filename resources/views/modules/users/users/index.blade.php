@extends('layouts.master')
@section('content')
 <div class="x_panel" style="min-height:600px;">
<div class="x_title">
    <h2>@lang('users::users.header')</h2>

<div class="clearfix"></div>
</div>
<a href="{{ route('users.create') }}" class="btn btn-primary pull-left">
	<i class="fa fa-plus"></i> @lang('global.new')
</a>
<div class="clearfix"></div>

{!! Form::open(['route'=>'users.index' ,'method'=>'GET' ,'class'=>'form-inline']) !!}
	<div class="form-group">
		{!! Form::label('email' ,trans('users::users.email')) !!}
		{!! Form::text('email' ,request('email') ,['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
	{!! Form::label('sex' ,trans('users::users.sex')) !!}
		{!! Form::select('sex' ,['m'=>trans('users::users.male') ,'f'=>trans('users::users.female')],request('sex'),['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		<button class='btn btn-info btn-md'>
			<i class="fa fa-search"></i> @lang('global.search')
		</button>
	</div>
{!! Form::close() !!}
<br>
{!! Form::open(['route'=>'users.delete-bulk' ,'method'=>'GET']) !!}
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
	<thead>
		<tr class="headings">
			<th>
				<input type="checkbox" id='check-all' class="tableflat">
			</th>
			<th>
				@lang('users::users.name')
			</th>
			<th>
				<i class="fa fa-envelope"></i>
				@lang('users::users.email')
			</th>
			
			<th>
				@lang('users::users.sex')
			</th>
			<th class=" no-link last"><span class="nobr">
			<i class="fa fa-cog"></i>
			@lang('global.actions')
			</span>
		</th>
	</tr>
</thead>
<tbody>
	@foreach($users as $user)
	<tr class="even pointer">
		<td class="a-center ">
			<input type="checkbox" class="tableflat" value='{{ $user->id }}' name='table_records[]'>
		</td>
		<td>
			{{ $user->name }}
		</td>
		<td>
			{{ $user->email }}
		</td>
		<td>
		<i class="fa fa-{{ $user->sex=='m' ? 'male' : 'female' }}"></i>
		{{ $user->sex=='m' ? trans('users::users.male') : trans('users::users.female') }}
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
<div class="bulk-actions">
<button id='js-delete-all' href="{{ route('users.delete' ,$user->id)}}" class="btn btn-danger">
<i class="fa fa-trash"></i> @lang('global.delete')
</button>
</div>
{!! Form::close() !!}
{!! str_replace('/?','?',$users->render()) !!}
</div>
@stop