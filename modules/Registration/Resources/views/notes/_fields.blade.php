 <div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('registration.notes.index' ,$step->id) }}" class="pull-left btn btn-primary">
          <i class="fa fa-times"></i> @lang('global.cancel')
        </a>
        <button type="submit" class="pull-left btn btn-success">
          <i class="fa fa-save"></i> @lang('global.save')
        </button>
    </div>
</div>  
<div class="ln_solid"></div>

{{-- Form Input Group --}}
<div class="form-group {{ $errors->first('content' ,'has-error') }}">
	{!! Form::label('content' ,trans('registration::notes.content') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="col-md-9 col-sm-9 col-xs-12">
		{!! Form::textarea('content' ,null ,['required'=>'required' ,'class'=>'form-control col-md-7 col-xs-12 ']) !!}
		{!! $errors->first('content' ,'<div class="label label-danger">:message</div>') !!}
	</div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('registration.notes.index' ,$step->id) }}" class="pull-left btn btn-primary">
          <i class="fa fa-times"></i> @lang('global.cancel')
        </a>
        <button type="submit" class="pull-left btn btn-success">
          <i class="fa fa-save"></i> @lang('global.save')
        </button>
    </div>
</div>
