<?php

namespace App\Http\Controllers\Api;

use ReflectionException;
use App\Http\Requests\Request;
use App\Http\Controllers\Controller;
use Fast\Supports\Response\Response;
use Fast\Http\Exceptions\AppException;
use App\Repositories\User\UserInterface;
use App\Models\User;
use DB;

class DemoController extends Controller {
	/**
	 * Display a listing of the resource.
	 */
	public UserInterface $userRepository;

	public function __construct(UserInterface $userRepository) {
		$this->userRepository = $userRepository;
	}

	/**
	 * @throws AppException|ReflectionException
	 */
	public function index(Request $request): Response {
		$users = $this->userRepository->getList($request);
		return $this->respond($users);
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param int $id
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id
	 * @return bool
	 */
	public function edit(int $id): bool {
		return true;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param Request $request
	 * @param int $id
	 * @return bool
	 */
	public function update(Request $request, int $id): bool {
		return true;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id
	 * @return bool
	 */
	public function destroy(int $id): bool {
		return true;
	}
}
