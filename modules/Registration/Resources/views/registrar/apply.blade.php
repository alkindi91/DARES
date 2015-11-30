@extends('layouts.registration')
@section('content')
<form action="" class='registration-form'>
	<div class='panel panel-primary'>
		<div class="panel-heading">
			<h2>البيانات الشخصية</h2>
		</div>
		<div class='panel-body'>
			
			<label for="first_name" class='col-sm-12'>الإسم بالعربي:</label>
			<div class='row'>
				<div class="label label-info"><i class="fa fa-info-circle"></i> كما هو مدون حرفيًا بالبطاقة المدنية </div>
				<div class="clearfix"></div>
				<br>
				<div class="col-lg-2 col-sm-3 col-xs-12">
					<div class="form-group">
						
						<label for="first_name">
							الأول<i class="fa text-danger fa-asterisk"></i>
						</label>
						
					<input name='fir</div>st_name' id='first_name' type="text" class='form-control'>
					
					
				</div>
			</div>
			<div class="col-lg-2 col-sm-3 col-xs-12">
				<div class="form-group">
					<label for="second_name">
						الثاني<i class="fa text-danger fa-asterisk"></i>
					</label>
					
					<input name='second_name' id='second_name' type="text" class='form-control'>
				</div>
			</div>
			<div class="col-lg-2 col-sm-3 col-xs-12">
				<div class="form-group">
					<label for="third_name">
						الثالث<i class="fa text-danger fa-asterisk"></i>
					</label>
					
					<input name='third_name' id='third_name'  type="text" class='form-control'>
				</div>
			</div>
			<div class="col-lg-2 col-sm-3 col-xs-12">
				<div class="form-group">
					<label for="fourth_name" >
						الرابع
					</label>
					
					<input name='fourth_name' id='fourth_name'  type="text" class='form-control'>
				</div>
			</div>
			<div class="col-lg-4 col-sm-3 col-xs-12">
				<label for="last_name">
					القبيلة<i class="fa text-danger fa-asterisk"></i>
				</label>
				
				<input name='last_name' id='last_name'  type="text" class='form-control'>
				
			</div>
		</div>
		<div class="ln_solid"></div>
		{{-- row --}}
		<label for="last_name_latin" class='col-sm-12'>الإسم بالإنجليزى (حسب جواز السفر):</label>
		<br />
		<div class="row">
			
			<div class="clearfix"></div>
			<br>
			<div class="col-lg-4 col-sm-3 col-xs-12">
				<label for="last_name_latin">
					القبيلة<i class="fa text-danger fa-asterisk"></i>
				</label>
				
				<input name='last_name' id='last_name_latin'  type="text" class='form-control'>
				
			</div>
			<div class="col-lg-2 col-sm-3 col-xs-12">
				<div class="form-group">
					<label for="first_name_latin">
						الأول<i class="fa text-danger fa-asterisk"></i>
					</label>
					
					<input name='first_name_latin' id='first_name_latin' type="text" class='form-control'>
				</div>
			</div>
			<div class="col-lg-2 col-sm-3 col-xs-12">
				<div class="form-group">
					<label for="second_name_latin">
						الثاني<i class="fa text-danger fa-asterisk"></i>
					</label>
					
					<input name='second_name_latin' id='second_name_latin' type="text" class='form-control'>
				</div>
			</div>
			<div class="col-lg-2 col-sm-3 col-xs-12">
				<div class="form-group">
					<label for="third_name_latin">
						الثالث<i class="fa text-danger fa-asterisk"></i>
					</label>
					
					<input name='third_name_latin' id='third_name_latin'  type="text" class='form-control'>
				</div>
			</div>
			<div class="col-lg-2 col-sm-3 col-xs-12">
				<div class="form-group">
					<label for="fourth_name_latin">
						الرابع
					</label>
					
					<input name='fourth_name_latin' id='fourth_name_latin'  type="text" class='form-control'>
				</div>
			</div>
		</div>
		<div class="ln_solid"></div>
		{{-- row --}}
		<br />
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="gender">الجنس<i class="fa text-danger fa-asterisk"></i></label><br>
					<label>
						ذكر : <input type="radio" class="flat" name="gender" id="genderM" value="M"  required />
					</label>
					<label>
						أنثى : <input type="radio" class="flat" name="gender" id="genderF" value="F" />
					</label>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="gender">تاريخ الميلاد<i class="fa text-danger fa-asterisk"></i></label><br>
					<input name="birthday" class='form-control date-picker' id="birthday" type='text'>
				</div>
			</div>
			
		</div>
		<div class="ln_solid"></div>
		{{-- row --}}
		<br />
		<div class="row">
			<div class="col-sm-12">
				<div class="form-group">
					<label for="nationality_type">الجنسية<i class="fa text-danger fa-asterisk"></i></label><br>
					<label>
						عماني : {!! Form::radio('nationality_type' ,"O" ,true ,['class'=>'flat']) !!}
					</label>
					<label>
						غير عماني : {!! Form::radio('nationality_type' ,"E" ,false ,['class'=>'flat']) !!}
					</label>
				</div>
			</div>
		</div>
		<br />
		<div class="row registration-form__nationality omani" id='expactId'>
			<div class="col-sm-4 col-xs-12 outsider">
				<div class="form-group">
					<label for="nationality">
						الجنسية <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('nationality' ,$countries_list ,null ,['class'=>'select2_single form-control' ,'id'=>'nationality']) !!}
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="birth_country">
						دولة الميلاد <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('birth_country' ,$countries_list ,null ,['class'=>'select2_single form-control' ,'id'=>'birth_country']) !!}
				</div>
			</div>
			<div class="col-sm-4 col-xs-12 omani">
				<div class="form-group">
					<label for="nationality_city">
						المحافظة :
					</label>
					
					{!! Form::select('nationality_city' ,[] ,null ,['class'=>'select2_single form-control' ,'id'=>'nationality_city']) !!}
				</div>
			</div>
			<div class="col-sm-4 col-xs-12 omani">
				<div class="form-group">
					<label for="nationality_state">
						الولاية :
					</label>
					
					{!! Form::select('nationality_state' ,[] ,null ,['class'=>'select2_single form-control' ,'id'=>'nationality_state']) !!}
				</div>
			</div>
			</div>
			
		<div class="row registration-form__outsider">
		<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="stay_type">
						نوع الإقامة <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('stay_type' ,$stay_types ,null ,['class'=>'select2_single form-control' ,'id'=>'stay_type']) !!}
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="passeport_number">رقم جواز السفر<i class="fa text-danger fa-asterisk resident-required"></i></label><br>
					<input name="passeport_number" class='form-control' id="passeport_number" type='text'>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="passeport_issued">تاريخ الصدور<i class="fa text-danger fa-asterisk resident-required"></i></label><br>
					<input name="passeport_issued" class='form-control date-picker' id="passeport_issued" type='text'>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="passeport_expire">تاريخ الانتهاء<i class="fa text-danger fa-asterisk resident-required"></i></label><br>
					<input name="passeport_expire" class='form-control date-picker' id="passeport_expire" type='text'>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="passeport_country">
						جهة الصدور <i class="fa text-danger fa-asterisk resident-required"></i>:
					</label>
					
					{!! Form::select('passeport_country' ,$countries_list ,null ,['class'=>'select2_single form-control' ,'id'=>'passeport_country']) !!}
				</div>
			</div>
			
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="stay_expire">تاريخ انتهاء الاقامة<i class="fa text-danger fa-asterisk resident-required"></i></label><br>
					<input name="stay_expire" class='form-control date-picker' id="stay_expire" type='text'>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="national_id">
						رقم البطاقة المدنية<i class="fa text-danger fa-asterisk"></i>
					</label>
					
					<input name='national_id' id='national_id' type="text" class='form-control'>
					<div class="label label-info">
						<i class="fa fa-info-circle"></i> بدقة كما هو مسجل في البطاقة المدنية
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="religion">الديانة<i class="fa text-danger fa-asterisk"></i></label><br>
					<label>
						مسلم : <input type="radio" class="flat" checked='' name="religion" id="religionM" value="M"  required />
					</label>
					<label>
						مسيحي : <input type="radio" class="flat" name="religion" id="religionC" value="C" />
					</label>
					<label>
						يهودي : <input type="radio" class="flat" name="religion" id="religionJ" value="J" />
					</label>
				</div>
			</div>
			
			
		</div>
	</div>
