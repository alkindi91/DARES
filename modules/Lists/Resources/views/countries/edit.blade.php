@extends('layouts.master')
@section('content')

{{-- Start breadcrumbs --}}
<ol class="breadcrumb">
  <li><a href="{{ route('welcome')}}">@lang('global.home')</a></li>
  <li><a href="{{ route('lists.index') }}">
    @lang('lists::lists.header')
    </a>
  </li>
  <li><a href="{{ route('countries.index') }}">
    @lang('lists::countries.header')
    </a>
  </li>
  <li class="active">
    @lang('lists::countries.edit_country', ['name'=>$country->name])
  </li>
</ol>
{{-- End breadcrumbs --}}

<div class="x_panel" style="min-height:600px;">
    <div class="x_title">
        <h2><i class="fa fa-edit"></i> @lang('lists::countries.edit_country' ,['name'=>$country->name])</h2>
        <div class="clearfix"></div>
    </div>
    <br>
    {!! Form::model($country ,['route'=>['countries.update' ,$country->id] ,'method'=>'POST' ,'class'=>'form-horizontal' ,'data-parsley-validate']) !!}

<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('countries.index') }}" class="btn btn-primary pull-left">
        <i class="fa fa-times"></i> @lang('global.cancel')</a>
        <button type="submit" class="btn btn-success pull-left">
        <i class="fa fa-save"></i> @lang('global.save')</button>
    </div>
</div>
<div class="ln_solid"></div>

    @include('lists::countries._fields')
    
<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('countries.index') }}" class="btn btn-primary pull-left">
        <i class="fa fa-times"></i> @lang('global.cancel')</a>
        <button type="submit" class="btn btn-success pull-left">
        <i class="fa fa-save"></i> @lang('global.save')</button>
    </div>
</div>
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