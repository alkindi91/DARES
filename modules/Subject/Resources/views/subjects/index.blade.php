@extends('layouts.master')

@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('welcome')}}">@lang('global.home')</a></li>
   <li>
    @lang('subject::subject.Subjects')
  </li>
  
</ol>

@permission('subject.create.subject')
<a href="{{ route('subject.create') }}" class="btn btn-primary pull-left">
    <i class="fa fa-plus"></i> @lang('global.new')
</a>
@endpermission
<div class="clearfix"></div>
@if($subjects->isEmpty())
<div class="alert alert-info">
    لا توجد مواد.
</div>
@else
{!! Form::open(['route'=>'subject.deleteBulk']) !!}
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
    <thead>
        <tr class="headings">
            <th>
                <input type="checkbox" id='check-all' class="tableflat">
            </th>
            <th>
                <i class="fa fa-pencil-square-o"></i>
                @lang('subject::subject.Subject_name')
            </th>
            <th>
            <i class="fa fa-code"></i>
            @lang('subject::subject.Subject_code')
            </th>
            <th>
            <i class="fa fa-clock-o"></i>
            @lang('subject::subject.Subject_hour')
            </th>
            <th>
                <i class="fa fa-cubes"></i>
                @lang('subject::subject.Subject_type')
            </th>
            <th>
                <i class ="fa fa-info-circle"></i>
                @lang('subject::subject.Subject_pre_request')
            </th>               
            <th class=" no-link last"><span class="nobr">
            <i class="fa fa-cog"></i>
            @lang('global.actions')
            </span>
        </th>
    </tr>
</thead>
<tbody>

    @foreach($subjects as $subject)
    <tr class="even pointer">
    <td class="a-center ">
            <input type="checkbox" class="tableflat" value='{{ $subject->id }}' name='table_records[]'>
        </td>
        <td class="a-center ">
            {{ $subject->name }}

        </td>
        <td>
            {{ $subject->code }}
        </td>
        <td>
            {{ $subject->hour }}
        </td>
        <td>
            {{ $subject->type }}
        </td>
        <td  @if($subject->prerequest) class='info' @endif>
        @if($subject->prerequest)
            {{ $subject->prerequest->name }}
        @else
            {{'لا يوجد متطلب سابق'}}
        @endif
        </td>
        <td class=" last">
        <a href="{{ route('subject.detail' ,$subject->id)}}" class="btn btn-info btn-md">
            <i class="fa fa-file-text-o"></i> تفاصيل
            </a>
          @permission('subject.edit.subject')
            <a href="{{ route('subject.edit' ,$subject->id)}}" class='btn btn-sm btn-success'>
                <i class="fa fa-edit"></i> @lang('global.edit')
            </a>
          @endpermission
          @permission('subject.delete.subject')
            <a href="{{ route('subject.delete' ,$subject->id)}}" class="btn btn-danger btn-sm">
            <i class="fa fa-trash"></i> @lang('global.delete')
            </a>
          @endpermission
          @permission('subject.view.subject')
             <a href="{{ route('lessons.index' ,$subject->id)}}" class="btn btn-info btn-md">
            <i class="fa fa-table"></i> عرض الدروس
            </a>
             @endpermission
        </td>
    @endforeach
</tr>
</tbody>
</table>
<div class="bulk-actions">
@permission('subject.delete.subject')
<button id='js-delete-all' href="{{ route('subject.deleteBulk')}}" class="btn btn-danger">
<i class="fa fa-trash"></i> @lang('global.delete')
</button>
@endpermission
</div>
@endif
@stop