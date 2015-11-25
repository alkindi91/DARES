<div class="form-group">
    <div class="col-md-12">
	{!! Form::label('name', 'اسم السنة الدراسية', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
      <div class="col-md-6 col-sm-6 col-xs-12">
      {!! Form::text('name', $year->name, $attributes = array('class'=>'form-control')) !!}
      {!! Form::hidden('faculty_id', $year->faculty_id, $attributes = array('class'=>'form-control')) !!}
      </div>
    </div>
</div>