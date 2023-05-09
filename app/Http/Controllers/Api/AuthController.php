<?php

namespace App\Http\Controllers\Api;

use Fast\Supports\Facades\Auth;
use App\Http\Requests\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Controllers\Controller;
use Fast\Supports\Response\Response;
use Fast\Http\Exceptions\AppException;

class AuthController extends Controller {
	/**
	 * Login to the application
	 *
	 * @param LoginRequest $request
	 *
	 * @return Response
	 * @throws AppException
	 */
	public function login(LoginRequest $request): Response {
		$email = $request->get('email');
		$password = $request->get('password');
		if (Auth::attempt(['email' => $email, 'password' => $password])) {
			$user = Auth::user();
			$token = $user->createToken([
				'exp' => 60 * 24 * 30, // 60 min x 24 hours x 30 days
			]);

			return $this->respond([
				'token' => $token,
				'user' => $user,
			]);
		}
		return $this->respondError('Unauthorized', 401);
	}

	/**
	 * Logout user
	 *
	 * @return boolean
	 */
	public function logout(): bool {
		return Auth::logout();
	}

	/**
	 * Get current user
	 *
	 * @param Request $request
	 * @return Response
	 * @throws AppException
	 */
	public function getCurrentUser(Request $request): Response {
		return $this->respond($request->user('api'));
	}
}
