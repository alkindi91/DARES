@extends('layouts.master')

@section('content')
{!! Form::open(['route'=>'subject.deleteBulk']) !!}
<div class="form-group">
  {!! Form::label('sub_id', 'المواد', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
  {!! Form::select('sub_id',$subjects,null,['class'=>'form-control'])!!}
  </div>
</div>
{!!Form::close()!!}
@stop