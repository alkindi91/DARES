@extends('layouts.master')
@section('content')


<div class="x_panel" style="min-height:600px;">
    <div class="x_title">
        <h2><i class="fa fa-edit"></i> @lang('academycycle::semestereventtypes.edit_event' ,['name'=>$SEtype->name])</h2>
        <div class="clearfix"></div>
    </div>
    <br>
{!! Form::model($SEtype ,['route'=>['ac.semestereventtypes.update' ,$SEtype->id] ,'method'=>'POST' ,'class'=>'form-horizontal']) !!}


    @include('academycycle::semestereventtypes._fields')
      

{!! Form::close() !!}
</div>
@stop
