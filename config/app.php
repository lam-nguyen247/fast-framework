<?php

return [
	'timezone' => 'Asia/Ho_Chi_Minh',
	'url' => env('APP_URL', '127.0.0.1:8000'),
	'key' => env('APP_KEY', ''),
	'layout' => env('MAIN_LAYOUT', 'master'),
	'autoload' => [
		'helpers/helpers.php',
	],

	'aliases' => [
		'Str' => Fast\Supports\Facades\Str::class,
		'App' => Fast\Supports\Facades\App::class,
		'Auth' => Fast\Supports\Facades\Auth::class,
		'Hash' => Fast\Supports\Facades\Hash::class,
		'Log' => Fast\Supports\Facades\Logger::class,
		'Route' => Fast\Supports\Facades\Route::class,
		'Config' => Fast\Supports\Facades\Config::class,
		'Creator' => Fast\Supports\Facades\Creator::class,
		'Session' => Fast\Supports\Facades\Session::class,
		'DB' => Fast\Supports\Facades\QueryBuilder::class,
		'Request' => Fast\Supports\Facades\Request::class,
		'Storage' => Fast\Supports\Facades\Storage::class,
		'Validator' => Fast\Supports\Facades\Validator::class,
		'Translator' => Fast\Supports\Facades\Translator::class,
		'FileSystem' => Fast\Supports\Facades\FileSystem::class,
		'AppException' => Fast\Http\Exceptions\AppException::class,
	],

	'providers' => [
		Fast\Hashing\HashServiceProvider::class,
		Fast\Database\QueryBuilder\QueryBuilderServiceProvider::class,
		Fast\Http\RequestServiceProvider::class,
		Fast\Routing\Controller\ControllerServiceProvider::class,
		Fast\Supports\Response\DataResponseServiceProvider::class,
		Fast\Session\SessionServiceProvider::class,
		Fast\Database\Connections\ConnectionServiceProvider::class,
		Fast\Configuration\ConfigurationServiceProvider::class,
		Fast\Bus\BusServiceProvider::class,
		Fast\Logger\LoggerServiceProvider::class,
		Fast\Storage\StorageServiceProvider::class,
		Fast\Translator\TranslatorServiceProvider::class,
		Fast\FileSystem\FileSystemServiceProvider::class,
		Fast\View\ViewServiceProvider::class,

		App\Providers\AppServiceProvider::class,
		App\Providers\AuthServiceProvider::class,
		App\Providers\RouteServiceProvider::class,
		App\Providers\RepositoryServiceProvider::class,
		App\Providers\ValidationServiceProvider::class,
	],
];
