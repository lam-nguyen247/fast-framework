<?php

namespace App\Models;

use Fast\Eloquent\Authenticate;
use Fast\Eloquent\Relationship\Relation;
use Fast\Database\QueryBuilder\QueryBuilder;

class User extends Authenticate //use for authentication {
	protected string $username = 'email';
	protected string $password = 'password';
	protected string $table = 'users';
	protected array $fillable = [
		'id',
		'email',
		'fist_name',
		'last_name',
		'notify_push',
		'is_verified',
		'logged_at',
		'token',
		'remember_token',
	];

	protected array $hidden = [
		'password',
	];

	protected array $appends = [
		'full_name', 'url_social',
	];

//    protected array $casts = [
//        'id' => 'int',
//        'email' => 'string',
//    ];

	/**
	 * Get url social media attribute mutator
	 *
	 * @return array
	 */
	public function getUrlSocialAttribute(): array {
		return [
			'facebook' => 'facebook.com' . '/' . $this->id,
			'instagram' => 'instagram.com',
		];
	}

	public function getFullNameAttribute(): string {
		return $this->first_name . ' ' . $this->last_name;
	}

	/**
	 * Option company
	 *
	 * @return array
	 */
	public function company(): array {
		return [
			'name' => 'Kamora',
		];
	}

	/**
	 * Relationship profile of user
	 *
	 * @return Relation
	 */
	public function profile(): Relation {
		return $this->hasOne(UserProfile::class);
	}

	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
}
