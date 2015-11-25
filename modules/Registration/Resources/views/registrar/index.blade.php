@extends('layouts.registrar')

@section('content')


<form>
                        <h1>بوابة المتقدم</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="@lang('registration::registrar.username')" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="@lang('registration::registrar.password')" required="" />
                        </div>
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
                        
                    </form>
                    <!-- form -->

@stop