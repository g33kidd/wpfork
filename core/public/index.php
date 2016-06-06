<?php

// Register the autoloader
require __DIR__.'/../boot/autoload.php';

// Create the app
$app = require_once __DIR__.'/../boot/app.php';

// Run the application
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
