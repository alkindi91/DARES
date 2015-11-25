@extends('layouts.registration')

@section('content')
<form action="">
	<fieldset>
		<legend>البيانات الشخصية</legend>
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
			
				{!! Form::select('nationality' ,$countries ,null ,['class'=>'form-control' ,'id'=>'nationality']) !!}
			</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="form-group">
			<label for="birthcountry">
				الجنسية <i class="fa text-danger fa-asterisk"></i>:
			</label>
			
				{!! Form::select('birthcountry' ,$countries ,null ,['class'=>'form-control' ,'id'=>'birthcountry']) !!}
			</div>
				</div>
				<div class="col-md-4 col-sm-12">
					
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
	</fieldset>
</form>
@stop

@section('heading')
<b class="text-info">{{ $period->year->name }}</b>
@stop


@section('footer')
 <!-- icheck -->
<script src="{{ asset('template/js/icheck/icheck.min.js') }}"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="{{ asset('template/js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/parsley/parsley.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/parsley/ar.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/datepicker/daterangepicker.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.date-picker').daterangepicker({
            singleDatePicker: true,
            
            locale: {
                format: 'YYYY-MM-DD'
            },

        });
    });
</script>
@stop