<?php namespace Modules\Subject\Http\Requests\Subject;

use Illuminate\Foundation\Http\FormRequest;

class SubjectRequest extends FormRequest {

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
		$types = implode(',',array_keys(config("subject.types")));
		return [
			'name'=>'required|min:3|max:255',
			'hour'=>'required|numeric|min:0|max:6',
			'code'=>'required',
			'type'=>"required|in:$types"
		];
	}
	public function attributes() 
	{
		return [
			'name'=>'الاسم',
			'hour'=>'عدد الساعات',
			'code'=>'رمز المادة',
			'type'=>'النوع'
		];
	}
	public function messages() 
	{
		return [
			'in'=>'القيمة :attribute غير مقبلوة'
		];
	}

}