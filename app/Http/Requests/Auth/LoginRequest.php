<?php
namespace App\Http\Requests\Auth;

use Fast\Http\FormRequest;

class LoginRequest extends FormRequest {
	public function authorize(): bool {
		return true;
	}

	public function rules(): array {
		return [
			'email' => 'required|string',
			'password' => 'required|string',
		];
	}

	public function messages(): array {
		return [
		];
	}
}
