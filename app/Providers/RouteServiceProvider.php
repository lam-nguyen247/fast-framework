<?php

namespace App\Providers;

use Fast\Http\Exceptions\AppException;
use Fast\Routing\RouteServiceProvider as ServiceProvider;
use Fast\Supports\Facades\Route;

class RouteServiceProvider extends ServiceProvider {
	/**
	 * Booting route service
	 *
	 * @return void
	 * @throws AppException
	 */
	public function boot(): void {
		Route::middleware('api:request')
			->prefix('api')
			->namespace('App\\Http\\Controllers\\Api')
			->path(route_path('api.php'));
	}
}
