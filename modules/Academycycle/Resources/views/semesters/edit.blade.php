@extends('layouts.master')
@section('content')

{{-- Start breadcrumbs --}}
<ol class="breadcrumb">
  <li><a href="{{ route('welcome')}}">@lang('global.home')</a></li>
  <li><a href="{{ route('ac.semesters.index') }}">
    @lang('academycycle::academycycle.header')
    </a>
  </li>
  <li><a href="{{ route('ac.semesters.index') }}">
    @lang('academycycle::semesters.header')
    </a>
  </li>
  <li class="active">
    @lang('academycycle::semesters.edit_semester' ,['name'=>$Semester->name])
  </li>
</ol>
{{-- End breadcrumbs --}}

<div class="x_panel" style="min-height:600px;">
    <div class="x_title">
        <h2><i class="fa fa-edit"></i> @lang('academycycle::semesters.edit_semester' ,['name'=>$Semester->name])</h2>
        <div class="clearfix"></div>
    </div>
    <br>
    {!! Form::model($Semester ,['route'=>['ac.semesters.update' ,$Semester->id] ,'method'=>'POST' ,'class'=>'form-horizontal']) !!}


    @include('academycycle::semesters._fields')
      

{!! Form::close() !!}
</div>
@stop
