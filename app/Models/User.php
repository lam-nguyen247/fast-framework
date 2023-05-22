<?php

namespace App\Models;

use Fast\Eloquent\Authenticate;
use Fast\Eloquent\Relationship\Relation;
use Fast\Database\QueryBuilder\QueryBuilder;

class User extends Authenticate {

	protected string $username = 'email';
	protected string $password = 'password';
	protected string $table = 'users';
	protected array $fillable = [
		'id',
		'email',
		'first_name',
		'last_name',
		'notify_push',
		'verified_at',
		'logged_at',
		'token',
		'remember_token',
	];

	protected array $hidden = [
		'password',
	];

	protected array $appends = [
		'full_name',
	];

	public function getFullNameAttribute(): string {
		return $this->first_name . ' ' . $this->last_name;
	}


	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
}
