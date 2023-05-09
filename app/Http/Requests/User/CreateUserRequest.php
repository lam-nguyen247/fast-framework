<?php

namespace App\Http\Requests\User;

use Fast\Http\FormRequest;

class CreateUserRequest extends FormRequest {
	public function authorize(): bool {
		return true;
	}

	public function rules(): array {
		return [
			'name' => 'required',
			'email' => 'required',
			'password' => 'required',
		];
	}

	public function messages(): array {
		return [
		];
	}
}
