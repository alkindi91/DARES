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


    <div class="form-group js-element-choice" style="display:block">
   
    {!! Form::label('question' ,"الإجابات" ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('question[]' ,null,['class'=>'form-control']) !!}
        <label>
           {!! Form::radio('state','صحيحة',null,['class'=>'form-control flat']) !!}  صحيحة
        </label>
        {!! Form::text('question[]' ,null,['class'=>'form-control']) !!}
        <label>
           {!! Form::radio('state','صحيحة',null,['class'=>'form-control flat']) !!}  صحية
        </label>
    <div class="input_fields_wrap">
    <a href="" class="add_field_button">اضف اجابة</a>
    
    </div>

        {!! $errors->first('file' ,'<div class="label label-danger">:message</div>') !!}
    </div>
    </div>


    </div>

@section('footer')
    <script >
    
   
    jQuery(document).ready(function($) {

        $('body').on('change', '.js-element-type', function(event) {
            event.preventDefault();
            /* Act on the event */
            var $this = $(this), $file = $(".js-element-choice"), values = ['صح او خطأ' , 'اختر اجابة واحدة' ,'اختياري متعدد'], chosen = $this.val();
            
            if(values.indexOf(chosen)>=0) {
                $file.show();
            } else {
                $file.hide();
            }
        });
    });


    $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
     var add_button      = $(".add_field_button"); //Add button ID
    
      var x = 1; //initlal text box count
       $(add_button).click(function(e){ //on add input button click
          e.preventDefault();
           if(x < max_fields){ //max input box allowed
              x++; //text box increment
               $(wrapper).append('<div> {!! Form::text('question[]' ,null,['class'=>'form-control']) !!}<a href=""     class="remove_field">حذف</a></div>'); //add input box
           }
      });
    
      $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
          e.preventDefault(); $(this).parent('div').remove(); x--;
      })
});
    </script>
    @stop