</div>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h2><i class="fa fa-phone"></i> بيانات الإقامة ومعلومات الاتصال</h2>
	</div>
	<div class="panel-body">
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-sm-3 col-xs-12">
				<div class="form-group">
					<label for="contact_country">
						الدولة <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('contact_country' ,$countries_list ,null ,['class'=>'select2_single form-control' ,'id'=>'contact_country']) !!}
				</div>
			</div>
			<div class="col-sm-3 col-xs-12">
				<div class="form-group">
					<label for="contact_city">
						المحافظة <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('contact_city' ,[] ,null ,['class'=>'select2_single form-control' ,'id'=>'contact_city']) !!}
				</div>
			</div>
			<div class="col-sm-3 col-xs-12">
				<div class="form-group">
					<label for="contact_state">
						الولاية <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('contact_state' ,[] ,null ,['class'=>'select2_single form-control' ,'id'=>'contact_state']) !!}
				</div>
			</div>
			<div class="col-sm-3 col-xs-12">
				<div class="form-group">
					<label for="contact_region">المنطقة<i class="fa text-danger fa-asterisk"></i></label><br>
					<input name="contact_region" class='form-control' id="contact_region" type='text'>
				</div>
			</div>
		</div>
		<div class="ln_solid"></div>
		<div class="row">
			<div class="col-xs-12 col-sm-4">
				<div class="form-group">
					<label for="contact_postalbox">صندوق البريد<i class="fa text-danger fa-asterisk"></i></label><br>
					<input name="contact_postalbox" class='form-control' id="contact_postalbox" type='text'>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="form-group">
					<label for="contact_street">الشارع<i class="fa text-danger fa-asterisk"></i></label><br>
					<input name="contact_street" class='form-control' id="contact_street" type='text'>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="form-group">
					<label for="contact_home_number">رقم المنزل<i class="fa text-danger fa-asterisk"></i></label><br>
					<input name="contact_home_number" class='form-control' id="contact_home_number" type='text'>
				</div>
			</div>
		</div>
		<div class="ln_solid"></div>
		<div class="row">
			<div class="col-xs-12 col-sm-3">
				<div class="form-group">
					<label for="contact_email">البريد الإلكتروني<i class="fa text-danger fa-asterisk"></i></label>
					<div class="has-feedback">
						<input name="contact_email" class='form-control has-feedback-right' id="contact_email" type='text'>
						<span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3">
				<div class="form-group">
					<label for="contact_phone">هاتف المحمول<i class="fa text-danger fa-asterisk"></i></label><br>
					<label class="sr-only" for="contact_mobile">هاتف المحمول</label>
					<div class="input-group">
						<div class="has-feedback">
							<input type="text" class="form-control has-feedback-right" id="contact_mobile" placeholder="هاتف المحمول">
							<span class="fa fa-mobile form-control-feedback right" aria-hidden="true"></span>
						</div>
						<div class="input-group-addon calling_code" dir='ltr'>+968</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3">
				<div class="form-group">
					<label for="contact_phone">هاتف المنزل<i class="fa text-danger fa-asterisk"></i></label><br>
					<div class="form-group">
						<label class="sr-only" for="contact_phone">هاتف المنزل</label>
						<div class="input-group">
							<div class="has-feedback">
								<input type="text" class="form-control  has-feedback-right" id="contact_phone" placeholder="هاتف المنزل">
								<span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
							</div>
							<div class="input-group-addon calling_code" dir='ltr'>+968</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3">
				<div class="form-group">
					<label for="contact_fax">فاكس</label><br>
					<div class="form-group">
						<label class="sr-only" for="contact_fax">فاكس</label>
						<div class="input-group">
							
							<input type="text" class="form-control" id="contact_fax" placeholder="فاكس">
							<div class="input-group-addon calling_code" dir='ltr'>+968</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h2><i class="fa fa-graduation-cap"></i> المؤهل الدراسي</h2>
	</div>
	<div class="panel-body">
		<div class="clearfix"></div>
		<div id="mainDegreeFields">
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div class="form-group">
						<label for="degree_name[]">
							المؤهل <i class="fa text-danger fa-asterisk"></i>:
						</label>
						
						{!! Form::text('degree_name[]' ,"ثانوية" ,['class'=>' form-control','disabled'=>'disabled']) !!}
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="form-group">
						<label for="degree_country_id[]">
							الدولة <i class="fa text-danger fa-asterisk"></i>:
						</label>
						
						{!! Form::select('degree_country_id[]' ,$countries_list ,null ,['class'=>'select2_single form-control' ,'id'=>'degree_country_id[]']) !!}
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="form-group">
						<label for="degree_speciality[]">
							التخصص الدراسي <i class="fa text-danger fa-asterisk"></i>:
						</label>
						
						{!! Form::text('degree_speciality[]' ,null ,['class'=>'form-control' ,'id'=>'degree_speciality[]']) !!}
					</div>
				</div>
				
			</div>
			<div class="ln_solid"></div>
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div class="form-group">
						<label for="degree_institution[]">
							اسم الجهة الدراسية (المدرسة/ المعهد)<i class="fa text-danger fa-asterisk"></i>:
						</label>
						
						{!! Form::text('degree_institution[]' ,null ,['class'=>'form-control' ,'id'=>'degree_institution[]']) !!}
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="form-group">
						<label for="degree_graduation_year[]">
							سنة التخرج <i class="fa text-danger fa-asterisk"></i>:
						</label>
						
						{!! Form::select('degree_graduation_year[]' ,range(date('Y') ,date("Y")-80) ,null ,['class'=>' select2_single form-control']) !!}
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="form-group">
						<label for="degree_score[]">
							المعدل <i class="fa text-danger fa-asterisk"></i>:
						</label>
						<div class="form-group">
							<label class="sr-only" for="contact_fax">المعدل</label>
							<div class="input-group">
								{!! Form::text('degree_score[]',null ,["type"=>"numeric",'class'=>'form-control' ,'id'=>'degree_score[]']) !!}
								<div class="input-group-addon">%</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		{{-- end rows --}}
		<div id="extraDegreeContainer"></div>
		<button type='button' id='addExtraDegrees' class='btn btn-success'>
		<i class="fa fa-plus"></i> إضافة شهادة أخرى
		</button>
	</div>
