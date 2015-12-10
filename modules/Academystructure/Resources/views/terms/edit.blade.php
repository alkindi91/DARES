@extends('layouts.master')

@section('content')
{!! Form::model($term, ['route'=>['as.terms.update' , $term->id]  ,'method'=>'POST' , 'class'=>'form-horizontal']) !!}



<div class="ln_solid"></div>
    @include('academystructure::terms._fields')  
<div class="ln_solid"></div>


<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('as.terms.index') }}" class="pull-left btn btn-primary">
        <i class="fa fa-times"></i> @lang('global.cancel')</a>
        <button type="submit" class="pull-left btn btn-success">
        <i class="fa fa-save"></i> @lang('global.save')</button>
    </div>
</div>

{!! Form::close() !!}
@stop