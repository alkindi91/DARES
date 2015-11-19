<?php namespace Modules\Lists\Http\Requests\Country;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCountryRequest extends FormRequest {

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
			'name'=>'required|max:255|min:2|unique:countries,name,'.$this->country->id
		];
	}

	public function attributes() {
		return [
			'name'=>'اسم الدولة'
		];
	}

}
