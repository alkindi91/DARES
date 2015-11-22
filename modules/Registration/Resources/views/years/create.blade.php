@extends('layouts.master')
@section('content')

{{-- Start breadcrumbs --}}
<ol class="breadcrumb">
  <li><a href="{{ route('welcome')}}">@lang('global.home')</a></li>
  <li><a href="{{ route('registration.index') }}">
    @lang('registration::registration.header')
    </a>
  </li>
  <li><a href="{{ route('registration.years.index') }}">
    @lang('registration::years.header')
    </a>
  </li>
  <li class="active">
    @lang('registration::years.create_year')
  </li>
</ol>
{{-- End breadcrumbs --}}

<div class="x_panel" style="min-height:600px;">
    <div class="x_title">
        <h2><i class="fa fa-plus"></i>  @lang('registration::years.create_year')</h2>
        <div class="clearfix"></div>
    </div>
    <br>
    {!! Form::open(['route'=>'registration.years.store' ,'method'=>'POST' ,'class'=>'form-horizontal' ,'data-parsley-validate']) !!}
 <div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('registration.years.index') }}" class="pull-left btn btn-primary">
          <i class="fa fa-times"></i> @lang('global.cancel')
        </a>
        <button type="submit" class="pull-left btn btn-success">
          <i class="fa fa-save"></i> @lang('global.save')
        </button>
    </div>
</div>  
<div class="ln_solid"></div>

    @include('registration::years._fields')

<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('registration.years.index') }}" class="pull-left btn btn-primary">
          <i class="fa fa-times"></i> @lang('global.cancel')
        </a>
        <button type="submit" class="pull-left btn btn-success">
          <i class="fa fa-save"></i> @lang('global.save')
        </button>
    </div>
</div>
{!! Form::close() !!}
</div>
@stop
