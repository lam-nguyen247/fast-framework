<?php

/**
 * Fast - A BASIC PHP Framework
 *
 * @package  fast-framework
 * @author   Nguyen Thanh Lam <lnguyen24794@gmail.com>
 */

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js|woff2)$/', $_SERVER['REQUEST_URI'])) {
	return false;    // serve the requested resource as-is.
}
require_once __DIR__ . '/public/index.php';
