@extends('layouts.master')

@section('content')

 <div class="x_panel" style="min-height:600px;">
<div class="x_title">
    <h2>{{ $user->name }}</h2>

<div class="clearfix"></div>
</div>
<a href="{{ route('users.edit' ,$user->id) }}" class="btn btn-success pull-left">
	<i class="fa fa-edit"></i> @lang('global.edit')
</a>
<div class="clearfix"></div>
	<table class="table table-bordered table-hover table-striped">
				<tr>
					<td>الاسم</td>
					<td>{{ $user->name }}</td>
				</tr>
				<tr>
					<td>البريد الالكتروني</td>
					<td>{{ $user->email }}</td>
				</tr>
				<tr>
					<td>الجنس</td>
					<td>{{ $user->sex=='m' ? 'ذكر' :'انثى' }}</td>
				</tr>
				<tr>
					<td>اضيف في</td>
					<td>{{ $user->created_at->format('d/m/Y') }}</td>
				</tr>
				<tr>
					<td>آخر تحديث</td>
					<td>{{ $user->updated_at->format('d/m/Y') }}</td>
				</tr>
				<tr>
					<td>
						الصلاحيات
					</td>
					<td>
						@foreach($user->getPermissions() as $permission) 
							<span class="label label-info">{{ $permission->name }}</span>
						@endforeach
					</td>
				</tr>
			
	</table>
</div>
@stop