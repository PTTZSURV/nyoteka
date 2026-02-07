<?php
/**
 * Environment Configuration
 * Load .env file and set environment variables
 */

declare(strict_types=1);

class EnvLoader
{
    public static function load(string $filePath = __DIR__ . '/../.env'): void
    {
        // If .env file exists, load it
        if (file_exists($filePath)) {
            $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            
            foreach ($lines as $line) {
                if (str_starts_with(trim($line), '#') || !str_contains($line, '=')) {
                    continue;
                }

                [$key, $value] = explode('=', $line, 2);
                $key = trim($key);
                $value = trim($value);

                $_ENV[$key] = $value;
                putenv("{$key}={$value}");
            }
        }
        
        // Fallback to environment variables if .env doesn't exist
        // (for production/containerized environments)
    }
}

// Load environment
EnvLoader::load();

// Define application constants
define('APP_NAME', 'MkopoSafi Loans');
define('APP_VERSION', '2.0.0');
define('APP_ENV', $_ENV['APP_ENV'] ?? 'development');
define('DEBUG_MODE', APP_ENV === 'development');

// Database configuration
define('DB_HOST', $_ENV['DB_HOST'] ?? 'localhost');
define('DB_USER', $_ENV['DB_USER'] ?? '');
define('DB_PASSWORD', $_ENV['DB_PASSWORD'] ?? '');
define('DB_NAME', $_ENV['DB_NAME'] ?? '');

// API Configuration
define('MPESA_CONSUMER_KEY', $_ENV['MPESA_CONSUMER_KEY'] ?? '');
define('MPESA_CONSUMER_SECRET', $_ENV['MPESA_CONSUMER_SECRET'] ?? '');
define('MPESA_SHORTCODE', $_ENV['MPESA_SHORTCODE'] ?? '');
define('MPESA_PASSKEY', $_ENV['MPESA_PASSKEY'] ?? '');
