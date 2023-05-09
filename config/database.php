<?php

return [
	'default' => env('DB_CONNECTION', 'mysql'),

	'connections' => [
		'mysql' => [
			'driver' => 'mysql',
			'host' => env('DB_HOST', '127.0.0.1'),
			'port' => env('DB_PORT', '3306'),
			'database' => env('DB_DATABASE', 'kamora_cms'),
			'username' => env('DB_USERNAME', 'root'),
			'password' => env('DB_PASSWORD', 'password'),
		],
		'pgsql' => [
			'driver' => 'pgsql',
			'host' => '127.0.0.1',
			'port' => 3456,
			'database' => 'fast',
			'username' => 'postgres',
			'password' => 'root',
		],
		'backup' => [
			'driver' => env('BACKUP_DB_CONNECTION', 'mysql'),
			'host' => env('BACKUP_DB_HOST', '127.0.0.1'),
			'port' => env('BACKUP_DB_PORT', '3306'),
			'database' => env('BACKUP_DB_DATABASE', 'fast_backup'),
			'username' => env('BACKUP_DB_USERNAME', 'admin_backup'),
			'password' => env('BACKUP_DB_PASSWORD', ''),
		],
	],
];
