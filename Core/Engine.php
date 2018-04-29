<?php

namespace Core;

use Core\Core;

/**
 * Engine of the framework
 *
 * @author Niroshan
 */
class Engine extends Core {

    function __construct() {
        parent::__construct();
    }

    public function start() {
        $this->routeHandler();
    }

}

?>
