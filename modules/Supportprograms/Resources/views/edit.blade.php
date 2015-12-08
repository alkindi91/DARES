@extends('layouts.master')

@section('content')
@section('content')
{{-- Start breadcrumbs --}}
<ol class="breadcrumb">
  <li><a href="{{ route('welcome')}}">@lang('global.home')</a></li>
   <li>
       <a href="{{ route('supportprograms.index')}}">@lang('supportprograms::programs.header')</a>
  </li>
  <li class='active'>
   @lang('supportprograms::programs.edit_program')
  </li>
</ol>
{{-- End breadcrumbs --}}

 <div class="x_panel" style="min-height:600px;">
<div class="x_title">
    <h2>@lang('supportprograms::programs.header')</h2>

<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
{!! Form::model($program,['route'=>['supportprograms.update', $program->id],'class'=>'form-horizontal form-label-left'])!!}

   @include('supportprograms::_fields')

	{!!Form::close()!!}
</div>
@stop