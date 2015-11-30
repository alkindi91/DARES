@extends('layouts.master')

@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('welcome')}}">@lang('global.home')</a></li>
   <li>
    البرامج المساندة
  </li>
  <li class='active'>
    إضافة برنامج
  </li>
</ol>
{{-- End breadcrumbs --}}

 <div class="x_panel" style="min-height:600px;">
<div class="x_title">
    <h2>@lang('users::users.header')</h2>

<div class="clearfix"></div>
</div>
<a href="{{ route('supportprograms.create') }}" class="btn btn-primary pull-left">
	<i class="fa fa-plus"></i> @lang('global.new')
</a>
<div class="clearfix"></div>
{!! Form::open(['route'=>'supportprograms.index']) !!}
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
        <a href="{{ $program->program_link }}" style="color:#ff0000" class="">تنزيل</a>
        </td>
        <td>
         <a href="{{ $program->guide_link}}" style="color:#ff0000">تنزيل</a>
        </td>
        <td class=" last">
			<a href="{{ route('supportprograms.edit' ,$program->id)}}" class='btn btn-sm btn-success'>
				<i class="fa fa-edit"></i> @lang('global.edit')
			</a>
			<a href="{{ route('supportprograms.delete' ,$program->id)}}" class="btn btn-danger btn-sm">
			<i class="fa fa-trash"></i> @lang('global.delete')
			</a>
			<a href="{{ route('supportprograms.show' ,$program->id)}}" class="btn btn-info btn-md">
			<i class="fa fa-table"></i> @lang('global.details')
			</a>
	</td>
    @endforeach
</tr>
</tbody>
</table>
<div class="bulk-actions">

</div>
</div>
@stop