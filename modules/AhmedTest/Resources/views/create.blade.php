@extends('layouts.master')

@section('content')

{!! Form::open([
    'route' => 'ahmedtest.store'
]) !!}

<div class="form-group">
    {!! Form::label('title', 'العنوان:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
    
</div>

<div class="form-group">
    {!! Form::label('description', 'الوصف:', ['class' => 'control-label']) !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('إضافة', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop