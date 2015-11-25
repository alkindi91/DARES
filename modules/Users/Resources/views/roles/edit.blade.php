@extends('layouts.master')
@section('content')

{{-- Start breadcrumbs --}}
<ol class="breadcrumb">
  <li><a href="{{ route('welcome')}}">@lang('global.home')</a></li>
   <li>
    النظام
  </li>
  <li>
  <a href="{{ route('roles.index')}}">
    @lang('users::roles.header')
    </a>
  </li>
  <li class='active'>
    @lang('users::roles.edit_role' ,['name'=>$role->name])
    
  </li>
</ol>
{{-- End breadcrumbs --}}

<div class="x_panel" style="min-height:600px;">
    <div class="x_title">
        <h2>@lang('users::roles.edit_role' ,['name'=>$role->name])</h2>
        <div class="clearfix"></div>
    </div>
    <br>
    {!! Form::model($role ,['route'=>['roles.update' ,$role->id] ,'method'=>'POST' ,'class'=>'form-horizontal']) !!}

@include('users::roles._fields')    

{!! Form::close() !!}
</div>
@stop
@section('footer')
<!-- daterangepicker -->
<script type="text/javascript" src="{{ asset('template/js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/parsley/parsley.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/parsley/ar.js') }}"></script>
<!-- switchery -->
<script src="{{ asset('template/js/switchery/switchery.min.js') }}"></script>
@endsection

@section('head')
<!-- switchery -->
    <link rel="stylesheet" href="{{ asset('template/css/switchery/switchery.min.css') }}" />
@endsection