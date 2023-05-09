<?php

class DatabaseTableSeeder  {
	public function run(): void {
		\App\Models\User::create([
			'email' => 'admin@kamora.vn',
			'password' => Hash::make('123456'),
			'fist_name' => 'Admin',
			'last_name' => 'Kamora',
		]);
	}
}
