<?php

namespace App\Repositories\User;

use App\Models\User;
use ReflectionException;
use App\Http\Requests\Request;
use Fast\Http\Exceptions\AppException;
use Fast\Supports\Patterns\Abstracts\AppRepository as Repository;

class NewUserRepository extends Repository implements UserInterface {
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
		return 3;
	}

}