</div>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h2><i class="fa fa-archive"></i> المعلومات الاجتماعية</h2>
	</div>
	<div class="panel-body">
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-sm-3 col-xs-12">
				<div class="form-group">
					<label for="social_status">
						الحالة الاجتماعية <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('social_status' ,$social_status ,null ,['class'=>'select2_single form-control' ,'id'=>'social_status']) !!}
				</div>
			</div>
			<div class="col-sm-3 col-xs-12">
				<div class="form-group">
					<label for="social_jobs">
						الحالة الوظيفية <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('social_jobs' ,$social_jobs ,null ,['class'=>'select2_single form-control' ,'id'=>'social_jobs']) !!}
				</div>
			</div>
		</div>
		<div class="ln_solid"></div>
		<div class="row social-job-details">
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="social_job_status">
						الوظيفة <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::text('social_job_status' ,null ,['placeholder'=>"مثال : شرطي ،مدرس ،موظف حكومي ...",'class'=>'form-control' ,'id'=>'social_job_status']) !!}
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="social_job_start">
						تاريخ البدء <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::text('social_job_start' ,null ,['class'=>'date-picker form-control' ,'id'=>'social_job_start']) !!}
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="social_experience">
						عدد سنوات الخبرة <i class="fa text-danger fa-asterisk"></i>:
					</label>
					<div class="form-group">
						<label class="sr-only" for="contact_fax">عدد سنوات الخبرة</label>
						<div class="input-group">
							{!! Form::text('social_experience' ,null ,['placeholder'=>0,'class'=>'form-control' ,'id'=>'social_experience']) !!}
							<div class="input-group-addon">سنة</div>
						</div>
					</div>
					
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="social_job_employer">
						إسم جهة العمل <i class="fa text-danger fa-asterisk"></i>:
					</label>
					{!! Form::text('social_job_employer' ,null ,['placeholder'=>"مثال : وزارة التربية و التعليم ..",'class'=>'form-control' ,'id'=>'social_job_employer']) !!}
					
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="social_job_type">
						قطاع <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('social_job_type' ,$social_job_types ,null ,['class'=>'select2_single form-control' ,'id'=>'social_job_type']) !!}
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="social_job_country">
						الدولة <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('social_job_country' ,$countries_list ,null ,['class'=>'select2_single form-control' ,'id'=>'social_job_country']) !!}
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="social_job_city">
						المحافظة <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('social_job_city' ,[] ,null ,['class'=>'select2_single form-control' ,'id'=>'social_job_city']) !!}
				</div>
			</div>
		</div>
	</div>
