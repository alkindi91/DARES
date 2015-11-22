{{-- Form Input Group --}}
<div class="form-group {{ $errors->first('name' ,'has-error') }}">
	{!! Form::label('name' ,trans('registration::periods.name') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::text('name' ,null ,['required'=>'required' ,'class'=>'form-control col-md-7 col-xs-12 ']) !!}
		{!! $errors->first('name' ,'<div class="label label-danger">:message</div>') !!}
	</div>
</div>
{{-- Form Input Group --}}
<div class="form-group {{ $errors->first('start_at' ,'has-error') }}">
	{!! Form::label('start_at' ,trans('registration::periods.start_at') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::text('start_at' ,null ,['id'=>'start_at','required'=>'required' ,'class'=>'form-control col-md-7 col-xs-12 ']) !!}
		{!! $errors->first('start_at' ,'<div class="label label-danger">:message</div>') !!}
	</div>
</div>
{{-- Form Input Group --}}
<div class="form-group {{ $errors->first('finish_at' ,'has-error') }}">
	{!! Form::label('finish_at' ,trans('registration::periods.finish_at') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::text('finish_at' ,null ,['id'=>'finish_at','required'=>'required' ,'class'=>'form-control col-md-7 col-xs-12 ']) !!}
		{!! $errors->first('finish_at' ,'<div class="label label-danger">:message</div>') !!}
	</div>
</div>




@section('footer')
<!-- daterangepicker -->
<script type="text/javascript" src="{{ asset('template/js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/parsley/parsley.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/parsley/ar.js') }}"></script>
 <!-- icheck -->
<!-- daterangepicker -->
<script type="text/javascript" src="{{ asset('template/js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/datepicker/daterangepicker.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#start_at').daterangepicker({
            singleDatePicker: true,
            
            locale: {
                format: 'YYYY-MM-DD'
            },

        });

        $('#finish_at').daterangepicker({
            singleDatePicker: true,
            
            locale: {
                format: 'YYYY-MM-DD'
            },

        });
    });
</script>
@endsection

@section('head')
<link href="{{ asset('template/css/icheck/flat/green.css') }}" rel="stylesheet">
<!-- select2 -->
<link href="{{ asset('template/css/select/select2.min.css') }}" rel="stylesheet">
<!-- editor -->

@endsection