<?php

namespace App\Libraries;

/**
 * Response library
 *
 * @author Niroshan
 */
class Response {

    function __construct() {
        
    }

    function notFoundResponse($message) {
        $this->response(false, 404, $message);
    }

    function validationErrorResponse($message) {
        $this->response(false, 200, $message);
    }

    function successResponseWithData($message, $data) {
        $this->response(true, 200, $message, $data);
    }

    function serverErrorResponse($message) {
        $this->response(false, 500, $message);
    }

    function unauthorizedResponse($message) {
        $this->response(false, 401, $message);
    }

    function response($success = false, $code = 200, $message = "", $data = null) {
        $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');
        header('Content-Type: application/json');
        header($protocol . ' ' . $code . ' ' . $message);
        http_response_code($code);
        $output = [
            'status' => $success,
            'code' => $code,
            'message' => $message,
            'time' => microtime(false) - START_TIME
        ];
        if ($success && $data != null) {
            $output['data'] = $data;
        }
        echo json_encode($output);
        exit();
    }

}

?>
