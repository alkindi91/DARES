<?php namespace Modules\Registration\Http\Requests\Step;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStepRequest extends FormRequest {

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
			'name'=>'required|max:255|min:2'
		];
	}

	public function attributes() {
		return [
			'edit_form'=>trans('registration::steps.edit_form'),
			'upload_files'=>trans('registration::steps.uplaod_files'),
			'next_steps'=>trans('registration::steps.next_steps'),
		];
	}

}
