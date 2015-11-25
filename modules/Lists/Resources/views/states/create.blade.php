@extends('layouts.master')
@section('content')

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
  <li><a href="{{ route('countries.edit' ,$city->country->id) }}">
    {{ $city->country->name }}
    </a>
  </li>
  <li><a href="{{ route('cities.index' ,$city->country->id) }}">
    @lang('lists::cities.header')
    </a>
  </li>
  <li><a href="{{ route('cities.edit' ,$city->id) }}">
    {{ $city->name }}
    </a>
  </li>
  
  <li><a href="{{ route('states.index') }}">
    @lang('lists::states.header')
    </a>
  </li>
  <li class="active">
    @lang('lists::states.create_state')
  </li>
</ol>
{{-- End breadcrumbs --}}

<div class="x_panel" style="min-height:600px;">
    <div class="x_title">
        <h2><i class="fa fa-plus"></i> @lang('lists::states.create_state')</h2>
        <div class="clearfix"></div>
    </div>
    <br>
    {!! Form::open(['route'=>['states.store' ,$city->id] ,'method'=>'POST' ,'class'=>'form-horizontal']) !!}


    @include('lists::states._fields')



{!! Form::close() !!}
</div>
@stop
@section('footer')
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