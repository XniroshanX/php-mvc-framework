<?php

/*
 * Routes
 */

$routes['test'] = ['controller' => 'User', 'action' => 'myFunction', 'method' => 'GET'];
$routes['user/{id:\d+}/product'] = ['controller' => 'User', 'action' => 'myFunction', 'method' => 'GET'];
