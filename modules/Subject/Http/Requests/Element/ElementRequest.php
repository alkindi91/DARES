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
		$state = implode(',',array_keys(config("subject.state")));
		return [
			'title'=>'required|min:3|max:255',
			'element_order'=>'required|numeric',
			'type'=>'required',
			'state' =>'required',
			'value' => 'required_if:type,نص|required_if:type,URL',
			'subject_lesson_id'=>'exists:subject_lessons,id',
			'file'=>'required_if:type,فيديو|required_if:type,صوت,required_if:type,PDF'		
			];
	}
	public function attributes() 
	{
		return [
			'title'=>'(اسم العنصر)',
			'element_order'=>'(ترتيب العنصر)',
			'type'=>'(نوع العنصر)',
			'state'=>'(الحالة)',
			'value'=> '(قيمة العنصر)',
			'file'=>'(الملف)'
		];
	}
	public function messages() 
	{
		return [
			'in'=>'القيمة :attribute غير مقبلوة'
		];
	}
}
