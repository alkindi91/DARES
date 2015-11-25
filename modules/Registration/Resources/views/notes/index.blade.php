@extends('layouts.master')
@section('content')

{{-- Start breadcrumbs --}}
<ol class="breadcrumb">
  <li><a href="{{ route('welcome')}}">@lang('global.home')</a></li>
  <li><a href="{{ route('registration.index') }}">
  	@lang('registration::registration.header')
  	</a>
  </li>
  <li><a href="{{ route('registration.index' ,$step->id) }}">
  	@lang('registration::steps.header')
  	</a>
  </li>
  <li><a href="{{ route('registration.steps.edit' ,$step->id) }}">
  	{{ $step->name }}
  	</a>
  </li>
  <li class="active">
	@lang('registration::notes.header')
  </li>
</ol>
{{-- End breadcrumbs --}}
 <div class="x_panel" style="min-height:600px;">
<div class="x_title">
    <h2><i class="fa fa-calendar"></i> @lang('registration::notes.header')</h2>

<div class="clearfix"></div>
</div>
@permission('create.registration.notes')
<a href="{{ route('registration.notes.create' ,$step->id) }}" class="btn btn-primary pull-left">
	<i class="fa fa-plus"></i> @lang('global.new')
</a>
@endif
<div class="clearfix"></div>
<br />
@if($notes->isEmpty())
<div class="alert alert-info">
	<i class="fa fa-info"></i> @lang('registration::notes.no_items')
</div>
@else
{!! Form::open(['route'=>['registration.notes.delete-bulk' ,$step->id] ,'method'=>'GET']) !!}
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
	<thead>
		<tr class="headings">
			<th class='column-title'>
				<input type="checkbox" id='check-all' class="tableflat">
			</th>
			<th class='column-title'>
				@lang('registration::notes.content')
			</th>
			
			
			
			<th class="column-title no-link last"><span class="nobr">
			<i class="fa fa-cog"></i>
			@lang('global.actions')
			</span>
		</th>
	</tr>
</thead>
<tbody>
	@foreach($notes as $note)
	<tr class="even pointer">
		<td class="a-center ">
			<input type="checkbox" class="tableflat" value='{{ $note->id }}' name='table_records[]'>
		</td>
		<td>
			{{ $note->content }}
		</td>
		
		
		<td class=" last">
			<a href="{{ route('registration.notes.edit' ,$note->id)}}" class='btn btn-sm btn-success'>
				<i class="fa fa-edit"></i> @lang('global.edit')
			</a>
			<a href="{{ route('registration.notes.delete' ,$note->id)}}" class="btn btn-danger btn-sm">
			<i class="fa fa-trash"></i> @lang('global.delete')
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
@endif
{!! Form::close() !!}
</div>
@stop