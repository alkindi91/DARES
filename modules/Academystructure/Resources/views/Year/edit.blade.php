@extends('layouts.master')

@section('content')
{!! Form::open(['route'=>['year.update' ,$year->id]  ,'method'=>'POST' , 'class'=>'form-horizontal']) !!}
<div class="form-group">
    <div class="col-md-12">
	{!! Form::label('name', 'اسم السنة الدراسية', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
      <div class="col-md-6 col-sm-6 col-xs-12">
      {!! Form::text('name', $year->name, $attributes = array('class'=>'form-control')) !!}
      {!! Form::hidden('faculty_id', $year->faculty_id, $attributes = array('class'=>'form-control')) !!}
      </div>
    </div>
</div>

{{-- comment
<div class="ln_solid"></div>
    @include('Academystructure::faculties._fields')  
<div class="ln_solid"></div>
--}}

<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('year.index') }}" class="pull-left btn btn-primary">
        <i class="fa fa-times"></i> @lang('global.cancel')</a>
        <button type="submit" class="pull-left btn btn-success">
        <i class="fa fa-save"></i> @lang('global.save')</button>
    </div>
</div>

{!! Form::close() !!}
@stop