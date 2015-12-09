<div class="form-group">
    <div class="col-md-12">
	{!! Form::label('name', trans('academystructure::departments.name'), ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
      <div class="col-md-6 col-sm-6 col-xs-12">
      {!! Form::text('name', null , array('class'=>'form-control')) !!}
      {!! Form::hidden('term_id', !empty($term->id)  ? $term->id : null, array('class'=>'form-control')) !!}
      </div>
    </div>
</div> 
<div class="form-group">
    <div class="col-md-12">
	{!! Form::label('code', trans('academystructure::departments.code'), ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
      <div class="col-md-6 col-sm-6 col-xs-12">
      {!! Form::text('code', null , array('class'=>'form-control')) !!}
      </div>
    </div>
</div> 
<div class="form-group">
    <div class="col-md-12">
	{!! Form::label('parent_id', trans('academystructure::departments.parent_id'), ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
      <div class="col-md-6 col-sm-6 col-xs-12">
	  <?php
	  $selecteddepartments = array();
	  $selecteddepartments [''] = '';
	  foreach($menu as $department) {
          $selecteddepartments[$department->did] = $department->fname.' - '.$department->yname.' - '.$department->tname.' - '.$department->dname;
      }
	  ?>
      {!! Form::select('parent_id', $selecteddepartments ) !!}
      </div>
    </div>
</div> 
