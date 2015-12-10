<div class="form-group">
    <div class="col-md-12">
	{!! Form::label('spec_id', trans('academystructure::departments.name'), ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
      <div class="col-md-6 col-sm-6 col-xs-12">
	  <?php
	  $selectedspecialties = array();
	  foreach($specialties as $specialty) {
          $selectedspecialties[$specialty->id] = $specialty->name;
      }
	  ?>
      {!! Form::select('spec_id', $selectedspecialties ) !!}
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

