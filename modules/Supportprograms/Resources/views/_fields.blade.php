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
        {!! Form::label('program_name', trans('supportprograms::programs.name'), array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('name' ,null,['class'=>'form-control']) !!}
        </div>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('program_discription', trans('supportprograms::programs.comment'), array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('comment' ,null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('program_link', trans('supportprograms::programs.program_link'), array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('program_link' ,null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('guide_link', trans('supportprograms::programs.guide_link'), array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('guide_link' ,null,['class'=>'form-control']) !!}
        </div>
    </div>
   

    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-12">
            <a href="{{ route('supportprograms.index') }}" class="pull-left btn btn-primary">
            <i class="fa fa-times"></i> @lang('global.cancel')</a>
            <button value='save' name='submit' type="submit" class="pull-left btn btn-success">
            <i class="fa fa-save"></i> @lang('global.save')
            </button>
            <button value="exit" name="submit" type="submit" class="pull-left btn btn-primary">
            <i class="fa fa-sign-out"></i> @lang('supportprograms::programs.exit')

            </button>
        </div>
    </div>