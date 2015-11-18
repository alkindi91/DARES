@extends('layouts.master')
@section('content')
<div class="x_panel" style="min-height:600px;">
    <div class="x_title">
        <h2>@lang('users::roles.edit_role' ,['name'=>$role->name])</h2>
        <div class="clearfix"></div>
    </div>
    <br>
    {!! Form::model($role ,['route'=>['roles.update' ,$role->id] ,'method'=>'POST' ,'class'=>'form-horizontal' ,'data-parsley-validate']) !!}
<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('roles.index') }}" class="btn btn-primary pull-left">@lang('global.cancel')</a>
        <button type="submit" class="btn btn-success pull-left">@lang('global.save')</button>
    </div>
</div>
<br>
    @include('users::roles._fields')
    
<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('roles.index') }}" class="btn btn-primary pull-left">@lang('global.cancel')</a>
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