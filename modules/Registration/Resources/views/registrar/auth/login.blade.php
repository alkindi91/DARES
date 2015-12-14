@extends('layouts.registrar')

@section('content')


{!! Form::open(['route'=>'registration.registrar.login']) !!}
                        <h1>بوابة المتقدم</h1>
                        <div class='form-group {!! $errors->first('username','has-error')!!}'>
                        {!! $errors->first('username','<label class="control-label">:message</label>') !!}
                        {!! Form::text('username', null, ['class'=>'form-control', 'placeholder'=>trans('registration::registrar.username')]); !!}
                        </div>
                        <div>
                        {!! $errors->first('username','<label class="control-label">:message</label>') !!}
                           {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>trans('registration::registrar.password')]); !!}
                        </div class='form-group {!! $errors->first('password','has-error')!!}'>
                        <div>
                            <button class="btn btn-default submit">@lang('registration::registrar.login')</button>
                        </div>
                        <div class="clearfix"></div>
                        @if($period)
                             <div class="separator">
                            <i style='font-size:40px' class="text-info glyphicon glyphicon-info-sign"></i>
                            <p class="text-info change_link">تقديم الطلبات متاح الان للعام الجامعي 
                            <b>{{ $period->year->name }}</b>
                            </p>
                                <a class="btn btn-primary btn-lg btn-block" href='{{ route('registration.registrar.apply')}}'>تقديم طلب</a>
                            
                            <div class="clearfix"></div>
                            <br />
                           
                        </div>
                        @endif
{!! Form::close() !!}
                    <!-- form -->

@stop