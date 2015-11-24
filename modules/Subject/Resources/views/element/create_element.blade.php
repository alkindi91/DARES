@extends('layouts.master')

@section('content')

{!! Form::open(['route'=>'subject.store_element']) !!}
<div class="form-group" >
    <div class="col-md-12">
	{!! Form::label('title', 'اسم العنصر', array('class' => 'awesome')) !!}
	{!! Form::text('title') !!}
    </div>
    <div class="col-md-12">
    {!! Form::label('order', 'الترتيب', array('class' => 'awesome')) !!}
    {!! Form::text('order') !!}
    </div>
    <div class="col-md-12">
    {!! Form::label('type', 'الحالة', array('class' => 'awesome')) !!}
    {!! Form::text('type') !!}
    </div>
     <div class="col-md-12">
    {!! Form::label('value', 'القيمة', array('class' => 'awesome')) !!}
    {!! Form::text('value') !!}
    </div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('subject.element') }}" class="pull-left btn btn-primary">
        <i class="fa fa-times"></i> @lang('global.cancel')</a>
        <button class="pull-left btn btn-success">
        <i class="fa fa-save"></i> @lang('global.save')</button>
    </div>
</div>

{!! Form::close() !!}
@stop