@extends('layouts.master')

@section('content')

{!! Form::open(['route'=>'subject.store_lesson']) !!}
<div class="form-group">
    <div class="col-md-12">
	{!! Form::label('name', 'اسم العنصر', array('class' => 'awesome')) !!}
	{!! Form::text('name') !!}
    </div>
    <div class="col-md-12">
    {!! Form::label('order', 'الترتيب', array('class' => 'awesome')) !!}
    {!! Form::text('order') !!}
    </div>
    <div class="col-md-12">
    {!! Form::label('state', 'الحالة', array('class' => 'awesome')) !!}
    {!! Form::text('state') !!}
    </div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('subject.index') }}" class="pull-left btn btn-primary">
        <i class="fa fa-times"></i> @lang('global.cancel')</a>
        <button type="submit" class="pull-left btn btn-success">
        <i class="fa fa-save"></i> @lang('global.save')</button>
    </div>
</div>

{!! Form::close() !!}
@stop