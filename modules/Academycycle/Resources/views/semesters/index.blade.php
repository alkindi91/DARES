@extends('layouts.master')
@section('content')

{{-- Start breadcrumbs --}}

<ol class="breadcrumb">
	<li><a href="{{ route('welcome')}}">@lang('global.home')</a></li>
	<li>
		@lang('academycycle::academycycle.header')
    </li>
    <li class="active">
        @lang('academycycle::semesters.header')
    </li>
</ol>

{{-- End breadcrumbs --}}


<div class="x_panel" style="min-height:600px;">
<div class="x_title">
	<h2><i class="fa fa-calendar"></i> @lang('academycycle::semesters.header')</h2>
	<div class="clearfix"></div>
</div>

<a href="{{ route('ac.semesters.create' , $yid) }}" class="btn btn-primary pull-left">
	<i class="fa fa-plus"></i> @lang('academycycle::semesters.create_semester')
</a>
<div class="clearfix"></div>

{!! Form::open(['route'=>['ac.semesters.delete-bulk'] ,'method'=>'GET']) !!}
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
	<thead>
		<tr class="headings">
			<th>
				<input type="checkbox" id='check-all' class="tableflat">
			</th>
			<th>
				@lang('academycycle::semesters.name')
			</th>
			<th>
				<i class="fa fa-calendar"></i> @lang('academycycle::semesters.start_at')
			</th>
			<th>
				<i class="fa fa-calendar"></i> @lang('academycycle::semesters.finish_at')
			</th>
			
			
			<th class=" no-link last"><span class="nobr">
				<i class="fa fa-cog"></i>
				@lang('global.actions')
			</span>
		</th>
	</tr>
</thead>
<tbody>
	@foreach($semesters as $semester)
	<tr class="even pointer">
		<td class="a-center ">
			<input type="checkbox" class="tableflat" value='{{ $semester->id }}' name='table_records[]'>
		</td>
		<td>
			{{ $semester->name }}
		</td>
		<td class='text-center {!! $semester->start_at ? 'success' : 'danger' !!}'>
			{{ $semester->start_at }}
		</td>
		<td class='text-center {!! $semester->finish_at ? 'success' : 'danger' !!}'>
			{{ $semester->finish_at }}
		</td>
		
		<td class=" last">
			<a href="{{ route('ac.semesters.edit' ,$semester->id)}}" class='btn btn-sm btn-success'>
				<i class="fa fa-edit"></i> @lang('global.edit')
			</a>
			<a href="{{ route('ac.semesters.delete' ,$semester->id)}}" class="btn btn-danger btn-sm">
				<i class="fa fa-trash"></i> @lang('global.delete')
			</a>
			<a href="{{ route('ac.semesters.delete' ,$semester->id)}}" class="btn btn-info btn-md">
				<i class="fa fa-table"></i> الاختبارات
			</a>
			<a href="{{ route('ac.semesters.delete' ,$semester->id)}}" class="btn btn-info btn-md">
				<i class="fa fa-table"></i> لااحداث والفترات
			</a>
			
		</td>
		@endforeach
	</tr>
</tbody>
</table>
<div class="bulk-actions">
<button id='js-delete-all' class="btn btn-danger">
<i class="fa fa-trash"></i> @lang('global.delete')
</button>
</div>
{!! Form::close() !!}
</div>
@stop
