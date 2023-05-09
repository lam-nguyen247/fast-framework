<?php

namespace App\Providers;

use Fast\Http\Request;
use ReflectionException;
use Fast\Http\Exceptions\AppException;
use Fast\Http\Validation\ValidationServiceProvider as BaseValidationServiceProvider;

class ValidationServiceProvider extends BaseValidationServiceProvider {
	/**
	 * Booting route service
	 *
	 * @return void
	 * @throws AppException
	 * @throws ReflectionException
	 */
	public function boot(): void {
		parent::boot();

		$validator = $this->app->make('validator');

		$validator->setRule('customRule', function (Request $request): bool {
			$headers = $request->headers();

			return isset($headers->Authorization);
		}, trans('validation.custom.message'));
	}
}
