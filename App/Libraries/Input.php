<?php

namespace App\Libraries;

/**
 * Input library.
 * This will handle all the input utilisation
 *
 * @author Niroshan
 */
class Input {

    protected $data;

    function __construct() {
        $this->init();
    }

    private function init() {
        $this->data = file_get_contents('php://input');
        if ($this->isContentTypeJSON() && @$this->data[0] == "{") {
            $this->data = (array) json_decode($this->data);
        } else {
            $this->data = [];
        }
    }

    public function isContentTypeJSON() {
        return isset($_SERVER["CONTENT_TYPE"]) && trim($_SERVER["CONTENT_TYPE"]) == "application/json";
    }

    public function data($key = null) {
        if ($key) {
            return isset($this->data[$key]) ? $this->data[$key] : null;
        }
        return $this->data;
    }

    public function keyExist($key) {
        return isset($this->data[$key]);
    }

}

?>
