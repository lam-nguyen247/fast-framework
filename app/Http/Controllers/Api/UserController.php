<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\User;
use App\Http\Requests\Request;
use Fast\Supports\Response\Response;
use Fast\Http\Exceptions\AppException;
use App\Repositories\User\UserInterface;
use Fast\Routing\Controller\Controller;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserRequest;

class UserController extends Controller {
	/**
	 * User repository
	 *
	 * @var UserInterface
	 */
	public UserInterface $userRepository;

	/**
	 * Initial constructor UserController
	 *
	 * @param UserInterface $userRepository
	 *
	 * @return void
	 */
	public function __construct(UserInterface $userRepository) {
		$this->userRepository = $userRepository;
	}

	/**
	 * Index get list users
	 *
	 * @param Request $request
	 *
	 * @return Response
	 * @throws AppException
	 */
	public function index(Request $request): Response {
		$users = $this->userRepository->getList($request);
		return $this->respond($users);
	}

	/**
	 * Create user
	 *
	 * @param CreateUserRequest $request
	 *
	 * @return Response
	 * @throws AppException
	 */
	public function store(CreateUserRequest $request): Response {
		$user = $this->userRepository->create(
			$request->only(
				$this->userRepository->fillable()
			)
		);

		return $this->respondCreated($user);
	}

	/**
	 * Get one user
	 *
	 * @param User $user
	 *
	 * @return Response
	 * @throws AppException
	 */
	public function show(User $user): Response {
		return $this->respond($user);
	}

	/**
	 * Update user
	 *
	 * @param UpdateUserRequest $request
	 * @param User $user
	 *
	 * @return Response
	 * @throws AppException
	 */
	public function update(UpdateUserRequest $request, User $user): Response {
		try {
			$user->update($request->all());

			return $this->respondSuccess(true);
		} catch (AppException $e) {
			return $this->respondError($e->getMessage());
		}
	}

	/**
	 * Delete an user
	 *
	 * @param User $user
	 *
	 * @return Response
	 * @throws AppException
	 * @throws Exception
	 */
	public function destroy(User $user): Response {
		if (!$user->delete($user->id)) {
			throw new Exception("Unable to delete");
		}

		return $this->respondSuccess(true);
	}
}
