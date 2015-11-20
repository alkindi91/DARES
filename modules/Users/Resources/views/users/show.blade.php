@extends('layouts.master')

@section('content')

{{-- Start breadcrumbs --}}
<ol class="breadcrumb">
  <li><a href="{{ route('welcome')}}">@lang('global.home')</a></li>
   <li>
    النظام
  </li>
  <li>
  <a href="{{ route('users.index')}}">
    @lang('users::users.header')
    </a>
  </li>
  <li class='active'>
    @lang('users::users.user_details' ,['name'=>$user->name])
    
  </li>
</ol>
{{-- End breadcrumbs --}}

<div class="x_panel" style="min-height:600px;">
<div class="x_title">
    <h2>{{ $user->name }}</h2>

<div class="clearfix"></div>
</div>
<a href="{{ route('users.edit' ,$user->id) }}" class="btn btn-success pull-left">
	<i class="fa fa-plus"></i> @lang('global.edit')
</a>
<div class="clearfix"></div>
<div class="x_content">
	<table class="table table-hover table-bordered table-striped">
		<tbody>
		<tr>
			<td>صورة شخصية</td>
			<td>
				@if($user->avatar->size())
				<img class='img-circle' src="{{ asset($user->avatar->url('thumb')) }}" alt="{{ $user->name }}">
				@else
				<span class="label label-info"><i class="fa fa-info-circle"></i> لا يوجد صورة شخصية</span>
				@endif
			</td>
		</tr>
		<tr>
			<td>الاسم الكامل</td>
			<td>{{ $user->name }}</td>
		</tr>
		<tr>
			<td>البريد الإلكتروني</td>
			<td>{{ $user->email }}</td>
		</tr>
		<tr>
			<td>الجنس</td>
			<td>{{ $user->sex=='m' ? 'ذكر' : 'انثى' }}</td>
		</tr>
		<tr>
			<td>اضيف في</td>
			<td>{{ $user->created_at->format('d-m-Y') }}</td>
		</tr>
		<tr>
			<td>الصلاحيات</td>
			<td>
				@foreach($user->getPermissions() as $permission)
				<div class="label label-info" style='display: inline-block;padding: 5px;margin: 2px;'>
					{{ $permission->name }}
				</div>&nbsp;
				@endforeach
			</td>
		</tr>
		</tbody>
	</table>
</div>
</div>
@stop