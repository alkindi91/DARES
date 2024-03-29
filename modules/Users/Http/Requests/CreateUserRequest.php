<?php namespace Modules\Users\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest {

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
			'name'	=>'required|max:255|min:3',
			'email'	=>'required|email|unique:users,email',
			'gender'=>'required|in:f,m',
			'password'=>'required|confirmed|min:4',
			'birthday'=>'sometimes|date'
		];
	}

}
