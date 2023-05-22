<?php

namespace App\Http\Middlewares;

use Closure;
use Fast\Http\Request;
use Fast\Http\Exceptions\AppException;
use Auth as Authenticate;

class Auth {
	/**
	 * Handle an incoming request.
	 *
	 * @param Request $request
	 * @param Closure $next
	 * @return mixed
	 *
	 * @throws AppException
	 */
	public function handle(Request $request, Closure $next): mixed {
		if (Authenticate::check()) {
			return $next($request);
		}
		throw new AppException('Unauthorized', 401);
	}
}
