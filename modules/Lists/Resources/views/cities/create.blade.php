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
  <li><a href="{{ route('countries.edit' ,$country->id) }}">
    {{ $country->name }}
    </a>
  </li>
  <li><a href="{{ route('cities.index') }}">
    @lang('lists::cities.header')
    </a>
  </li>
  <li class="active">
    @lang('lists::cities.create_city')
  </li>
</ol>
{{-- End breadcrumbs --}}

<div class="x_panel" style="min-height:600px;">
    <div class="x_title">
        <h2><i class="fa fa-plus"></i> @lang('lists::cities.create_city')</h2>
        <div class="clearfix"></div>
    </div>
    <br>
{!! Form::open(['route'=>['cities.store' ,$country->id] ,'method'=>'POST' ,'class'=>'form-horizontal']) !!}

    @include('lists::cities._fields')



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