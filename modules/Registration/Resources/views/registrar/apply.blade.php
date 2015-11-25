@extends('layouts.registration')
@section('content')
<form action="">
	<div class='panel panel-primary'>
		<div class="panel-heading">
			<h2>البيانات الشخصية</h2>
		</div>
		<div class='panel-body'>
			
			<label for="first_name" class='col-md-12'>الإسم بالعربي:</label>
			<div class='row'>
				<div class="label label-info"><i class="fa fa-info-circle"></i> كما هو مدون حرفيًا بالبطاقة المدنية </div>
				<div class="clearfix"></div>
				<br>
				<div class="col-lg-2 col-md-3 col-sm-12">
					<div class="form-group">
						
						<label for="first_name">
							الأول<i class="fa text-danger fa-asterisk"></i>
						</label>
						
					<input name='fir</div>st_name' id='first_name' type="text" class='form-control'>
					
					
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-12">
				<div class="form-group">
					<label for="second_name">
						الثاني<i class="fa text-danger fa-asterisk"></i>
					</label>
					
					<input name='second_name' id='second_name' type="text" class='form-control'>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-12">
				<div class="form-group">
					<label for="third_name">
						الثالث<i class="fa text-danger fa-asterisk"></i>
					</label>
					
					<input name='third_name' id='third_name'  type="text" class='form-control'>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-12">
				<div class="form-group">
					<label for="fourth_name" >
						الرابع
					</label>
					
					<input name='fourth_name' id='fourth_name'  type="text" class='form-control'>
				</div>
			</div>
			<div class="col-lg-4 col-md-3 col-sm-12">
				<label for="last_name">
					القبيلة<i class="fa text-danger fa-asterisk"></i>
				</label>
				
				<input name='last_name' id='last_name'  type="text" class='form-control'>
				
			</div>
		</div>
		<div class="ln_solid"></div>
		{{-- row --}}
		<label for="last_name_latin" class='col-md-12'>الإسم بالإنجليزى (حسب جواز السفر):</label>
		<br />
		<div class="row">
			
			<div class="clearfix"></div>
			<br>
			<div class="col-lg-4 col-md-3 col-sm-12">
				<label for="last_name_latin">
					القبيلة<i class="fa text-danger fa-asterisk"></i>
				</label>
				
				<input name='last_name' id='last_name_latin'  type="text" class='form-control'>
				
			</div>
			<div class="col-lg-2 col-md-3 col-sm-12">
				<div class="form-group">
					<label for="first_name_latin">
						الأول<i class="fa text-danger fa-asterisk"></i>
					</label>
					
					<input name='first_name_latin' id='first_name_latin' type="text" class='form-control'>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-12">
				<div class="form-group">
					<label for="second_name_latin">
						الثاني<i class="fa text-danger fa-asterisk"></i>
					</label>
					
					<input name='second_name_latin' id='second_name_latin' type="text" class='form-control'>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-12">
				<div class="form-group">
					<label for="third_name_latin">
						الثالث<i class="fa text-danger fa-asterisk"></i>
					</label>
					
					<input name='third_name_latin' id='third_name_latin'  type="text" class='form-control'>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-12">
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
			<div class="col-md-6 col-sm-12">
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
			<div class="col-md-6 col-sm-12">
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
			<div class="col-md-12">
				<div class="form-group">
					<label for="nationality">الجنسية<i class="fa text-danger fa-asterisk"></i></label><br>
					<label>
						عماني : <input type="radio" class="flat" name="nationality" id="nationalityO" value="O"  required />
					</label>
					<label>
						غير عماني : <input type="radio" class="flat" name="nationality" id="nationalityE" value="E" />
					</label>
				</div>
			</div>
		</div>
		<br />
		<div class="row" id='expactId' class='hidden'>
			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<label for="nationality">
						الجنسية <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('nationality' ,$countries ,null ,['class'=>'select2_single form-control' ,'id'=>'nationality']) !!}
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<label for="birth_country">
						دولة الميلاد <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('birth_country' ,$countries ,null ,['class'=>'select2_single form-control' ,'id'=>'birth_country']) !!}
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<label for="passeport_number">رقم جواز السفر<i class="fa text-danger fa-asterisk"></i></label><br>
					<input name="passeport_number" class='form-control' id="passeport_number" type='text'>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<label for="passeport_issued">تاريخ الصدور<i class="fa text-danger fa-asterisk"></i></label><br>
					<input name="passeport_issued" class='form-control date-picker' id="passeport_issued" type='text'>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<label for="passeport_expire">تاريخ الانتهاء<i class="fa text-danger fa-asterisk"></i></label><br>
					<input name="passeport_expire" class='form-control date-picker' id="passeport_expire" type='text'>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<label for="passeport_country">
						جهة الصدور <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('passeport_country' ,$countries ,null ,['class'=>'select2_single form-control' ,'id'=>'passeport_country']) !!}
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<label for="stay_type">
						نوع الإقامة <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('stay_type' ,$stay_types ,null ,['class'=>'select2_single form-control' ,'id'=>'stay_type']) !!}
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<label for="stay_expire">تاريخ انتهاء الاقامة<i class="fa text-danger fa-asterisk"></i></label><br>
					<input name="stay_expire" class='form-control date-picker' id="stay_expire" type='text'>
				</div>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-4 col-sm-12">
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
			<div class="col-md-6 col-sm-12">
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
		<h2>بيانات الإقامة ومعلومات الاتصال</h2>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<label for="contact_country">
						الدولة <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('contact_country' ,$countries ,null ,['class'=>'select2_single form-control' ,'id'=>'contact_country']) !!}
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<label for="contact_city">
						المحافظة <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('contact_city' ,[] ,null ,['class'=>'select2_single form-control' ,'id'=>'contact_city']) !!}
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<label for="contact_state">
						المحافظة <i class="fa text-danger fa-asterisk"></i>:
					</label>
					
					{!! Form::select('contact_state' ,[] ,null ,['class'=>'select2_single form-control' ,'id'=>'contact_state']) !!}
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
x<!-- select2 -->
<script src="{{ asset('template/js/select/select2.full.js') }}"></script>
<script type="text/javascript">
$(document).ready(function () {
$('.date-picker').daterangepicker({
singleDatePicker: true,

locale: {
format: 'YYYY-MM-DD'
},
});
$(".select2_single").select2({
placeholder: "Select a state",
allowClear: true
});

$('body').on('change', '#contact_country', function(event) {
	event.preventDefault();
	/* Act on the event */
	$.ajax({
		url: '/path/to/file',
		type: 'default GET (Other values: POST)',
		dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
		data: {param1: 'value1'},
	})
	.done(function() {
		console.log("success");
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
});

});
</script>
@stop