<?php

namespace App\Http;

use Fast\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel {
	public array $routeMiddlewares = [
		'web:api' => \App\Http\Middlewares\ApiAuth::class,
		'web:auth' => \App\Http\Middlewares\Auth::class,
		'checkPermission' => \App\Http\Middlewares\CheckPermission::class,
	];

	/**
	 * The application's global HTTP middleware stack.
	 *
	 * These middleware are run during every request to your application.
	 *
	 * @var array
	 */
	protected array $middlewares = [
		\Fast\Http\Middlewares\CheckIsMaintenanceMode::class,
		\Fast\Http\Middlewares\ValidatePostSize::class,
		\Fast\Http\Middlewares\LimitRequest::class,
	];

}