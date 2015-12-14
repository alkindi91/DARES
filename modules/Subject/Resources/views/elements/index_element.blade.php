@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
  <li><a href="{{ route('welcome')}}">@lang('global.home')</a></li>
   <li>
    @lang('subject::subject.Element')
  </li>
  <li class='active'>
    @lang('subject::subject.Add_element')
  </li>
</ol>
<a href="{{ route('elements.create',$lessonid) }}" class="btn btn-primary pull-left">
    <i class="fa fa-plus"></i> @lang('global.new')
</a>
<div class="x_title">
    @foreach ($elements as $element )
        <h2>{{$element->lesson_name->name}}</h2>
    @endforeach
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
@if($elements->isEmpty())
<div class="alert alert-info">
    لا توجد عناصر.
</div>
@else
{!! Form::open(['route'=>['elements.deleteBulk',$lessonid]]) !!}
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
    <thead>
        <tr class="headings">
            <th>
                <input type="checkbox" id='check-all' class="tableflat">
            </th>
            <th>
                @lang('subject::subject.Element_name')
            </th>
            <th>
            @lang('subject::subject.Element_order')
            </th>
            <th>
            @lang('subject::subject.Element_type')
            </th>
            <th>
                <i class="fa fa-envelope"></i>
                @lang('subject::subject.Element_value')
            </th>
            <th>
            @lang('subject::subject.Element_state')
            </th>
            <th class=" no-link last"><span class="nobr">
            <i class="fa fa-cog"></i>
            @lang('global.actions')
            </span>
        </th>
    </tr>
</thead>
<tbody>
    @foreach($elements as $element)
    <tr class="even pointer">
    <td class="a-center ">
            <input type="checkbox" class="tableflat" value='{{ $element->id }}' name='table_records[]'>
        </td>
        <td>
            {{ $element->title }}
        </td>
        <td>
            {{ $element->element_order }}
        </td>
        <td>
            {{ $element->type }}
        </td>
        <td>
            {{ $element->value}}
        </td>
        <td>
            {{ $element->state}}
        </td>
        <td class=" last">
            <a href="{{ route('elements.edit' ,$element->id)}}" class='btn btn-sm btn-success'>
                <i class="fa fa-edit"></i> @lang('global.edit')
            </a>
            <a href="{{ route('elements.delete' ,$element->id)}}" class="btn btn-danger btn-sm">
            <i class="fa fa-trash"></i> @lang('global.delete')
            </a>
        </td>
    @endforeach
</tr>
</tbody>
</table>
<div class="bulk-actions">
<button id='js-delete-all' href="{{ route('elements.deleteBulk')}}" class="btn btn-danger">
<i class="fa fa-trash"></i> @lang('global.delete')
</button>
</div>
@endif
@stop