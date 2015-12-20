@extends('layouts.master')
@section('content')

{{-- Start breadcrumbs --}}
{{--
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
    @lang('academycycle::semesters.create_semester' )
  </li>
</ol>
--}}
{{-- End breadcrumbs --}}

{!! Form::open(['route'=>['ac.semestereventtypes.store'] ,'method'=>'POST' ,'class'=>'form-horizontal']) !!}
    
@include('academycycle::semestereventtypes._fields')

{!! Form::close() !!}

@stop
