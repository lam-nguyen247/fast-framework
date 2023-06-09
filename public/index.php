<?php

/**
 * FastPHP - A PHP Framework For Pure PHP
 *
 * @package  FastFramework
 * @author   lam.nguyen247 <lnguyen24794@gmail.com>
 */

define('CREATOR_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
 */
require __DIR__ . '/../init/autoload.php';

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
 */
$app = require __DIR__ . '/../init/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
 */
$kernel = $app->make(Fast\Contracts\Http\Kernel::class);

$response = $kernel->handle(new Fast\Http\Request());
