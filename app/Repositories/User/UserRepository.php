<?php

namespace App\Repositories\User;

use App\Models\User;
use ReflectionException;
use Fast\Eloquent\Collection;
use App\Http\Requests\Request;
use App\Resources\UserResource;
use Fast\Http\Exceptions\AppException;
use Fast\Supports\Patterns\Abstracts\AppRepository as Repository;
use Log;

class UserRepository extends Repository implements UserInterface {
	public function __construct() {

		parent::__construct();
	}

	public function model(): string {
		return User::class;
	}

	/**
	 * @throws AppException|ReflectionException
	 */
	public function getList(Request $request): mixed {
		Log::info('test');
		return 2;
	}
}
