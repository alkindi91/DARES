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
    	{!! Form::label('question', 'السؤال', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
    	{!! Form::text('question' ,null,['class'=>'form-control']) !!}
        </div>
        </div>
    </div>
  
    <div class="form-group">
        {!! Form::label('difficulty', 'درجة الصعوبة', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::select('difficulty',$difficulty,
        null,
        ['class'=>'form-control'])!!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('level', 'نوع القياس' , array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::select('level',$level,
        null,
        ['class'=>'form-control'])!!}
        </div>
    </div>
      <div class="form-group">
        {!! Form::label('type', 'النوع', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
         {!! Form::select('type', $type,
        null,
        ['class'=>'form-control js-element-type'])!!}
        </div>
    </div>
    <div class="form-group">

        <div class="col-md-6 col-xs-offset-0 col-md-offset-3 col-sm-6 col-xs-12">
        <label>
           {!! Form::radio('state','نشط',null,['class'=>'form-control flat']) !!}  @lang('subject::subject.active')
        </label>
        <br>
        <label>
        {!! Form::radio('state','غير نشط',null,['class'=>'form-control flat']) !!} @lang('subject::subject.notactive')
        </label>
        </div>
    </div>
    
    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-12">
           
            <button value='save' name='submit' type="submit" class="pull-left btn btn-success">
            <i class="fa fa-save"></i> @lang('global.save')
            </button>
            <button value="exit" name="submit" type="submit" class="pull-left btn btn-primary">
            <i class="fa fa-sign-out"></i> @lang('global.save_and_exit')

            </button>
        </div>



     
</div>


   