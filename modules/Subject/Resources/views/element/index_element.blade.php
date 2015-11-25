@extends('layouts.master')

@section('content')
<a href="{{ route('subject.create_element') }}" class="btn btn-primary pull-left">
    <i class="fa fa-plus"></i> @lang('global.new')
</a>

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
    @foreach($elements as $element)
    <tr class="even pointer">
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
            <a href="{{ route('subject.edit_element' ,$element->id)}}" class='btn btn-sm btn-success'>
                <i class="fa fa-edit"></i> @lang('global.edit')
            </a>
            <a href="{{ route('subject.delete_element' ,$element->id)}}" class="btn btn-danger btn-sm">
            <i class="fa fa-trash"></i> @lang('global.delete')
            </a>
        </td>
    @endforeach
</tr>
</tbody>
</table>

@stop