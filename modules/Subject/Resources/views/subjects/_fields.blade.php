 @if(!empty($errors->all()))
<div class="clearfix"></div>
<div class="alert alert-danger">
<ol class="">
    @foreach($errors->all() as $error)
        <li>
            {{ $error }}
        </li>     
    @endforeach
</ol>
</div>
@endif
 <div class="form-group">
        <div class="form-group">
    	{!! Form::label('name', trans('subject::subject.Subject_name'), array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
    	{!! Form::text('name' ,null,['class'=>'form-control']) !!}
        </div>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('hour', trans('subject::subject.Subject_hour'), array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('hour' ,null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('code', trans('subject::subject.Subject_code'), array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('code' ,null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('type', trans('subject::subject.Subject_type'), array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::select('type',$types,null,['class'=>'form-control'])!!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('pre_request', trans('subject::subject.Subject_pre_request'), array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::select('pre_request',[NULL=>'لا يوجد متطلب سابق'] + $pre_request,null,['class'=>'form-control'])!!}
        </div>
    </div>
     <div class="form-group">
        {!! Form::label('description', trans('subject::subject.Subject_description'), array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::textarea('description' ,null,['class'=>'form-control']) !!}
        </div>
    </div>

   
    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-12">
            <a href="{{ route('subject.index') }}" class="pull-left btn btn-primary">
            <i class="fa fa-times"></i> @lang('global.cancel')</a>
            <button value='save' name='submit' type="submit" class="pull-left btn btn-success">
            <i class="fa fa-save"></i> @lang('global.save')
            </button>
            <button value="exit" name="submit" type="submit" class="pull-left btn btn-primary">
            <i class="fa fa-sign-out"></i> @lang('global.save_and_exit')

            </button>
        </div>
    </div>