</div>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h2><i class="fa fa-user-md"></i> الحالة الصحية</h2>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="health_status">الحالة الصحية<i class="fa text-danger fa-asterisk"></i></label><br>
					<label>
						سليم بدنيا و صحيا : 
						{!! Form::radio('health_status' ,"healthy" ,true ,['class'=>'flat']) !!}
						
					</label>
					<label>
						أعاني من اعاقة : {!! Form::radio('health_status' ,"disabled" ,null ,['class'=>'flat']) !!}
					</label>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12 health-disabled-fields">
				<div class="form-group">
					<label for="health_disabled_type">نوع الاعاقة<i class="fa text-danger fa-asterisk"></i></label><br>
					<label>
						حركية :
						{!! Form::radio('health_disabled_type' ,"mouvement" ,true ,['class'=>'flat']) !!}
						
					</label>
					<label>
						سمعية : {!! Form::radio('health_disabled_type' ,"hearing" ,null ,['class'=>'flat']) !!}
					</label>
					<label>
						بصرية : {!! Form::radio('health_disabled_type' ,"visual" ,null ,['class'=>'flat']) !!}
					</label>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12 health-disabled-fields">
				<div class="form-group">
					<label for="health_disabled_size">حجم الاعاقة<i class="fa text-danger fa-asterisk"></i></label><br>
					<label>
						كلية : 
						{!! Form::radio('health_disabled_size' ,"full" ,true ,['class'=>'flat']) !!}
						
					</label>
					<label>
						جزئية : {!! Form::radio('health_disabled_size' ,"partial" ,null ,['class'=>'flat']) !!}
					</label>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
		<h2><i class="fa fa-desktop"></i> المهارات والإمكانات للدراسة بالتعليم عن بعد</h2>
	</div>
	<div class="panel-body">
		
		
		<div class="row">
			<div class="col-xs-12 col-sm-4">
				<div class="form-group">
					<label for="computer_skills">القدرة الشخصية استخدام الحاسب الآلي<i class="fa text-danger fa-asterisk"></i></label><br>
					{!! Form::select('computer_skills' ,$computer_skills ,null ,['class'=>'select2_single form-control']) !!}
					
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="form-group">
					<label for="internet_skills">القدرة الشخصية استخدام الانترنت<i class="fa text-danger fa-asterisk"></i></label><br>
					{!! Form::select('internet_skills' ,$computer_skills ,null ,['class'=>'select2_single form-control']) !!}
				</div>
			</div>
			
		</div>
		<div class="ln_solid"></div>
		<div class="row">
			<div class="col-xs-12 col-sm-4">
				<div class="form-group">
					<label for="internet_link">توافر جهاز (كمبيوتر / لاب) بحالة جيدة<i class="fa text-danger fa-asterisk"></i></label><br>
					<label>
						يوجد : 
						{!! Form::radio('internet_link' ,1 ,true ,['class'=>'flat']) !!}
						
					</label>
					<label>
						لا يوجد : {!! Form::radio('internet_link' ,0 ,null ,['class'=>'flat']) !!}
					</label>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
			<div class="form-group">
					<label for="cyber_cafe">توافر جهاز (كمبيوتر / لاب) بحالة جيدة<i class="fa text-danger fa-asterisk"></i></label><br>
					<label>
						يوجد : 
						{!! Form::radio('cyber_cafe' ,1 ,true ,['class'=>'flat']) !!}
						
					</label>
					<label>
						لا يوجد : {!! Form::radio('cyber_cafe' ,0 ,null ,['class'=>'flat']) !!}
					</label>
				</div>
				
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="form-group">
					<label for="computer_availability">توافر جهاز (كمبيوتر / لاب) بحالة جيدة<i class="fa text-danger fa-asterisk"></i></label><br>
					<label>
						يوجد : 
						{!! Form::radio('computer_availability' ,1 ,true ,['class'=>'flat']) !!}
						
					</label>
					<label>
						لا يوجد : {!! Form::radio('computer_availability' ,0 ,null ,['class'=>'flat']) !!}
					</label>
				</div>
			</div>
		</div>
		<div class="ln_solid"></div>
		<div class="row">
			
				<div class="col-xs-12 col-sm-4">
				<div class="form-group">
					<label for="reference">كيف عرفت عن مركز التعليم عن بعد بالكلية<i class="fa text-danger fa-asterisk"></i></label><br>
					{!! Form::select('reference' ,$references ,null ,['class'=>'select2_single form-control']) !!}
				</div>
			</div>
			
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="reference_other">
						كيف عرفتنا <i class="fa text-danger fa-asterisk"></i>:
					</label>
					{!! Form::text('reference_other' ,null ,['placeholder'=>"",'class'=>'form-control' ,'id'=>'reference_other']) !!}
					
				</div>
			</div>
		</div>
	</div>
