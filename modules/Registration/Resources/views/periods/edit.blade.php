@extends('layouts.master')
@section('content')

{{-- Start breadcrumbs --}}
<ol class="breadcrumb">
  <li><a href="{{ route('welcome')}}">@lang('global.home')</a></li>
  <li><a href="{{ route('registration.index') }}">
    @lang('registration::registration.header')
    </a>
  </li>
  
  <li><a href="{{ route('registration.periods.index') }}">
    @lang('registration::periods.header')
    </a>
  </li>
  <li class="active">
    @lang('registration::periods.edit_period' ,['name'=>$period->name])
  </li>
</ol>
{{-- End breadcrumbs --}}

<div class="x_panel" style="min-height:600px;">
    <div class="x_title">
        <h2><i class="fa fa-edit"></i> @lang('registration::periods.edit_period' ,['name'=>$period->name])</h2>
        <div class="clearfix"></div>
    </div>
    <br>
    {!! Form::model($period ,['route'=>['registration.periods.update' ,$period->id] ,'method'=>'POST' ,'class'=>'form-horizontal']) !!}


    @include('registration::periods._fields')
    

{!! Form::close() !!}
</div>
@stop
