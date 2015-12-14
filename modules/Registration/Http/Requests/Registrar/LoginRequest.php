<?php namespace Modules\Registration\Http\Requests\Registrar;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest {

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
			'username'=>'required|min:5',
			'password'=>'required|min:4'
		];
	}

	public function attributes()
	{
		return [
			'username'=>trans('registration::registrar.username'),
			'password'=>trans('registration::registrar.password'),
		];
	}

}
