<?php

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

// Requires the autoloader and starts the app
require_once __DIR__.'/core/public/index.php';
