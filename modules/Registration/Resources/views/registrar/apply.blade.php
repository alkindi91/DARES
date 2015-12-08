@extends('layouts.registration')
@section('content')

@if(!empty($errors->all()))
<div class='alert alert-danger'>
<ul>
@foreach($errors->all() as $error)
	<li>
		{{ $error }}
	</li>
@endforeach
</ul>
</div>
@endif
{!! Form::open(['route'=>'registration.registrar.apply','data-parsley-validate'=>'data-parsley-validate' ,'class'=>'registration-form', 'id'=>'registrationForm', 'data-parsley-excluded'=>'.novalidate,input[type=button], input[type=submit], input[type=reset], input[type=hidden], [disabled]']) !!}
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
					{!! Form::text('first_name' ,null ,['class'=>'form-control', 'id'=>'first_name', 'required'=>'required']) !!}
					
					
					
				</div>
			</div>
			<div class="col-lg-2 col-sm-3 col-xs-12">
				<div class="form-group">
					<label for="second_name">
						الثاني<i class="fa text-danger fa-asterisk"></i>
					</label>
					{!! Form::text('second_name' ,null ,['class'=>'form-control', 'id'=>'second_name', 'required'=>'required']) !!}
				</div>
			</div>
			<div class="col-lg-2 col-sm-3 col-xs-12">
				<div class="form-group">
					<label for="third_name">
						الثالث<i class="fa text-danger fa-asterisk"></i>
					</label>
					{!! Form::text('third_name' ,null ,['class'=>'form-control', 'id'=>'third_name', 'required'=>'required']) !!}
					
				</div>
			</div>
			<div class="col-lg-2 col-sm-3 col-xs-12">
				<div class="form-group">
					<label for="fourth_name" >
						الرابع
					</label>
					{!! Form::text('fourth_name' ,null ,['class'=>'form-control', 'id'=>'fourth_name']) !!}
					
				</div>
			</div>
			<div class="col-lg-4 col-sm-3 col-xs-12">
				<label for="last_name">
					القبيلة<i class="fa text-danger fa-asterisk"></i>
				</label>
				
			{!! Form::text('last_name' ,null ,['class'=>'form-control', 'id'=>'last_name', 'required'=>'required']) !!}
				
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
				{!! Form::text('last_name_latin' ,null ,['class'=>'form-control', 'id'=>'last_name_latin', 'required'=>'required']) !!}
				
			</div>
			
			
			
			<div class="col-lg-2 col-sm-3 col-xs-12">
				<div class="form-group">
					<label for="fourth_name_latin">
						الرابع
					</label>
					{!! Form::text('fourth_name_latin' ,null ,['class'=>'form-control', 'id'=>'fourth_name_latin']) !!}
					
				</div>
			</div>
			<div class="col-lg-2 col-sm-3 col-xs-12">
				<div class="form-group">
					<label for="third_name_latin">
						الثالث<i class="fa text-danger fa-asterisk"></i>
					</label>
					{!! Form::text('third_name_latin' ,null ,['class'=>'form-control', 'id'=>'third_name_latin', 'required'=>'required']) !!}
					
				</div>
			</div>
			<div class="col-lg-2 col-sm-3 col-xs-12">
				<div class="form-group">
					<label for="second_name_latin">
						الثاني<i class="fa text-danger fa-asterisk"></i>
					</label>
					{!! Form::text('second_name_latin' ,null ,['class'=>'form-control', 'id'=>'second_name_latin', 'required'=>'required']) !!}
					
				</div>
			</div>
			<div class="col-lg-2 col-sm-3 col-xs-12">
				<div class="form-group">
					<label for="first_name_latin">
						الأول<i class="fa text-danger fa-asterisk"></i>
					</label>
					{!! Form::text('first_name_latin' ,null ,['class'=>'form-control', 'id'=>'first_name_latin', 'required'=>'required']) !!}
					
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
						ذكر : {!! Form::radio('gender' ,"m",true ,['class'=>'flat', 'id'=>'genderM', 'required'=>'required']) !!}
						
					</label>
					<label>
						أنثى : {!! Form::radio('gender' ,"f",false ,['class'=>'flat', 'id'=>'genderF', 'required'=>'required']) !!}
					</label>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="gender">تاريخ الميلاد<i class="fa text-danger fa-asterisk"></i></label><br>
					{!! Form::text('birthday' ,null ,['class'=>'form-control date-picker', 'id'=>'birthday', 'required'=>'required']) !!}
					
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
						عماني : {!! Form::radio('nationality_type' ,"omani" ,true ,['class'=>'flat','required'=>'required']) !!}
					</label>
					<label>
						غير عماني : {!! Form::radio('nationality_type' ,"expat" ,false ,['class'=>'flat','required'=>'required']) !!}
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
					
					{!! Form::select('birth_country' ,$countries_list ,null ,['data-parsley-errors-container'=>"#birthCountryContainer",'class'=>'select2_single form-control' ,'id'=>'birth_country','required'=>'required']) !!}
					<div id="birthCountryContainer"></div>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12 omani">
				<div class="form-group">
					<label for="nationality_city">
						المحافظة :
					</label>
					
					{!! Form::select('nationality_city' ,[] ,null ,['data-parsley-errors-container'=>"#birthCityContainer",'class'=>'select2_single form-control' ,'id'=>'nationality_city']) !!}
					<div id="birthCityContainer"></div>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12 omani">
				<div class="form-group">
					<label for="nationality_state">
						الولاية :
					</label>
					
					{!! Form::select('nationality_state' ,[] ,null ,['data-parsley-errors-container'=>"#birthStateContainer",'class'=>'select2_single form-control' ,'id'=>'nationality_state']) !!}
					<div id="birthStateContainer"></div>
				</div>
			</div>
			</div>
			
		<div class="row registration-form__outsider">
		<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="stay_type">
						نوع الإقامة <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('stay_type' ,$stay_types ,!old('stay_type') ? 'non_resident' :old('stay_type') ,['class'=>'select2_single form-control' ,'id'=>'stay_type']) !!}
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="passeport_number">رقم جواز السفر<i class="fa text-danger fa-asterisk resident-required"></i></label><br>
					
					{!! Form::text('passeport_number' ,null ,['class'=>'form-control', 'id'=>'passeport_number']) !!}
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="passeport_issued">تاريخ الصدور<i class="fa text-danger fa-asterisk resident-required"></i></label><br>
					{!! Form::text('passeport_issued' ,null ,['class'=>'form-control date-picker', 'id'=>'passeport_issued']) !!}
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="passeport_expire">تاريخ الانتهاء<i class="fa text-danger fa-asterisk resident-required"></i></label><br>
					
					{!! Form::text('passeport_expire' ,null ,['class'=>'form-control date-picker', 'id'=>'passeport_expire']) !!}
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
					{!! Form::text('stay_expire' ,null ,['class'=>'form-control date-picker', 'id'=>'stay_expire']) !!}
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="national_id">
						رقم البطاقة المدنية<i class="fa text-danger fa-asterisk"></i>
					</label>
					{!! Form::text('national_id' ,null ,['class'=>'form-control', 'id'=>'national_id' ,'required'=>'required']) !!}
					<div class="label label-info">
						<i class="fa fa-info-circle"></i> بدقة كما هو مسجل في البطاقة المدنية
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="religion">الديانة<i class="fa text-danger fa-asterisk"></i></label><br>
					<label>
						مسلم : {!! Form::radio('religion' ,"muslim" ,true ,['class'=>'flat','id'=>'religionM','required'=>'required']) !!}
						
					</label>
					<label>
						مسيحي : {!! Form::radio('religion' ,"christian" ,true ,['class'=>'flat','id'=>'religionC','required'=>'required']) !!}
						
					</label>
					<label>
						يهودي : {!! Form::radio('religion' ,"jew" ,true ,['class'=>'flat','id'=>'religionJ','required'=>'required']) !!}
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
	<div class="panel-body js-social-country">
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-sm-3 col-xs-12">
				<div class="form-group">
					<label for="contact_country">
						الدولة <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('contact_country' ,$countries_list ,null ,['data-parsley-errors-container'=>"#contactCountryErrors",'class'=>'select2_single form-control' ,'id'=>'contact_country']) !!}
					<div id="contactCountryErrors"></div>
				</div>
			</div>
			<div class="col-sm-3 col-xs-12">
				<div class="form-group">
					<label for="contact_city">
						المحافظة <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('contact_city' ,[] ,null ,['data-parsley-errors-container'=>"#contactCityErrors",'class'=>'select2_single form-control' ,'id'=>'contact_city','required'=>'required']) !!}
					<div id="contactCityErrors"></div>
				</div>
			</div>
			<div class="col-sm-3 col-xs-12">
				<div class="form-group js-social-country-required">
					<label for="contact_state">
						الولاية <i class="fa text-danger fa-asterisk "></i>:
					</label>
					
					{!! Form::select('contact_state' ,[] ,null ,['data-parsley-errors-container'=>"#contactStateErrors",'class'=>' select2_single form-control' ,'id'=>'contact_state','required'=>'required']) !!}
					<div id="contactStateErrors"></div>
				</div>
			</div>
			<div class="col-sm-3 col-xs-12">
				<div class="form-group js-social-country-required">
					<label for="contact_region">المنطقة<i class="fa text-danger fa-asterisk "></i></label><br>
					{!! Form::text('contact_region' ,null ,['class'=>' form-control', 'id'=>'contact_region' ,'required'=>'required']) !!}
				</div>
			</div>
		</div>
		<div class="ln_solid"></div>
		<div class="row">
			<div class="col-xs-12 col-sm-4">
				<div class="form-group">
					<label for="contact_postalbox">صندوق البريد<i class="fa text-danger fa-asterisk"></i></label><br>
					{!! Form::text('contact_postalbox' ,null ,['class'=>'form-control', 'id'=>'contact_postalbox' ,'required'=>'required']) !!}
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="form-group">
					<label for="contact_street">الشارع<i class="fa text-danger fa-asterisk"></i></label><br>
					{!! Form::text('contact_street' ,null ,['class'=>'form-control', 'id'=>'contact_street' ,'required'=>'required']) !!}
					
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="form-group">
					<label for="contact_home_number">رقم المنزل<i class="fa text-danger fa-asterisk"></i></label><br>
					{!! Form::text('contact_home_number' ,null ,['class'=>'form-control', 'id'=>'contact_home_number' ,'required'=>'required']) !!}
					
				</div>
			</div>
		</div>
		<div class="ln_solid"></div>
		<div class="row">
			<div class="col-xs-12 col-sm-3">
				<div class="form-group">
					<label for="contact_email">البريد الإلكتروني<i class="fa text-danger fa-asterisk"></i></label>
					<div class="has-feedback">
						{!! Form::email('contact_email' ,null ,['data-parsley-errors-container'=>"#contactEmailErrors",'class'=>'form-control has-feedback-right', 'id'=>'contact_email' ,'required'=>'required']) !!}
						<span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
					</div>
					<div id="contactEmailErrors"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3">
				<div class="form-group">
					<label for="contact_phone">هاتف المحمول<i class="fa text-danger fa-asterisk"></i></label><br>
					<label class="sr-only" for="contact_mobile">هاتف المحمول</label>
					<div class="input-group">
						<div class="has-feedback">
						{!! Form::text('contact_mobile' ,null ,['data-parsley-type'=>"integer",'data-parsley-errors-container'=>"#contactMobileErrors",'class'=>'form-control has-feedback-right', 'id'=>'contact_mobile' ,'required'=>'required']) !!}
							<span class="fa fa-mobile form-control-feedback right" aria-hidden="true"></span>
						</div>
						<div class="input-group-addon calling_code" dir='ltr'>+968</div>
					</div>
					<div id="contactMobileErrors"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3">
				<div class="form-group">
					<label for="contact_phone">هاتف المنزل<i class="fa text-danger fa-asterisk"></i></label><br>
					<div class="form-group">
						<label class="sr-only" for="contact_phone">هاتف المنزل</label>
						<div class="input-group">
							<div class="has-feedback">
							{!! Form::text('contact_phone' ,null ,['data-parsley-errors-container'=>"#contactPhoneErrors","data-parsley-type"=>"integer",'placeholder'=>'هاتف المنزل','class'=>'form-control has-feedback-right', 'id'=>'contact_phone']) !!}
								<span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
							</div>
							<div class="input-group-addon calling_code" dir='ltr'>+968</div>
						</div>
						<div id="contactPhoneErrors"></div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3">
				<div class="form-group">
					<label for="contact_fax">فاكس</label><br>
					<div class="form-group">
						<label class="sr-only" for="contact_fax">فاكس</label>
						<div class="input-group">
							{!! Form::text('contact_fax' ,null ,['data-parsley-errors-container'=>"#contactFaxErrors",'class'=>'form-control',"data-parsley-type"=>"integer", 'id'=>'contact_fax']) !!}
							
							<div class="input-group-addon calling_code" dir='ltr'>+968</div>
						</div>
						<div id="contactFaxErrors"></div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h2><i class="fa fa-graduation-cap"></i> المؤهلات الدراسية</h2>
	</div>
	<div class="panel-body">
		<div class="clearfix"></div>
		<div class="label label-danger" style='font-size:16px'>
			1 - بيانات الشهادة الثانوية ( إجباري )
		</div>
		<br>
		<br>
		<br>
		<div id="mainDegreeFields">
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div class="form-group">
						<label for="degree_name">
							المؤهل <i class="fa text-danger fa-asterisk"></i>:
						</label>
						
						{!! Form::select('degree_name' ,["high_school"=>"ثانوي"] ,null,['class'=>' form-control','disabled'=>'disabled' ,'required'=>'required']) !!}
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="form-group">
						<label for="degree_country_id">
							الدولة <i class="fa text-danger fa-asterisk"></i>:
						</label>
						
						{!! Form::select('degree_country_id' ,$countries_list ,null ,['data-parsley-errors-container'=>"#degreeCountry_1",'class'=>'select2_single form-control' ,'id'=>'degree_country_id','required'=>'required']) !!}
						<div class='parsleyjs-error-container' id="degreeCountry_1"></div>
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="form-group">
						<label for="degree_speciality">
							التخصص الدراسي <i class="fa text-danger fa-asterisk"></i>:
						</label>
						
						{!! Form::text('degree_speciality' ,null ,['class'=>'form-control' ,'id'=>'degree_speciality','required'=>'required']) !!}
					</div>
				</div>
				
			</div>
			<div class="ln_solid"></div>
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div class="form-group">
						<label for="degree_institution">
							اسم المدرسة<i class="fa text-danger fa-asterisk"></i>:
						</label>
						
						{!! Form::text('degree_institution' ,null ,['class'=>'form-control' ,'id'=>'degree_institution','required'=>'required']) !!}
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="form-group">
						<label for="degree_graduation_year">
							سنة التخرج <i class="fa text-danger fa-asterisk"></i>:
						</label>
						
						{!! Form::select('degree_graduation_year' ,[""=>""]+range(date('Y') ,date("Y")-80) ,null ,['data-parsley-errors-container'=>"#degreeYear_1",'class'=>' select2_single form-control','required'=>'required']) !!}
						<div class='parsleyjs-error-container' id="degreeYear_1"></div>
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="form-group">
						<label for="degree_score">
							المعدل <i class="fa text-danger fa-asterisk"></i>:
						</label>
						<div class="form-group">
							<label class="sr-only" for="contact_fax">المعدل</label>
							<div class="input-group">
								{!! Form::text('degree_score',null ,['data-parsley-errors-container'=>"#degreeScore_1","type"=>"numeric",'class'=>'form-control' ,'id'=>'degree_score','required'=>'required']) !!}
								<div class="input-group-addon">%</div>
							</div>
						</div>
						<div class='parsleyjs-error-container' id="degreeScore_1"></div>
						
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
					
					{!! Form::select('social_status' ,$social_status ,null ,['data-parsley-errors-container'=>"#socialStatusContainer",'class'=>'select2_single form-control' ,'id'=>'social_status','required'=>'required']) !!}
					<div id="socialStatusContainer"></div>
				</div>
			</div>
			<div class="col-sm-3 col-xs-12">
				<div class="form-group">
					<label for="social_job">
						الحالة الوظيفية <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('social_job' ,$social_jobs ,null ,['data-parsley-errors-container'=>"#socialJobContainer",'class'=>'select2_single form-control' ,'id'=>'social_job','required'=>'required']) !!}
					<div id="socialJobContainer"></div>
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
					
					{!! Form::text('social_job_status' ,null ,['required'=>'required','placeholder'=>"مثال : شرطي ،مدرس ،موظف حكومي ...",'class'=>'form-control' ,'id'=>'social_job_status']) !!}
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="social_job_start">
						تاريخ البدء <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::text('social_job_start' ,null ,['required'=>'required','class'=>'date-picker form-control' ,'id'=>'social_job_start']) !!}
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
							{!! Form::text('social_experience' ,null ,['required'=>'required','placeholder'=>0,'class'=>'form-control' ,'id'=>'social_experience']) !!}
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
					{!! Form::text('social_job_employer' ,null ,['required'=>'required','placeholder'=>"مثال : وزارة التربية و التعليم ..",'class'=>'form-control' ,'id'=>'social_job_employer']) !!}
					
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="social_job_type">
						قطاع <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('social_job_type' ,$social_job_types ,null ,['required'=>'required','class'=>'select2_single form-control' ,'id'=>'social_job_type']) !!}
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="social_job_country">
						الدولة <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('social_job_country' ,$countries_list ,null ,['required'=>'required','class'=>'select2_single form-control' ,'id'=>'social_job_country']) !!}
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<label for="social_job_city">
						المحافظة <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('social_job_city' ,[] ,null ,['required'=>'required','class'=>'select2_single form-control' ,'id'=>'social_job_city']) !!}
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
						{!! Form::radio('health_status' ,"healthy" ,true ,['class'=>'flat' ,'required'=>'required']) !!}
						
					</label>
					<label>
						أعاني من اعاقة : {!! Form::radio('health_status' ,"disabled" ,null ,['class'=>'flat','required'=>'required']) !!}
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
					{!! Form::select('computer_skills' ,$computer_skills ,null ,['data-parsley-errors-container'=>"#computerSkillsContainer",'class'=>'select2_single form-control','required'=>'required']) !!}
					<div id="computerSkillsContainer"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="form-group">
					<label for="internet_skills">القدرة الشخصية استخدام الانترنت<i class="fa text-danger fa-asterisk"></i></label><br>
					{!! Form::select('internet_skills' ,$computer_skills ,null ,['data-parsley-errors-container'=>"#internetSkillsContainer",'class'=>'select2_single form-control','required'=>'required']) !!}
					<div id="internetSkillsContainer"></div>
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
						{!! Form::radio('internet_link' ,1 ,true ,['class'=>'flat','required'=>'required']) !!}
						
					</label>
					<label>
						لا يوجد : {!! Form::radio('internet_link' ,0 ,null ,['class'=>'flat','required'=>'required']) !!}
					</label>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
			<div class="form-group">
					<label for="cyber_cafe">توافر جهاز (كمبيوتر / لاب) بحالة جيدة<i class="fa text-danger fa-asterisk"></i></label><br>
					<label>
						يوجد : 
						{!! Form::radio('cyber_cafe' ,1 ,true ,['class'=>'flat','required'=>'required']) !!}
						
					</label>
					<label>
						لا يوجد : {!! Form::radio('cyber_cafe' ,0 ,null ,['class'=>'flat','required'=>'required']) !!}
					</label>
				</div>
				
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="form-group">
					<label for="computer_availability">توافر جهاز (كمبيوتر / لاب) بحالة جيدة<i class="fa text-danger fa-asterisk"></i></label><br>
					<label>
						يوجد : 
						{!! Form::radio('computer_availability' ,1 ,true ,['class'=>'flat','required'=>'required']) !!}
						
					</label>
					<label>
						لا يوجد : {!! Form::radio('computer_availability' ,0 ,null ,['class'=>'flat','required'=>'required']) !!}
					</label>
				</div>
			</div>
		</div>
		<div class="ln_solid"></div>
		<div class="row">
			
				<div class="col-xs-12 col-sm-4">
				<div class="form-group">
					<label for="reference">كيف عرفت عن مركز التعليم عن بعد بالكلية<i class="fa text-danger fa-asterisk"></i></label><br>
					{!! Form::select('reference' ,$references ,null ,['data-parsley-errors-container'=>"#referenceContainer",'id'=>'reference','class'=>'select2_single form-control','required'=>'required']) !!}
					<div id="referenceContainer"></div>
				</div>
			</div>
			
			<div class="col-sm-4 col-xs-12 js-reference-other" style='display:none'>
				<div class="form-group">
					<label for="reference_other">
						كيف عرفتنا <i class="fa text-danger fa-asterisk"></i>:
					</label>
					{!! Form::text('reference_other' ,null ,['placeholder'=>"",'class'=>'novalidate form-control' ,'id'=>'reference_other','required'=>'required']) !!}
					
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-4 col-sm-offset-4">
		<button class='btn btn-primary btn-block btn-lg'>
			<i class="fa fa-send"></i> ارسال
		</button>
	</div>
