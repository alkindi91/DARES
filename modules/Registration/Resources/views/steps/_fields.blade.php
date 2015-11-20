{{-- Form Input Group --}}
<div class="form-group {{ $errors->first('name' ,'has-error') }}">
	{!! Form::label('name' ,trans('registration::steps.name') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::text('name' ,null ,['required'=>'required' ,'class'=>'form-control col-md-7 col-xs-12 ']) !!}
		{!! $errors->first('name' ,'<div class="label label-danger">:message</div>') !!}
	</div>
</div>
{{-- Form Input Group --}}
<div class="form-group {{ $errors->first('edit_form' ,'has-error') }}">
	{!! Form::label('edit_form' ,trans('registration::steps.edit_form') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="checkbox">
			<label>
				{!! Form::checkbox('edit_form' ,1 ,null ,['class'=>'flat']) !!}
			</label>
		</div>
		{!! $errors->first('edit_form' ,'<div class="label label-danger">:message</div>') !!}
	</div>
</div>
{{-- Form Input Group --}}
<div class="form-group {{ $errors->first('upload_files' ,'has-error') }}">
	{!! Form::label('upload_files' ,trans('registration::steps.upload_files') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="checkbox">
			<label>
				{!! Form::checkbox('upload_files' ,1 ,null ,['class'=>'flat']) !!}
			</label>
		</div>
		{!! $errors->first('upload_files' ,'<div class="label label-danger">:message</div>') !!}
	</div>
</div>
{{-- Form Input Group --}}
<div class="form-group">
	{!! Form::label('upload_files' ,trans('registration::steps.next_steps') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="col-md-9 col-sm-9 col-xs-12">
	{!! Form::select('next_steps[]' , $steps, (!empty($step) and $step->children) ? $step->children->lists('id', 'name')->toArray() : null ,['class'=>'select2_multiple form-control', 'multiple'=>'multiple']) !!}
		
	</div>
</div>
<br>


@section('footer')
<!-- daterangepicker -->
<script type="text/javascript" src="{{ asset('template/js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/parsley/parsley.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/parsley/ar.js') }}"></script>
 <!-- icheck -->
 <script src="{{ asset('template/js/icheck/icheck.min.js')}}"></script>
  <!-- select2 -->
        <script src="{{ asset('template/js/select/select2.full.min.js') }}"></script>
        <script src="{{ asset('template/js/select/i18n/ar.js') }}"></script>
 <script>

$(".select2_multiple").select2({
                    placeholder: "@lang('registration::steps.choose_next_steps')",
                     dir: "rtl",
                    allowClear: true
                });

 </script>
@endsection

@section('head')
<link href="{{ asset('template/css/icheck/flat/green.css') }}" rel="stylesheet">
<!-- select2 -->
<link href="{{ asset('template/css/select/select2.min.css') }}" rel="stylesheet">
@endsection