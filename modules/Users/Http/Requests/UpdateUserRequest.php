<?php namespace Modules\Users\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest {

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
			'email'	=>'required|email|unique:users,email,'.$this->uuser->id,
			'gender'=>'required|in:f,m',
			'password'=>'sometimes|confirmed|min:4',
			'birthday'=>'sometimes|date'
		];
	}

}
