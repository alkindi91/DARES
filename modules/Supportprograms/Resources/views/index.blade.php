@extends('layouts.master')

@section('content')
{{-- Start breadcrumbs --}}
<ol class="breadcrumb">
  <li><a href="{{ route('welcome')}}">@lang('global.home')</a></li>
   <li class='active'>
       @lang('supportprograms::programs.header')
  </li>
 
</ol>
{{-- End breadcrumbs --}}

 <div class="x_panel" style="min-height:600px;">
<div class="x_title">
    <h2>@lang('supportprograms::programs.header')</h2>

<div class="clearfix"></div>
</div>

@permission('create.supportprograms')
<a href="{{ route('supportprograms.create') }}" class="btn btn-primary pull-left">
	<i class="fa fa-plus"></i> @lang('global.new')
</a>
@endpermission

<div class="clearfix"></div>
@if($programs->isEmpty())
 <div class="alert alert-info">
     <i class="fa fa-info"></i> لا يوجد اي برامج مساندة ، بامكانك اضافة برامج جديدة من الزر جانبه.
 </div>
@else
{!! Form::open(['route'=>'supportprograms.deletebulk']) !!}
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
    <thead>
        <tr class="headings">
            <th>
                <input type="checkbox" id='check-all' class="tableflat">
            </th>
            <th>
                @lang('supportprograms::programs.name')
            </th>
            <th>
            @lang('supportprograms::programs.comment')
            </th>
            <th>
            @lang('supportprograms::programs.program_link')
            </th>
            <th>
            @lang('supportprograms::programs.guide_link')
            </th>
            <th class=" no-link last"><span class="nobr">
            <i class="fa fa-cog"></i>
            @lang('global.actions')
            </span>
        </th>
    </tr>
</thead>
<tbody>
    @foreach($programs as $program)
    <tr class="even pointer">
    <td class="a-center ">
            <input type="checkbox" class="tableflat" value='{{ $program->id }}' name='table_records[]'>
        </td>
        <td class="a-center ">
            {{ $program->name }}
        </td>
        <td>
            {{ $program->comment }}
        </td>
        <td>
        <a href="{{ $program->program_link }}"  class="btn btn-primary btn-sm">
        <i class="fa fa-download"></i> تنزيل</a>
        </td>
        <td>
         <a href="{{ $program->guide_link}}" class='btn btn-primary btn-sm'>
         <i class="fa fa-download"></i> تنزيل</a>
        </td>
        <td class=" last">
			<a href="{{ route('supportprograms.edit' ,$program->id)}}" class='btn btn-sm btn-success'>
				<i class="fa fa-edit"></i> @lang('global.edit')
			</a>
			<a href="{{ route('supportprograms.delete' ,$program->id)}}" class="btn btn-danger btn-sm">
			<i class="fa fa-trash"></i> @lang('global.delete')
			</a>
			
	</td>
    @endforeach
</tr>
</tbody>
</table>
<div class="bulk-actions">
<button id='js-delete-all'  class="btn btn-danger">
<i class="fa fa-trash"></i> @lang('global.delete')
</button>
</div>
{!! Form::close() !!}
@endif
</div>
@stop