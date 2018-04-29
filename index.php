<?php

session_start();

use Core\Engine;

define("BASE_DIRECTORY", dirname(__FILE__) . DIRECTORY_SEPARATOR);
require BASE_DIRECTORY . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
require BASE_DIRECTORY . 'Core' . DIRECTORY_SEPARATOR . 'Helper.php';

$engine = new Engine();
$engine->start();
