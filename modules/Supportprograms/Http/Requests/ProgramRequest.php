<?php namespace Modules\Supportprograms\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgramRequest extends FormRequest {

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
		return [
			'name'=>'required|min:3|max:255',
			'comment'=>'required|min:3|max:255',
			'program_link'=>'required|min:3|max:255',
			'guide_link' =>'required|min:3|max:255',	
			];
	}
	public function attributes() 
	{
		return [
			'name'=>'إسم البرنامج',
			'comment'=>'ملاحظات البرنامج',
			'program_link'=>'رابط البرنامج',
			'guide_link' =>'رابط شرح البرنامج',	
		];
	}
	public function messages() 
	{
		return [
			'in'=>'القيمة :attribute غير مقبلوة'
		];
	}

}
