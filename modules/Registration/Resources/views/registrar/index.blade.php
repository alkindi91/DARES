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

                            <p class="change_link">تقديم الطلبات متاح الان للعام الجامعي {{ $period->year->name }}
                                <a href="#tologin" class="btn btn-primary btn-lg btn-block">تقديم طلب</a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                           
                        </div>
                        @endif
                        
                    </form>
                    <!-- form -->

@stop