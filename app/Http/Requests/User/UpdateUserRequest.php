<?php

namespace App\Http\Requests\User;

use Fast\Http\FormRequest;

class UpdateUserRequest extends FormRequest {
	public function authorize(): bool {
		return true;
	}

	public function rules(): array {
		return [
			'email' => 'required',
			'password' => 'required',
		];
	}

	public function messages(): array {
		return [];
	}
}
