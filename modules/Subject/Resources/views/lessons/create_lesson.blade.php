@extends('layouts.master')

@section('content')

{!! Form::open(['route'=>'subject.store_lesson' ,'class'=>'form-horizontal form-label-left']) !!}
    <div class="form-group">
        <div class="form-group">
    	{!! Form::label('name', 'اسم الدرس', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
    	{!! Form::text('name' ,null,['class'=>'form-control']) !!}
        </div>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('order', 'الترتيب', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('order' ,null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('type', 'النوع', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('type' ,null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::select('state', 
            [0=>'غير نشط',
             1=>'نشط'],
             null,
             ['class'=>'form-control ' ,'required'=>'required']
        )!!}
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