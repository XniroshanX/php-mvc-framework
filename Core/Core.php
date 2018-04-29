<?php

namespace Core;

use Core\Router;


/**
 * Core of the framework
 *
 * @author Niroshan
 */
class Core {

    protected $queryString;
    protected $router;

    function __construct() {
        $this->queryString = $_SERVER['QUERY_STRING'];
        $this->router = new Router();
    }

    public function routeHandler() {
        $routePath = getValidatedAbsoluteFilePath('App/Config/Routes.php');
        if (!$routePath) {
            die("Unable to include routes configuration");
        }
        include $routePath;
        $this->router->add($routes);
        $this->router->dispatch($_SERVER['QUERY_STRING']);
    }

}

?>
