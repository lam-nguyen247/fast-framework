<?php

namespace App\Http\Requests;

use ReflectionException;
use Fast\Http\FormRequest;
use Fast\Http\Exceptions\AppException;

class DemoRequestFile extends FormRequest {
	public function authorize(): bool {
		return true;
	}

	public function rules(): array {
		return [
			'email' => 'required|email|unique:users,email;admin@gmail.com',
			'file' => 'required|customRule|image|min:0.5',
		];
	}

	/**
	 * @throws ReflectionException
	 * @throws AppException
	 */
	public function messages(): array {
		return [
			'file.required' => trans('validation.required', ['attribute' => 'file']),
			'file.image' => trans('validation.image', ['attribute' => 'file']),
			'file.min' => trans('validation.min.file', ['attribute' => 'file', 'min' => 0.5]),
		];
	}
}
