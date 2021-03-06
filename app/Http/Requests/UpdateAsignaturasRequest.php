<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateAsignaturasRequest extends Request {

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
			"departamento_id" => "required",
			"codigo" => "required|min:4|max:8",
			"nombre" => "required|min:3|max:50",
			"descripcion" => "min:3|max:100"
		];
	}

}
