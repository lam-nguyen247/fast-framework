<?php

namespace App\Http\Middlewares;

use Closure;
use Fast\Http\Request;
use Fast\Http\Exceptions\AppException;

class ApiRequest {
	/**
	 * Handle an incoming request.
	 *
	 * @param Request $request
	 * @param Closure $next
	 * @return mixed
	 *
	 */
	public function handle(Request $request, Closure $next): mixed {
		return $next($request);
	}
}
