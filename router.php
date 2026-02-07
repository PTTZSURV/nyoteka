<?php
/**
 * Router script for PHP built-in development server
 * This file handles URL routing for static files and application requests
 */

$requested_file = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$file_path = __DIR__ . $requested_file;

// Remove query string from file path
if (strpos($file_path, '?') !== false) {
    $file_path = substr($file_path, 0, strpos($file_path, '?'));
}

// Serve static files directly
if ($requested_file !== '/' && file_exists($file_path) && is_file($file_path)) {
    return false; // Let the built-in server serve it
}

// Route all other requests to the application
$_SERVER['PHP_SELF'] = '/index-modern.php';
require __DIR__ . '/index-modern.php';
