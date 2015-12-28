@extends('layouts.master')

@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('welcome')}}">@lang('global.home')</a></li>
   <li>
    @lang('subject::subject.Subjects')
  </li>
  
</ol>


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
                @lang('subject::subject.Subject_name')
            </th>
            <th>
            @lang('subject::subject.Subject_code')
            </th>
            <th>
            <i class="fa fa-reorder"></i>
            @lang('subject::subject.Subject_hour')
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
       
        <td class=" last">
         
            <a href="{{ route('questionbank.questionlistsub' ,$subject->id)}}" class="btn btn-success btn-md">
            <i class="fa fa-table"></i> عرض اﻷسئلة
            </a>

            <a href="{{ route('questionbank.index_lesson',$subject->id) }}" class="btn btn-primary pull-md">
   			 <i class="fa fa-plus"></i> عرض الدروس
			</a>

            <a href="{{ route('questionbank.createfromsub',$subject->id) }}" class="btn btn-primary pull-md">
             <i class="fa fa-plus"></i> إضافة سؤال جديد 
            </a>
        </td>
    @endforeach
</tr>
</tbody>
</table>
<div class="bulk-actions">
<button id='js-delete-all' href="{{ route('subject.deleteBulk')}}" class="btn btn-danger">
<i class="fa fa-trash"></i> @lang('global.delete')
</button>
</div>
@endif
@stop