<div class="form-group">
    <div class="col-md-12">
	{!! Form::label('name',trans('academystructure::faculties.name'), ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
      <div class="col-md-6 col-sm-6 col-xs-12">
      {!! Form::text('name', null, $attributes = array('class'=>'form-control')) !!}
      </div>
    </div>
</div>
