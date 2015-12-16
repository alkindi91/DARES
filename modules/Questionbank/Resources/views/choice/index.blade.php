@extends('layouts.master')

@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('welcome')}}">@lang('global.home')</a></li>
   <li>
    @lang('subject::subject.Subjects')
  </li>
  
</ol>


<div class="clearfix"></div>
@if($choices->isEmpty())
<div class="alert alert-info">
    لا توجد مواد.
</div>
@else
{!! Form::open(['route'=>'choice.deleteBulk']) !!}
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
    <thead>
        <tr class="headings">
            <th>
                <input type="checkbox" id='check-all' class="tableflat">
            </th>
            <th>
               الاجابة
            </th>
            <th>
            حالة الإجابة
            </th>
           
           
            <th class=" no-link last"><span class="nobr">
            <i class="fa fa-cog"></i>
            @lang('global.actions')
            </span>
        </th>
    </tr>
</thead>
<tbody>

    @foreach($choices as $choice)
    <tr class="even pointer">
    <td class="a-center ">
            <input type="checkbox" class="tableflat" value='{{ $choice->id }}' name='table_records[]'>
        </td>
        <td class="a-center ">
            {{ $choice->choice }}

        </td>
        <td>
            {{ $choice->isactive }}
        </td>
       
        <td class=" last">
         
            <a href="{{ route('choice.edit',$choice->id)}}" class="btn btn-success btn-md">
            <i class="fa fa-table"></i> تعديل
            </a>

            <a href="{{ route('choice.delete',$choice->id) }}" class="btn btn-danger pull-md">
   			 <i class="fa fa-plus"></i> حذف
			</a>
        </td>
    @endforeach
</tr>
</tbody>
</table>
<div class="bulk-actions">
<button id='js-delete-all' href="{{ route('choice.deleteBulk')}}" class="btn btn-danger">
<i class="fa fa-trash"></i> @lang('global.delete')
</button>
</div>
@endif
@stop