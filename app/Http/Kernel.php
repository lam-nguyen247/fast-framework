<?php

namespace App\Http;

use Fast\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel {
	public array $routeMiddlewares = [
		'api:auth' => \App\Http\Middlewares\Auth::class,
		'checkPermission' => \App\Http\Middlewares\CheckPermission::class,
		'api:request' => \App\Http\Middlewares\ApiRequest::class,
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