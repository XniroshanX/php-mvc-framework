<?php

namespace App\Libraries;

/**
 * View library for handle views
 *
 * @author Niroshan
 */
class View {

    private $viewStack;
    private $dataStack;
    private static $instance;

    function __construct() {
        $this->viewStack = [];
        $this->dataStack = [];
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new View();
        }
        return self::$instance;
    }

    public function addView($view) {
        $this->viewStack[] = $view;
        return $this;
    }

    public function addData($data) {
        $this->dataStack = array_merge($this->dataStack, $data);
        return $this;
    }

    public function render() {
        /*
         * Extracting view data
         * to use in views
         */
        extract($this->dataStack, EXTR_PREFIX_SAME, "v");
        foreach ($this->viewStack as $v) {
            include "App/Views/" . $v . ".php";
        }
    }

}

?>
