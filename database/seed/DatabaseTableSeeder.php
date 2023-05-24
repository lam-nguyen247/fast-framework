<?php

class DatabaseTableSeeder {
	public function run(): void {
		\App\Models\User::create([
			'email' => 'admin@gmail.com',
			'password' => Hash::make('123456'),
			'first_name' => 'Admin',
			'last_name' => 'System',
		]);
	}
}
