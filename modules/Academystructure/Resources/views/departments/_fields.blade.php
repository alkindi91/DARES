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
	  foreach($menu as $departmentlist) {
          $selecteddepartments[$departmentlist->id] = $departmentlist->fname.' - '.$departmentlist->yname.' - '.$departmentlist->tname.' - '.$departmentlist->sname;
      }
	  ?>
      {!! Form::select('parent_id', $selecteddepartments ) !!}
      {!! Form::hidden('term_id', !empty($term->id) ? $term->id : null, array('class'=>'form-control')) !!}
      </div>
    </div>
</div> 

{{-- Form Input Group --}}
<div class="form-group">
	{!! Form::label('Subjects' ,trans('academystructure::departments.subjects') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="col-md-9 col-sm-9 col-xs-12">
	{!! Form::select('subject_ids[]' , $subjects,  (!empty($department->subject_ids)) ? array_values(json_decode($department->subject_ids,true)) : null ,['class'=>'select2_multiple form-control', 'multiple'=>'multiple']) !!}
		
	</div>
</div>
@section('footer')
  <!-- select2 -->
        <script src="{{ asset('template/js/select/select2.full.min.js') }}"></script>
        <script src="{{ asset('template/js/select/i18n/ar.js') }}"></script>

<script>
jQuery(document).ready(function($) {

    $(".select2_multiple").select2({
                    placeholder: "@lang('academystructure::departments.choose_subjects')",
                    dir: "rtl",
                    allowClear: true
                });
});

 </script>
 @endsection

@section('head')
<!-- select2 -->
<link href="{{ asset('template/css/select/select2.min.css') }}" rel="stylesheet">
<!-- editor -->

@endsection