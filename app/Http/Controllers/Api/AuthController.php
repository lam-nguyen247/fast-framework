<?php

namespace App\Http\Controllers\Api;

use ReflectionException;
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
	 * @throws AppException|ReflectionException
	 */
	public function login(LoginRequest $request): Response {
		$email = $request->get('email');
		$password = $request->get('password');
		if (Auth::attempt(['email' => $email, 'password' => $password])) {
			$user = Auth::user();
			$token = $user->createToken([
				'exp' => 60 * 24 * 30, // 60 min x 24 hours x 30 days
			]);
			$user->save();
			return $this->respond([
				'token' => $token,
				'user' => array_except($user->getData(['full_name', 'last_name', 'first_name', 'email']), ['token']),
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
	 * @throws AppException|ReflectionException
	 */
	public function getCurrentUser(Request $request): Response {
		return $this->respond($request->user('api'));
	}
}
