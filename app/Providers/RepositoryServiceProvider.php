<?php

namespace App\Providers;

use App\Repositories\User\UserInterface;
use App\Repositories\User\UserRepository;
use Fast\ServiceProvider;
use App\Repositories\User\NewUserRepository;

class RepositoryServiceProvider extends ServiceProvider {
	public function boot(): void { }

	public function register(): void {
		$this->app->bind(UserInterface::class, UserRepository::class);
	}
}