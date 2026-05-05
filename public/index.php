<?php

// Setup Constants
// Must define PUBLIC_PATH & ROOT_PATH
// PUBLIC_PATH: Directory where your domain is pointed at as the Domain Document Root.
// ROOT_PATH: Directory where the project code lives
// You may use the same directory for both, but you must set the values of both constants separately.
// It's recommended to use Absolute paths for these constants

define('PUBLIC_PATH', __DIR__);
define('ROOT_PATH', dirname(__DIR__));

// Autoload
require ROOT_PATH . '/vendor/autoload.php';

// Bootstrap the Savv framework
$app = \Savv\Core\Application::bootstrap(ROOT_PATH, PUBLIC_PATH);

$app->run();