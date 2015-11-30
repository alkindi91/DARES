<?php namespace Modules\Subject\Http\Requests\Element;

use Illuminate\Foundation\Http\FormRequest;

class ElementRequest extends FormRequest {

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
			'title'=>'required|min:3|max:255',
			'element_order'=>'required|numeric',
			'type'=>'required|in:0,1',
			'state' =>'required|in:0,1',
			'value' => 'required',
			'subject_lesson_id'=>'exists:subject_lessons,id'		];
	}
	public function attributes() 
	{
		return [
			'title'=>'العنوان',
			'element_order'=>'ترتيب الدرس',
			'type'=>'النوع',
			'state'=>'الحالة',
			'value'=> 'القيمة'
		];
	}
	public function messages() 
	{
		return [
			'in'=>'القيمة :attribute غير مقبلوة'
		];
	}
}
