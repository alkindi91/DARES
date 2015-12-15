@extends('layouts.master')

@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('welcome')}}">@lang('global.home')</a></li>
   <li>
   
  </li>
  
</ol>


<div class="clearfix"></div>
@if($questions->isEmpty())
<div class="alert alert-info">
    لا توجد مواد.
</div>
@else
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
    <thead>
        <tr class="headings">
            <th>
                <input type="checkbox" id='check-all' class="tableflat">
            </th>
            <th>
             
            </th>
            <th>
           
            </th>
            <th>
            <i class="fa fa-reorder"></i>
           
            </th>
           
            <th class=" no-link last"><span class="nobr">
            <i class="fa fa-cog"></i>
           
            </span>
        </th>
    </tr>
</thead>
<tbody>

    @foreach($questions as $question)
    <tr class="even pointer">
    <td class="a-center ">
            <input type="checkbox" class="tableflat" value='{{ $question->id }}' name='table_records[]'>
        </td>
        <td class="a-center ">
            {{ $question->question }}

        </td>
        <td>
            {{ $question->type }}
        </td>
        <td>
            {{ $question->difficulty }}
        </td>
        <td>
            {{ $question->level }}
        </td>
       
        <td class=" last">
         
            <a href="{{ route('questionbank.questionlist' ,$question->id)}}" class="btn btn-success btn-md">
            <i class="fa fa-table"></i> عرض اﻷسئلة
            </a>

            <a href="{{ route('questionbank.index_lesson',$question->id) }}" class="btn btn-primary pull-md">
   			 <i class="fa fa-plus"></i> إضافة سؤال جديد 
			</a>
        </td>
    @endforeach
</tr>
</tbody>
</table>
<div class="bulk-actions">

</div>
@endif
@stop