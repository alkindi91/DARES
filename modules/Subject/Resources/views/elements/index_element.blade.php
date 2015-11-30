@extends('layouts.master')

@section('content')
<a href="{{ route('elements.create',$id) }}" class="btn btn-primary pull-left">
    <i class="fa fa-plus"></i> @lang('global.new')
</a>

<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
    <thead>
        <tr class="headings">
            <th>
                <input type="checkbox" id='check-all' class="tableflat">
            </th>
            <th>
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
    @foreach($elements as $element)
    <tr class="even pointer">
    <td class="a-center ">
            <input type="checkbox" class="tableflat" value='{{ $element->id }}' name='table_records[]'>
        </td>
        <td>
            {{ $element->title }}
        </td>
        <td>
            {{ $element->order }}
        </td>
        <td>
            {{ $element->type }}
        </td>
        <td>
            {{ $element->value}}
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
<button id='js-delete-all' href="{{ route('subject.delete_lesson' ,$element->id)}}" class="btn btn-danger">
<i class="fa fa-trash"></i> @lang('global.delete')
</button>
</div>
@stop