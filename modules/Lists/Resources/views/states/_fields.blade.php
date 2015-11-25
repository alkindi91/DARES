<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('states.index' ,$city->id) }}" class="btn btn-primary pull-left" novalidate>
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
    {!! Form::label('name' ,trans('lists::states.name') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}

    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('name' ,null ,['autofocus','required'=>'required' ,'class'=>'form-control col-md-7 col-xs-12 ']) !!}
    {!! $errors->first('name' ,'<div class="label label-danger">:message</div>') !!}
    </div>
</div>
<br>


<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('states.index' ,$city->id) }}" class="btn btn-primary pull-left" novalidate>
        <i class="fa fa-times"></i> @lang('global.cancel')</a>
        <button type="submit" name='submit' value='save' class="btn btn-success pull-left" novalidate>
        <i class="fa fa-save"></i> @lang('global.save')</button>
        <button type="submit" name='submit' value='exit' class="btn btn-default pull-left" novalidate>
        <i class="fa fa-table"></i> @lang('global.save_and_exit')</button>
    </div>
</div>
