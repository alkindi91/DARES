<?php namespace Modules\Registration\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		$skill_levels = implode(',',array_keys(config('registration.skill_levels')));
		$social_status = implode(',',array_keys(config('registration.social_status')));
		return [
				'first_name'            =>'required|max:255|min:2',
				'second_name'           =>'required|max:255|min:2',
				'third_name'            =>'required|max:255|min:2',
				'fourth_name'           =>'max:255',
				'last_name'             =>'required|max:255|min:2',
				'last_name_latin'       =>'required|max:255|min:2',
				'fourth_name_latin'     =>'max:255',
				'third_name_latin'      =>'required|max:255|min:2',
				'second_name_latin'     =>'required|max:255|min:2',
				'first_name_latin'      =>'required|max:255|min:2',
				'gender'                =>'required|in:f,m',
				'birthday'              =>'required|date',
				'nationality_type'      =>'in:omani,expat|required',
				'passeport_number'      =>'required_unless:stay_type,non_resident|max:255|min:4',
				'passeport_issued'      =>'date|required_with:passeport_number',
				'passeport_expire'      =>'date|required_with:passeport_number',
				'stay_type'             =>'sometimes|required|in:work,companion,tourism,non_resident',
				'stay_expire'           =>'required_unless:stay_type,non_resident',
				'national_id'           =>'required',
				'religion'              =>'required|in:jew,muslim,christian',
				'contact_region'        =>'',
				'contact_postalbox'     =>'required|max:255',
				'contact_street'        =>'required|max:255',
				'contact_home_number'   =>'required|max:255',
				'degree_country_id'      =>'required|exists:lists_countries,id',
				'birth_country_id'      =>'required|exists:lists_countries,id',
				'nationality_city_id'   =>'sometimes|required|exists:lists_cities,id',
				'nationality_state_id'  =>'sometimes|required|exists:lists_states,id',
				'contact_country_id'    =>'required|exists:lists_countries,id',
				'contact_city_id'   	=>'sometimes|required|exists:lists_cities,id',
				'contact_state_id'  	=>'sometimes|required|exists:lists_states,id',
				'contact_email'         =>'required|unique:registrations,contact_email|max:255',
				'contact_mobile'        =>'required|numeric',
				'degree_graduation_year'=>'required|numeric',
				'contact_phone'         =>'numeric',
				'contact_fax'           =>'numeric',
				'degree_speciality'     =>'required',
				'degree_institution'    =>'required',
				'degree_score'          =>'required',
				'social_status'         =>'required|in:'.$social_status,
				'social_job'            =>'required',
				'social_job_status'     =>'required_unless:social_job,unemployed',
				'social_job_start'      =>'required_unless:social_job,unemployed',
				'social_experience'     =>'required_unless:social_job,unemployed',
				'social_job_employer'   =>'required_unless:social_job,unemployed',
				'health_status'         =>'in:0,1|required',
				'health_disabled_type'  =>'required_if:health_status,disabled',
				'health_disabled_size'  =>'required_if:health_status,disabled',
				'computer_skills'		=>'in:'.$skill_levels,
				'internet_skills'		=>'in:'.$skill_levels,
				'internet_link'         =>'',
				'cyber_cafe'            =>'',
				'computer_availability' =>'',
				'reference'       		=>'required|in:iiswebsite,iisewebsite,iisfriend,iisefriend,other',
				'reference_other'       =>'required_if:reference,other',
		];
	}

	// public function response(array $errors) {
	// 	dd($this->errorBa, $errors);
	// }

}
