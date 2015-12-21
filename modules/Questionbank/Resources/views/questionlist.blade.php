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
             السؤال
            </th>
            
            <th>
           نوع السؤال
            </th>
            
            <th>
            درجة الصعوبة
              </th>
           
            <th>
            <i class="fa fa-reorder"></i>
            القياس
            </th>
           
            <th class=" no-link last"><span class="nobr">
            <i class="fa fa-cog"></i>
           العمليات
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
         
            <a href="{{ route('choice.index' ,$question->id)}}" class="btn btn-success btn-md">
            <i class="fa fa-table"></i> عرض الإجابات
            </a>

            <a href="{{ route('choice.create',$question->id) }}" class="btn btn-primary pull-md">
   			 <i class="fa fa-plus"></i> إضافة اجابة جديدة 
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