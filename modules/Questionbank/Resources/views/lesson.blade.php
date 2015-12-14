@extends('layouts.master')

@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('welcome')}}">@lang('global.home')</a></li>
   <li>
    @lang('subject::subject.Lesson')
  </li>
  <li class='active'>
    @lang('subject::subject.Add_lesson')
  </li>
</ol>

<a href="{{ route('subject.index') }}" class="btn btn-primary pull-left">
@lang('subject::subject.return')
</a>
<div class="x_title">
  
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
@if($lessons->isEmpty())
<div class="alert alert-info">
    لا يوجد اي دروس.
</div>
@else
{!! Form::open(['route'=>['lessons.deleteBulk']]) !!}
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
    <thead>
        <tr class="headings">
            <th>
                <input type="checkbox" id='check-all' class="tableflat">
            </th>
            <th>
                @lang('subject::subject.Lesson_name')
            </th>
            <th>
            <i class="fa fa-reorder"></i>
            @lang('subject::subject.Lesson_order')
            </th>
            <th>
            @lang('subject::subject.Lesson_type')
            </th>
          
            <th class=" no-link last"><span class="nobr">
            <i class="fa fa-cog"></i>
            @lang('global.actions')
            </span>
        </th>
    </tr>
</thead>
<tbody>
    @foreach($lessons as $lesson)
    <tr class="even pointer">
    <td class="a-center ">
            <input type="checkbox" class="tableflat" value='{{ $lesson->id }}' name='table_records[]'>
        </td>
        <td class="a-center ">
            {{ $lesson->name }}
        </td>
        <td>
            {{ $lesson->lesson_order }}
        </td>
        <td>
            {{ $lesson->type }}
        </td>
        
        <td class=" last">
           <a href="{{ route('questionbank.create',$lesson->id) }}" class="btn btn-primary pull-md">
             <i class="fa fa-plus"></i> إضافة سؤال جديد 
            </a>
             <a href="{{ route('elements.index' ,$lesson->id)}}" class="btn btn-info btn-md">
            <i class="fa fa-table"></i> عرض اﻷسئلة 
            </a>
        </td>
    @endforeach
</tr>
</tbody>
</table>
<div class="bulk-actions">
<button id='js-delete-all' href="{{ route('lessons.deleteBulk' )}}" class="btn btn-danger">
<i class="fa fa-trash"></i> @lang('global.delete')
</button>
</div>
@endif
@stop