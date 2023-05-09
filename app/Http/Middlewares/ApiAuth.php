<?php

namespace App\Http\Middlewares;

use Closure;
use Fast\Http\Request;
use Fast\Http\Exceptions\AppException;

class ApiAuth {
	/**
	 * Handle an incoming request.
	 *
	 * @param Request $request
	 * @param Closure $next
	 * @return mixed
	 *
	 */
	public function handle(Request $request, Closure $next): mixed {
		if (false) {
			throw new AppException('Unauthorized', 401);
		}
		return $next($request);
	}
}
