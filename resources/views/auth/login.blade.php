@extends('layouts.login')
<!-- resources/views/auth/login.blade.php -->

@section('content')
 <form action="{{ route('login') }}" method='POST'>
 {{ csrf_field() }}
                        <h1>تسجيل الدخول</h1>
                        <div>
                            <input type="text" class="form-control" name='email' placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" name='password' placeholder="Password" required="" />
                        </div>
                        <div>
                            <button class="btn btn-primary submit" >@lang('users::users.login')</a>
                            <button class="btn btn-default " href="#">@lang('users::users.forgot_password')</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                          
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1>@lang('global.title')</h1>

                                
                            </div>
                        </div>
                    
</form>
@stop