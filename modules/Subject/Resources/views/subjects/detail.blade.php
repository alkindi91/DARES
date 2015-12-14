@extends('layouts.master')

@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('welcome')}}">@lang('global.home')</a></li>
   <li>
    @lang('subject::subject.Subjects')
  </li>
  
</ol>
<a href="{{ route('subject.index') }}" class="btn btn-primary pull-left">
<i class="fa fa-reply"></i>
@lang('subject::subject.return')
</a>
{!! Form::open(['route'=>'subject.deleteBulk']) !!}
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
    <thead>
        <tr class="headings">
            <th>
                <i class="fa fa-file-text-o"></i>
                @lang('subject::subject.Subject_description')
            </th>
    </tr>
</thead>
  <tbody>
    <tr class="even pointer">
     <td class="a-center ">
            {{ $subjects['description'] }}
     </td>
    </tr>
  </tbody>
</table>
<div class="bulk-actions">

<button id='js-delete-all' href="{{ route('subject.deleteBulk')}}" class="btn btn-danger">
<i class="fa fa-trash"></i> @lang('global.delete')
</button>

</div>
@stop