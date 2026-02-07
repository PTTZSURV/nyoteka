<?php
// Simple test file for Railway deployment verification
header('Content-Type: application/json');

$data = [
    'status' => 'ok',
    'message' => 'PHP server is running',
    'php_version' => phpversion(),
    'memory_usage' => memory_get_usage(true),
    'timestamp' => date('c'),
    'environment' => isset($_ENV) ? 'with environment' : 'without environment'
];

echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