</div>

</form>
@stop
@section('heading')
<b class="text-info">{{ $period->year->name }}</b>
@stop
@section('header')
<!-- select2 -->
<link href="{{ asset('template/css/select/select2.min.css') }}" rel="stylesheet">
@stop
@section('footer')
<!-- icheck -->
<script src="{{ asset('template/js/icheck/icheck.min.js') }}"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="{{ asset('template/js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/parsley/parsley.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/parsley/ar.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/datepicker/daterangepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/datepicker/daterangepicker.js') }}"></script>
{{-- lodash library --}}
<script src="{{ asset('template/js/lodash/lodash.min.js') }}"></script>
{{-- use laravel routes in javascript --}}
<script src="{{ asset('js/laroute.js') }}"></script>
<!-- select2 -->
<script src="{{ asset('template/js/select/select2.full.js') }}"></script>
<script src="{{ asset('template/js/select/i18n/ar.js') }}"></script>
<script type="text/javascript">
$(document).ready(function () {
	var countriesCodes = {!! json_encode($codes_list) !!}
// we fetch contact cities based on current contact country on document load
applyFetchCities('contact_city' ,$('#contact_country').val() ,'contact_state');
$('.date-picker').daterangepicker({
	singleDatePicker: true,
	locale: {
		format: 'YYYY-MM-DD'
	},
});

$('body').on('ifChanged', 'input[name="health_status"]', function(event) {
	var $this = $(this) ,$disabledFields = $('.health-disabled-fields');

	if($this.val()=='healthy') {
        $disabledFields.fadeOut();
	} else {
		$disabledFields.fadeIn();
	}
});
$('body').on('ifChanged', 'input[name="nationality_type"]', function(event) {
	event.preventDefault();
	/* Act on the event */
	
	
	var $this = $(this);
	if($this.val()=='O') {
	  $('.registration-form__nationality').addClass('omani');
	  $('.registration-form__outsider').removeClass('active');
	} else {
      $('.registration-form__outsider').addClass('active');
      $('.registration-form__nationality').removeClass('omani');
      
    }

drawSelect2();


});

function drawSelect2() {
	
	$(".select2_single").select2({
	placeholder: "حدد اختيار",
	allowClear: true
});
}
drawSelect2();
$('body').on('change', '#contact_country', function(event) {
	event.preventDefault();
	var $this = $(this);
	/* Act on the event */
	applyFetchCities('contact_city' ,$this.val() ,'contact_state');
	changeCallingCode($this.val());
});
$('body').on('change', '#birth_country', function(event) {
	event.preventDefault();
	var $this = $(this);
	/* Act on the event */
	applyFetchCities('nationality_city' ,$this.val() ,'nationality_state');
	
});
$('body').on('change', '#social_job_country', function(event) {
	event.preventDefault();
	var $this = $(this);
	/* Act on the event */
	applyFetchJobCities();
	
});
$('body').on('change', '#contact_city', function(event) {
	event.preventDefault();
	/* Act on the event */
	applyFetchStates('contact_state' ,$(this).val());
});
$('body').on('click' ,"#addExtraDegrees" ,function() {
	var $mainClone = $('#mainDegreeFields').clone() ,$extra = $('#extraDegreeContainer');
	
	$mainClone.css({position:"relative",margin:"25px 0"  ,boxShadow:"#fff 0 0 0 5px ,#1a82c3  0 0 0 8px" ,borderRadius:4});
	$mainClone.attr('id',false).addClass('js-degree-clone');
	$mainClone.append('<button class="btn pull-left btn-danger js-remove-degree"><i class="fa fa-times"></i> حذف</button><div class="clearfix"></div>');
	$mainClone.find('.select2-container').remove();
	$mainClone.find("input[name='degree_name[]']").attr('disabled' ,false);
	$mainClone.find('input[type="text"]').val("");
	$mainClone.find('select').css({display:"block"});
	$extra.append($mainClone);
	$mainClone.find('.select2_single').select2({
			placeholder: "حدد اختيار",
			allowClear: true
		});
});
$('body').on('click', '.js-remove-degree', function(event) {
	event.preventDefault();
	/* Act on the event */
	$(this).closest('.js-degree-clone').remove();
});


$('body').on('change', '#social_jobs', function(event) {
	event.preventDefault();
	/* Act on the event */
	var $this = $(this) ,$jobDetails = $('.social-job-details');

	if($this.val()=='employed') {
		$jobDetails.slideDown();
		drawSelect2();
	} else {
		$jobDetails.slideUp();
	}

});

$('body').on('change', '#stay_type', function(event) {
	event.preventDefault();
	/* Act on the event */
	var $this = $(this);

	if($this.val()!='non_resident') {
	  $('.registration-form__outsider').removeClass('passeport');
	} else {
      $('.registration-form__outsider').addClass('passeport');
      drawSelect2();
    }
});
function changeCallingCode(countryId) {
	if(!_.isEmpty(countryId)) {
		$('.calling_code').html("+"+countriesCodes[countryId]);
	}
}
/** function to fetch contact cities based on current contact country */
function applyFetchCities(targetId ,currentCountry,stateId) {
	var $target = $('#'+targetId);
	$target.html("").change();

		if(_.isEmpty(currentCountry)) {
		return;
		}
		

		$.ajax({
			url: laroute.route('lists.api.cities.index'),
			dataType: 'json',
			data: {country_id: currentCountry},
		})
		.done(function(response) {
			var $options;
			$.each(response, function(index, val) {
				/* iterate through array or object */
				$options += '<option value="'+val.id+'">'+val.name+'</option>';
			});
			$target.html($options).change();
			if(!_.isEmpty(stateId))
			applyFetchStates(stateId ,$target.val());
		});
	}
	function applyFetchJobCities() {
	$('#social_job_city').html("").change();
		var currentCountry = $('#social_job_country').val();
		if(_.isEmpty(currentCountry)) {
		return;
		}
		
		$.ajax({
			url: laroute.route('lists.api.cities.index'),
			dataType: 'json',
			data: {country_id: currentCountry},
		})
		.done(function(response) {
			var $options;
			$.each(response, function(index, val) {
				/* iterate through array or object */
				$options += '<option value="'+val.id+'">'+val.name+'</option>';
			});
			$('#social_job_city').html($options).change();
			//applyFetchStates();
		});
	}
function applyFetchStates(targetId ,currentCity) {

	$('#'+targetId).html("").change();
		
		if(_.isEmpty(currentCity)) {
		return;
		}
		$.ajax({
			url: laroute.route('lists.api.states.index'),
			dataType: 'json',
			data: {city_id: currentCity},
		})
		.done(function(response) {
			var $options;
			
			$.each(response, function(index, val) {
				/* iterate through array or object */
				$options += '<option value="'+val.id+'">'+val.name+'</option>';
			});
			$('#'+targetId).html($options).change();
		});
	}
});
</script>
@stop