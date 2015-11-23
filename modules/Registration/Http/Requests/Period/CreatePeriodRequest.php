<?php namespace Modules\Registration\Http\Requests\Period;

use Illuminate\Foundation\Http\FormRequest;

class CreatePeriodRequest extends FormRequest {

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
			'name'		=>	'required|max:255|min:3',
			'start_at'	=>	'date|required',
			'finish_at'	=>	'date|required|after:start_at',
		];
	}

	public function attributes() {
		return  [
			'name'		=>	trans('registration::periods.name'),
			'start_at'	=>	trans('registration::periods.start_at'),
			'finish_at'	=>	trans('registration::periods.finish_at'),
		];
	}

}
