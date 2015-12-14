@extends('layouts.email')

@section('content')

{!! $template !!}

<a style='background-color:#0074D9;color:#fff;border-radius:3px;padding:10px 30px;display: block;width: 140px;
    text-align: center;
    margin: 20px auto 0;
    text-decoration: none;
    font-weight: bold;' href="{{ route('registration.registrar.verifyEmail',$verification_token) }}">
تفعيل البريد الإلكتروني
</a>

@stop