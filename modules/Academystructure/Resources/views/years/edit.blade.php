@extends('layouts.master')

@section('content')
{!! Form::model($year, ['route'=>['as.years.update' , $year->id]  ,'method'=>'POST' , 'class'=>'form-horizontal']) !!}



<div class="ln_solid"></div>
    @include('academystructure::years._fields')  
<div class="ln_solid"></div>


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