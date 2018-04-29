<?php

function getValidatedAbsoluteFilePath($fileWithPath) {
    $path = BASE_DIRECTORY . $fileWithPath;
    if (!file_exists($fileWithPath)) {
        return FALSE;
    }
    return $path;
}

function dump($data) {
    echo "<pre style='background:#000;color:#fff;padding:20px'>";
    var_dump($data);
    echo "</pre>";
}

function dd($data) {
    dump($data);
    die();
}

