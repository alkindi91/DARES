@extends('layouts.master')

@section('content')

{!! Form::open(['route'=>'as.years.store' ,'method'=>'POST' , 'class'=>'form-horizontal']) !!}
<div class="form-group">
    <div class="col-md-12">
	{!! Form::label('name', 'اسم السنة الدراسية', array('class' => 'awesome')) !!}
	{!! Form::text('name') !!}
    {!! Form::hidden('faculty_id' , $faculty->id) !!}
    </div>
</div>
{{--
<div class="ln_solid"></div>
    @include('Academystructure::years._fields')  
<div class="ln_solid"></div>
--}}

<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('as.years.index') }}" class="pull-left btn btn-primary">
        <i class="fa fa-times"></i> @lang('global.cancel')</a>
        <button type="submit" class="pull-left btn btn-success">
        <i class="fa fa-save"></i> @lang('global.save')</button>
    </div>
</div>

{!! Form::close() !!}
@stop