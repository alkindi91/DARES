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

@permission('subject.create.subject')
<a href="{{ route('subject.create') }}" class="btn btn-primary pull-left">
    <i class="fa fa-plus"></i> @lang('global.new')
</a>
@endpermission

{!! Form::open(['route'=>'subject.index']) !!}
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
            <th>
                <i class="fa fa-dot-circle-o"></i>
                @lang('subject::subject.Lesson_state')
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
            {{ $subject->term_id }}
        </td>
        <td>
            {{ $subject->type }}
        </td>
        <td>
            {{ $subject->code}}
        </td>
        <td class=" last">
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
             <a href="{{ route('elements.index' ,$subject->id)}}" class="btn btn-info btn-md">
            <i class="fa fa-table"></i> @lang('subject::subject.Show_elements')
            </a>
             @endpermission
        </td>
    @endforeach
</tr>
</tbody>
</table>
<div class="bulk-actions">
@permission('subject.delete.subject')
<button id='js-delete-all' href="{{ route('subject.delete' ,$subject->id)}}" class="btn btn-danger">
<i class="fa fa-trash"></i> @lang('global.delete')
</button>
@endpermission
</div>
@stop