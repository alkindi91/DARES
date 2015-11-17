@extends('layouts.master')
@section('content')
<div class="x_panel" style="min-height:600px;">
    <div class="x_title">
        <h2>@lang('users::users.create_user')</h2>
        <div class="clearfix"></div>
    </div>
    <br>
    {!! Form::open(['route'=>'users.store' ,'method'=>'POST' ,'class'=>'form-horizontal' ,'data-parsley-validate']) !!}
    @include('users::_fields')
<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
        <a href="{{ route('users.index') }}" class="btn btn-primary">@lang('global.cancel')</a>
        <button type="submit" class="btn btn-success">@lang('global.save')</button>
    </div>
</div>
{!! Form::close() !!}
</div>
@stop
@section('footer')
<!-- daterangepicker -->
<script type="text/javascript" src="{{ asset('template/js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/parsley/parsley.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/parsley/ar.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/datepicker/daterangepicker.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#birthday').daterangepicker({
            singleDatePicker: true,
            
            locale: {
                format: 'YYYY-MM-DD'
            },

        });
    });
</script>
@endsection