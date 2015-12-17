<div class="js-degree-clone" style='position:relative;margin:25px 0;box-shadow:#fff 0 0 0 5px ,#1a82c3  0 0 0 8px ;border-radius:4px'>

<div class="row " >
						<div class="col-sm-4 col-xs-12">
							<div class="form-group">
								<label for="degree_name{{ $degree->id }}">
									المؤهل <i class="fa text-danger fa-asterisk"></i>:
								</label>
								
								{!! Form::select('degree_name'.$degree->id ,["high_school"=>"ثانوي",'graduate'=>'إجازة / بكالوريوس / ليسانس','majester'=>'ماجستير' ,'doctorat'=>'دكتوراه'] ,$degree->degree_name,['class'=>' form-control','disabled'=>'disabled' ,'required'=>'required']) !!}
							</div>
						</div>
						<div class="col-sm-4 col-xs-12">
							<div class="form-group">
								<label for="degree_country_id{{ $degree->id }}">
									الدولة <i class="fa text-danger fa-asterisk"></i>:
								</label>
								
								{!! Form::select('degree_country_id'.$degree->id ,$countries_list ,$degree->degree_country_id ,['data-parsley-errors-container'=>"#degreeCountry_1",'class'=>'select2_single form-control' ,'id'=>'degree_country_id'.$degree->id,'required'=>'required']) !!}
								<div class='parsleyjs-error-container' id="degreeCountry_1"></div>
							</div>
						</div>
						<div class="col-sm-4 col-xs-12">
							<div class="form-group">
								<label for="degree_speciality{{ $degree->id }}">
									التخصص الدراسي <i class="fa text-danger fa-asterisk"></i>:
								</label>
								
								{!! Form::text('degree_speciality'.$degree->id ,$degree->degree_speciality ,['class'=>'form-control' ,'id'=>'degree_speciality'.$degree->id,'required'=>'required']) !!}
							</div>
						</div>
						
					</div>
					<div class="ln_solid"></div>
					<div class="row">
						<div class="col-sm-4 col-xs-12">
							<div class="form-group">
								<label for="degree_institution{{ $degree->id }}">
									اسم المدرسة<i class="fa text-danger fa-asterisk"></i>:
								</label>
								
								{!! Form::text('degree_institution'.$degree->id ,$degree->degree_institution ,['class'=>'form-control' ,'id'=>'degree_institution'.$degree->id,'required'=>'required']) !!}
							</div>
						</div>
						<div class="col-sm-4 col-xs-12">
							<div class="form-group">
								<label for="degree_graduation_year{{ $degree->id }}">
									سنة التخرج <i class="fa text-danger fa-asterisk"></i>:
								</label>
								
								{!! Form::select('degree_graduation_year'.$degree->id ,[""=>""]+range(date('Y') ,date("Y")-80) ,$degree->degree_graduation_year ,['data-parsley-errors-container'=>"#degreeYear_1",'class'=>' select2_single form-control','required'=>'required']) !!}
								<div class='parsleyjs-error-container' id="degreeYear_1"></div>
							</div>
						</div>
						<div class="col-sm-4 col-xs-12">
							<div class="form-group">
								<label for="degree_score{{ $degree->id }}">
									المعدل <i class="fa text-danger fa-asterisk"></i>:
								</label>
								<div class="form-group">
									<label class="sr-only" for="contact_fax">المعدل</label>
									<div class="input-group">
										{!! Form::text('degree_score'.$degree->id,$degree->degree_score ,['data-parsley-errors-container'=>"#degreeScore_1","type"=>"numeric",'class'=>'form-control' ,'id'=>'degree_score'.$degree->id,'required'=>'required']) !!}
										<div class="input-group-addon">%</div>
									</div>
								</div>
								<div class='parsleyjs-error-container' id="degreeScore_1"></div>
								
							</div>
						</div>
					</div>
<button class="btn pull-left btn-danger js-remove-degree"><i class="fa fa-times"></i> حذف</button><div class="clearfix"></div>
</div>