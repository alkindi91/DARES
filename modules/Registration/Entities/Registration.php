<?php namespace Modules\Registration\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Registration extends Model {

    protected $fillable = [
		'first_name',
		'second_name',
		'third_name',
		'fourth_name',
		'last_name',
		'last_name_latin',
		'fourth_name_latin',
		'third_name_latin',
		'second_name_latin',
		'first_name_latin',
		'gender',
		'birthday',
		'nationality_type',
		'passeport_number',
		'passeport_issued',
		'passeport_expire',
		'stay_expire',
		'national_id',
		'religion',
		'contact_region',
		'contact_postalbox',
		'contact_street',
		'contact_home_number',
		'contact_email',
		'contact_mobile',
		'contact_phone',
		'contact_fax',
		'degree_speciality',
		'degree_institution',
		'degree_score',
		'social_job',
		'social_job_status',
		'social_job_start',
		'social_experience',
		'social_job_employer',
		'health_status',
		'health_disabled_type',
		'health_disabled_size',
		'internet_link',
		'cyber_cafe',
		'housing_type',
		'computer_availability',
		'reference',
		'reference_other',
		'registration_type_id',
		'academystructure_specialty_id',
    ];

    public function histories() {
    	return $this->hasManyThrough('\Modules\Registration\Entities\RegistrationHistory',
    		'\Modules\Registration\Entities\RegistrationStep');
    }

    public function getFullnameAttribute() {
    	return $this->first_name." ".$this->second_name." ".$this->third_name." ".$this->fourth_name." ".$this->last_name;
    }

    public function getCodeAttribute() {
    	return $this->username_prefix.$this->username;
    }

    public function step()
    {
    	return $this->belongsTo('\Modules\Registration\Entities\RegistrationStep', 'registration_step_id');
    }

    public function type()
    {
    	return $this->belongsTo('\Modules\Registration\Entities\RegistrationType', 'registration_type_id');
    }

    public function speciality()
    {
    	return $this->belongsTo('\Modules\Academystructure\Entities\Specialty', 'academystructure_specialty_id');
    }

    public function period()
    {
    	return $this->belongsTo('\Modules\Registration\Entities\RegistrationPeriod', 'registration_period_id');
    }

    public function verifyCode()
    {
    	$this->load('type' ,'period','speciality');
        $prefix  = $this->type->code;
        $prefix .= $this->speciality->code;
        $prefix .= $this->period->code;
        $prefix .= $this->gender;
        $this->username_prefix = strtoupper($prefix);
        $this->save();
    }

    public function scopeLogin($query ,$input)
    {

    	if(isset($input['username']) && isset($input['password'])) {

    		$query->where('username', $input['username'])->where('contact_mobile', $input['password']);
    	}
    }
}