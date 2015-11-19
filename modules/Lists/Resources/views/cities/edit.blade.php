@extends('layouts.master')
@section('content')
<div class="x_panel" style="min-height:600px;">
    <div class="x_title">
        <h2>@lang('lists::countries.edit_country' ,['name'=>$country->name])</h2>
        <div class="clearfix"></div>
    </div>
    <br>
    {!! Form::model($country ,['route'=>['countries.update' ,$country->id] ,'method'=>'POST' ,'class'=>'form-horizontal' ,'data-parsley-validate']) !!}
<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('countries.index') }}" class="btn btn-primary pull-left">@lang('global.cancel')</a>
        <button type="submit" class="btn btn-success pull-left">@lang('global.save')</button>
    </div>
</div>
<br>
    @include('lists::countries._fields')
    
<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('countries.index') }}" class="btn btn-primary pull-left">@lang('global.cancel')</a>
        <button type="submit" class="btn btn-success pull-left">@lang('global.save')</button>
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