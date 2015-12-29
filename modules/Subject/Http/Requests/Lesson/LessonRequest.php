<?php namespace Modules\Subject\Http\Requests\Lesson;

use Illuminate\Foundation\Http\FormRequest;

class LessonRequest extends FormRequest {

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
		$types = implode(',',array_keys(config("subject.lesson_type")));
		$state = implode(',',array_keys(config("subject.state")));
		return [
			'name'=>'required|min:3|max:255',
			'lesson_order'=>'required|numeric',
			'type'=>'required',
			'state'=>'required',
			'subject_subject_id'=>'exists:subject_subjects,id'
		];
	}

	public function attributes() 
	{
		return [
			'lesson_order'=>'(ترتيب الدرس)',
			'type'=>'(النوع)',
			'state'=>'(الحالة)'
		];
	}
	public function messages() 
	{
		return [
			'in'=>'القيمة :attribute غير مقبلوة'
		];
	}

}
