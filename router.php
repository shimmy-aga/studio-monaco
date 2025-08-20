<?php
// Used only for local development with: php -S localhost:8000 router.php

// If running with PHP built-in server, serve existing files directly
if (php_sapi_name() === 'cli-server') {
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];

    if (is_file($file)) {
        return false; // Serve the requested file as-is
    }
}

// Route all other requests to index.php with $_GET['page'] set
// Remove leading/trailing slashes from URI path
$page = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// If root (empty), set to 'home'
if ($page === '') {
    $page = 'home';
}

// Set $_GET['page'] so index.php can use it
$_GET['page'] = $page;

// Now include your index.php script to handle the request
require_once __DIR__ . '/index.php';