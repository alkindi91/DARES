@extends('layouts.master')
@section('content')

{{-- Start breadcrumbs --}}
<ol class="breadcrumb">
  <li><a href="{{ route('welcome')}}">@lang('global.home')</a></li>
  <li><a href="{{ route('lists.index') }}">
    @lang('lists::lists.header')
    </a>
  </li>
  <li><a href="{{ route('countries.index') }}">
    @lang('lists::countries.header')
    </a>
  </li>
  <li><a href="{{ route('countries.edit' ,$city->country->id) }}">
    {{ $city->country->name }}
    </a>
  </li>
  <li><a href="{{ route('cities.index' ,$city->country->id) }}">
    @lang('lists::cities.header')
    </a>
  </li>
  <li><a href="{{ route('cities.edit' ,$city->id) }}">
    {{ $city->name }}
    </a>
  </li>
  <li class='active'>
    @lang('lists::states.header')
  </li>
</ol>
{{-- End breadcrumbs --}}

 <div class="x_panel" style="min-height:600px;">
<div class="x_title">
    <h2>@lang('lists::states.header')</h2>

<div class="clearfix"></div>
</div>
@permission('create.states')
<a href="{{ route('states.create' ,$city->id) }}" class="btn btn-primary pull-left">
	<i class="fa fa-plus"></i> @lang('global.new')
</a>
@endif
<div class="clearfix"></div>
<br />
@if(empty($states) or $states->isEmpty())
<div class="alert alert-info">
	<i class="fa fa-info"></i>
	@lang('lists::states.no_items', ['city_name'=>$city->name])
</div>
@else
{!! Form::open(['route'=>['states.delete-bulk' ,$city->id] ,'method'=>'GET']) !!}
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
	<thead>
		<tr class="headings">
			<th>
				<input type="checkbox" id='check-all' class="tableflat">
			</th>
			<th>
				@lang('lists::states.name')
			</th>
			
			<th class=" no-link last"><span class="nobr">
			<i class="fa fa-cog"></i>
			@lang('global.actions')
			</span>
		</th>
	</tr>
</thead>
<tbody>
	@foreach($states as $city)
	<tr class="even pointer">
		<td class="a-center ">
			<input type="checkbox" class="tableflat" value='{{ $city->id }}' name='table_records[]'>
		</td>
		<td>
			{{ $city->name }}
		</td>
		
		<td class=" last">
			<a href="{{ route('states.edit' ,$city->id)}}" class='btn btn-sm btn-success'>
				<i class="fa fa-edit"></i> @lang('global.edit')
			</a>
			<a href="{{ route('states.delete' ,$city->id)}}" class="btn btn-danger btn-sm">
			<i class="fa fa-trash"></i> @lang('global.delete')
			</a>
			
	</td>
	@endforeach
</tr>
</tbody>
</table>
<div class="bulk-actions">
<button id='js-delete-all' href="{{ route('states.delete')}}" class="btn btn-danger">
<i class="fa fa-trash"></i> @lang('global.delete')
</button>
</div>
@endif
{!! Form::close() !!}
</div>
@stop