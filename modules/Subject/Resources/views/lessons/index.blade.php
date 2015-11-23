@extends('layouts.master')

@section('content')
<a href="{{ route('subject.create_lesson') }}" class="btn btn-primary pull-left">
    <i class="fa fa-plus"></i> @lang('global.new')
</a>
{!! Form::open(['route'=>'subject.index']) !!}
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
    <thead>
        <tr class="headings">
            <th>
                <input type="checkbox" id='check-all' class="tableflat">
                اسم العنصر
            </th>
            <th>
            ترتيب العنصر
            </th>
            <th>
            نوع العنصر
            </th>
            <th>
                <i class="fa fa-envelope"></i>
                قيمة العنصر
            </th>
            <th class=" no-link last"><span class="nobr">
            <i class="fa fa-cog"></i>
            @lang('global.actions')
            </span>
        </th>
    </tr>
</thead>
<tbody>
    @foreach($tasks as $task)
    <tr class="even pointer">
        <td>
            {{ $task->name }}
        </td>
        <td>
            {{ $task->order }}
        </td>
        <td>
            {{ $task->type }}
        </td>
        <td>
            {{ $task->state}}
        </td>
        <td class=" last">
            <a href="{{ route('subject.edit_lesson' ,$task->id)}}" class='btn btn-sm btn-success'>
                <i class="fa fa-edit"></i> @lang('global.edit')
            </a>
            <a href="{{ route('subject.delete_lesson' ,$task->id)}}" class="btn btn-danger btn-sm">
            <i class="fa fa-trash"></i> @lang('global.delete')
            </a>
        </td>
    @endforeach
</tr>
</tbody>
</table>
@foreach($tasks as $task)

    <h3>{{ $task->title }}</h3>
    <p>{{ $task->name}}</p>
    <p>{{ $task->order}}</p>
    <p>{{ $task->state}}</p>
    <p>
        <a href="{{ route('subject.index', $task->id) }}" class="btn btn-info">View Task</a>
        <a href="{{ route('subject.edit_lesson', $task->id) }}" class="btn btn-primary">Edit Task</a>
    </p>
    <hr>
@endforeach
@stop