<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('ac.semestereventtypes.index') }}" class="btn btn-primary pull-left" novalidate>
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
    {!! Form::label('name' ,trans('academycycle::semestereventtypes.name') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('name' ,null ,['required'=>'required' ,'class'=>'form-control col-md-7 col-xs-12 ']) !!}
    </div>
</div>

{{-- Form Input Group --}}
<div class="form-group {{ $errors->first('category' ,'has-error') }}">
    {!! Form::label('category' ,trans('academycycle::semestereventtypes.category') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::select('category', config("academycycle.categories"),null ,['required'=>'required' ,'class'=>'form-control col-md-7 col-xs-12 ']) !!}
    </div>
</div>

{{-- Form Input Group --}}
<div class="form-group {{ $errors->first('note' ,'has-error') }}">
    {!! Form::label('note' ,trans('academycycle::semestereventtypes.note') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::textarea('note' ,null ,['class'=>'form-control col-md-7 col-xs-12 ']) !!}
    </div>
</div>

{{-- Form Input checkbox --}}
<div class="form-group {{ $errors->first('show' ,'has-error') }}">
	{!! Form::label('show' ,trans('academycycle::semestereventtypes.show') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="checkbox">
		{!! Form::checkbox('show', 1,null ,['id'=>'show' ,'class'=>'flat']) !!}
        </div>
	</div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('ac.semestereventtypes.index') }}" class="btn btn-primary pull-left" novalidate>
        <i class="fa fa-times"></i> @lang('global.cancel')</a>
        <button type="submit" name='submit' value='save' class="btn btn-success pull-left">
        <i class="fa fa-save"></i> @lang('global.save')
        </button>
        <button type="submit" name='submit' value='exit' class="btn btn-default pull-left" novalidate>
        <i class="fa fa-table"></i> @lang('global.save_and_exit')</button>
    </div>
</div>
