<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('DS', '/');
define('ROOT', __DIR__ );

include_once(ROOT . DS . 'helpers' . DS . 'system.php');
include_once(ROOT . DS . 'system' . DS . 'Heart.php');

$Heart = new Heart();
include_once(ROOT . DS . 'routes.php');

Route::start();