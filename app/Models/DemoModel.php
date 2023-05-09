<?php

namespace App\Models;

use Fast\Eloquent\Model;

class DemoModel extends Model {
	protected string $table = '';
	protected string $primaryKey = '';

	protected array $fillable = [];

	protected array $hidden = [
		'password',
	];

	protected array $appends = ['appended'];

	protected array $casts = [];
}
