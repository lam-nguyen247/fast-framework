<?php
namespace App\Resources;

use Fast\Http\Request;
use Fast\Eloquent\Collection;

class UserResource extends Collection {
	public function handle(Request $request): Collection {
		return $this->map(function ($item) use ($request) {
			return [
				'id' => $item['id'] ?? null,
				'full_name' => $item['full_name'] ?? null,
			];
		});
	}
}