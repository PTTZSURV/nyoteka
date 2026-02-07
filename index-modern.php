<?php
/**
 * MkopoSafi Loans Application
 * Modern PHP Application - Entry Point
 */

// Error handling
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('log_errors', '1');
ini_set('error_log', __DIR__ . '/error_log');

// Load environment variables
require_once __DIR__ . '/config/env.php';

// Autoload classes
require_once __DIR__ . '/config/autoload.php';

// Initialize application
$app = new \App\Application();
$app->run();
