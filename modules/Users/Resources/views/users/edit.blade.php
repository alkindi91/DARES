@extends('layouts.master')
@section('content')

{{-- Start breadcrumbs --}}
<ol class="breadcrumb">
  <li><a href="{{ route('welcome')}}">@lang('global.home')</a></li>
   <li>
    النظام
  </li>
  <li>
  <a href="{{ route('users.index')}}">
    @lang('users::users.header')
    </a>
  </li>
  <li class='active'>
    @lang('users::users.edit_user' ,['name'=>$user->name])
    
  </li>
</ol>
{{-- End breadcrumbs --}}

<div class="x_panel" style="min-height:600px;">
    <div class="x_title">
        <h2>@lang('users::users.edit_user' ,['name'=>$user->name])</h2>
        <div class="clearfix"></div>
    </div>
    <br>
    {!! Form::model($user ,['route'=>['users.update' ,$user->id] ,'files'=>true,'method'=>'POST' ,'class'=>'form-horizontal' ,'data-parsley-validate']) !!}
    <div class="form-group">
    <div class="col-md-12">
       
 <a href="{{ route('users.index') }}" class="btn btn-primary pull-left">
 <i class="fa fa-close"></i> @lang('global.cancel')</a>
 <button type="submit" class="btn btn-success pull-left">
 <i class="fa fa-save"></i> @lang('global.save')</button>
 <div class="clearfix"></div>
    </div>
    </div>
<div class="ln_solid"></div>
    @include('users::users._fields')
<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('users.index') }}" class="btn btn-primary pull-left">
        <i class="fa fa-close"></i> @lang('global.cancel')</a>
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
<script type="text/javascript" src="{{ asset('template/js/datepicker/daterangepicker.js') }}"></script>
<!-- switchery -->
<script src="{{ asset('template/js/switchery/switchery.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#birthday').daterangepicker({
            singleDatePicker: true,
            
            locale: {
                format: 'YYYY-MM-DD'
            },

        });
    });
</script>
@endsection

@section('head')
<!-- switchery -->
    <link rel="stylesheet" href="{{ asset('template/css/switchery/switchery.min.css') }}" />
@endsection