@extends('layouts.master')
@section('content')

{{-- Start breadcrumbs --}}
<ol class="breadcrumb">
  <li><a href="{{ route('welcome')}}">@lang('global.home')</a></li>
  <li><a href="{{ route('registration.index') }}">
    @lang('registration::registration.header')
    </a>
  </li>
   <li><a href="{{ route('registration.index' ,$step->id) }}">
    @lang('registration::steps.header')
    </a>
  </li>
  <li><a href="{{ route('registration.steps.edit' ,$step->id) }}">
    {{ $step->name }}
    </a>
  </li>
  <li><a href="{{ route('registration.notes.index') }}">
    @lang('registration::notes.header')
    </a>
  </li>
  <li class="active">
    @lang('registration::notes.create_note')
  </li>
</ol>
{{-- End breadcrumbs --}}

<div class="x_panel" style="min-height:600px;">
    <div class="x_title">
        <h2><i class="fa fa-plus"></i>  @lang('registration::notes.create_note')</h2>
        <div class="clearfix"></div>
    </div>
    <br>
    {!! Form::open(['route'=>['registration.notes.store' ,$step->id] ,'method'=>'POST' ,'class'=>'form-horizontal' ,'data-parsley-validate']) !!}


    @include('registration::notes._fields')


{!! Form::close() !!}
</div>
@stop
