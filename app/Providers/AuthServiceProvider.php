<?php

namespace App\Providers;

use Fast\Http\Exceptions\AppException;
use Fast\Auth\AuthenticationServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider {
	/**
	 * Booting auth service
	 *
	 * @return void
	 * @throws AppException
	 * @throws \ReflectionException
	 */
	public function boot(): void {
		$this->app->make('auth')->guard();
	}
}