<?php
/**
 * PSR-4 Autoloader
 * Automatically load classes from the App namespace
 */

declare(strict_types=1);

spl_autoload_register(function ($class): void {
    $prefix = 'App\\';
    $baseDir = __DIR__ . '/../src/';

    if (str_starts_with($class, $prefix)) {
        $relative_class = substr($class, strlen($prefix));
        $file = $baseDir . str_replace('\\', '/', $relative_class) . '.php';

        if (file_exists($file)) {
            require_once $file;
        }
    }
});