</div>
{!! Form::close() !!}
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
	if($this.val()=='omani') {
	  $('.registration-form__nationality').addClass('omani');
	  $('.registration-form__outsider').removeClass('active');
	} else {
      $('.registration-form__outsider').addClass('active');
      $('.registration-form__nationality').removeClass('omani');
      
    }

drawSelect2();


});


$('body').on('change', '#reference', function(event) {
	event.preventDefault();
	/* Act on the event */
	var $this = $(this) ,$referenceOther = $('.js-reference-other');

	if($this.val()=="other") {
		$referenceOther.show();
		$referenceOther.find('input').removeClass('novalidate');
	}else{
		$referenceOther.hide();
		$referenceOther.find('input').addClass('novalidate');
	}

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
	
	if($this.find('option:selected').text()=="سلطنة عمان") {
		$this.closest('.js-social-country').find('.js-social-country-required i').show();
		$this.closest('.js-social-country').find('.js-social-country-required input,.js-social-country-required select').removeClass('novalidate');
		$this.closest('.js-social-country').find('.js-social-country-required i').show();
	}else {
		$this.closest('.js-social-country').find('.js-social-country-required i').hide();
		$this.closest('.js-social-country').find('.js-social-country-required input,.js-social-country-required select').addClass('novalidate');
	}

	$('#registrationForm').parsley().validate();

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
	
	$('#registrationForm').parsley('destroy');

	$mainClone.css({position:"relative",margin:"25px 0"  ,boxShadow:"#fff 0 0 0 5px ,#1a82c3  0 0 0 8px" ,borderRadius:4});
	$mainClone.attr('id',false).addClass('js-degree-clone');
	$mainClone.append('<button class="btn pull-left btn-danger js-remove-degree"><i class="fa fa-times"></i> حذف</button><div class="clearfix"></div>');
	$mainClone.find('.select2-container').remove();
	$select = $('<select/>' ,{name:"degree_name" ,class:'form-control'});
	$select.html("");
	$.each({'graduate':'إجازة / بكالوريوس / ليسانس','majester':'ماجستير' ,'doctorat':'دكتوراه'}, function(index, val) {
		 $select.append("<option value='"+index+"'>"+val+"</option>");
	});
	

	$mainClone.find("select[name='degree_name']").replaceWith($select);
	$mainClone.find("input[name='degree_institution']").siblings('label').html('معهد / كلية / جامعة <i class="fa text-danger fa-asterisk"></i>');
	$mainClone.find('input[type="text"]').val("");
	$mainClone.find('select').css({display:"block"});
	var timestamp = new Date().getUTCMilliseconds();

	$mainClone.find('input,select').each(function(index, val) {
		 /* iterate through array or object */
		 var $clonedInput = $(val),originalName = $clonedInput.attr('name') ,clonedName =originalName+timestamp,
		 	$errorContainer;

		$clonedInput.attr('name' ,clonedName);
		$clonedInput.attr('id' ,clonedName);
		$clonedInput.attr('data-parsley-errors-container' ,"Container"+clonedName);
		$errorContainer = $clonedInput.closest('.col-sm-4').find('.parsleyjs-error-container').attr('id' ,"Container"+clonedName);
	});
	$extra.append($mainClone);
	$mainClone.find('.select2_single').select2({
			placeholder: "حدد اختيار",
			allowClear: true
		});
	$('#registrationForm').parsley();
});
$('body').on('click', '.js-remove-degree', function(event) {
	event.preventDefault();
	/* Act on the event */
	$(this).closest('.js-degree-clone').remove();
});

/** social jobs logic */
$('body').on('change', '#social_job', function(event) {
	event.preventDefault();
	/* Act on the event */
	var $this = $(this) ,$jobDetails = $('.social-job-details');

	if($this.val()=='employed') {
		$('.social-job-details').find('input,select').attr('disabled',false);
		$jobDetails.slideDown();

		drawSelect2();
	} else {
		$('.social-job-details').find('input,select').attr('disabled',true);
		$jobDetails.slideUp();
	}

});
$('.social-job-details').find('input,select').attr('disabled',true);

/** end social jobs logic */
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

window.Parsley.on('field:error', function() {
  // This global callback will be called for any field that fails validation.
  console.log('Validation failed for: ', this.$element);
});
</script>
@stop