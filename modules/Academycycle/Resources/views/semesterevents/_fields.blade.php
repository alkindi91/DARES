<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('ac.semesters.index') }}" class="btn btn-primary pull-left" novalidate>
        <i class="fa fa-times"></i> @lang('global.cancel')</a>
        <button type="submit" name='submit' value='save' class="btn btn-success pull-left">
        <i class="fa fa-save"></i> @lang('global.save')
        </button>
        <button type="submit" name='submit' value='exit' class="btn btn-default pull-left" novalidate>
        <i class="fa fa-table"></i> @lang('global.save_and_exit')</button>
    </div>
</div>

<div class="ln_solid"></div>

{{-- Form Input Group --}}
<div class="form-group {{ $errors->first('name' ,'has-error') }}">
    {!! Form::label('name' ,trans('academycycle::semesters.name') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('name' ,null ,['required'=>'required' ,'class'=>'form-control col-md-7 col-xs-12 ']) !!}
    </div>
</div>

{{-- Form Input Group --}}
<div class="form-group {{ $errors->first('start_at' ,'has-error') }}">
	{!! Form::label('start_at' ,trans('academycycle::semesters.start_at') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::text('start_at' ,null ,['id'=>'start_at','required'=>'required' ,'class'=>'form-control col-md-7 col-xs-12 ']) !!}
	</div>
</div>

{{-- Form Input Group --}}
<div class="form-group {{ $errors->first('finish_at' ,'has-error') }}">
	{!! Form::label('finish_at' ,trans('academycycle::semesters.finish_at') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::text('finish_at' ,null ,['id'=>'finish_at','required'=>'required' ,'class'=>'form-control col-md-7 col-xs-12 ']) !!}
	</div>
</div>

{{-- Form Input checkbox --}}
<div class="form-group {{ $errors->first('finish_at' ,'has-error') }}">
	{!! Form::label('active' ,trans('academycycle::semesters.active') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="checkbox">
		{!! Form::checkbox('active', 1,null ,['id'=>'active' ,'class'=>'flat']) !!}
        </div>
         {!! Form::hidden('academycycle_year_id', !empty($yid)  ? $yid : null, array('class'=>'form-control')) !!}
	</div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('ac.semesters.index') }}" class="btn btn-primary pull-left" novalidate>
        <i class="fa fa-times"></i> @lang('global.cancel')</a>
        <button type="submit" name='submit' value='save' class="btn btn-success pull-left">
        <i class="fa fa-save"></i> @lang('global.save')
        </button>
        <button type="submit" name='submit' value='exit' class="btn btn-default pull-left" novalidate>
        <i class="fa fa-table"></i> @lang('global.save_and_exit')</button>
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
