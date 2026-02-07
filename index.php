<?php
/**
 * MkopoSafi Application
 * Simple PHP Router - No External Dependencies
 */

// Set error reporting to silent (log to file instead)
error_reporting(E_ALL);
ini_set('display_errors', '0');
ini_set('log_errors', '1');
ini_set('error_log', __DIR__ . '/error.log');

try {
    // Get the requested path
    $request_uri = $_SERVER['REQUEST_URI'] ?? '/';
    $path = parse_url($request_uri, PHP_URL_PATH);

    // Health check endpoint
    if ($path === '/health' || $path === '/test.php') {
        header('Content-Type: application/json');
        http_response_code(200);
        echo json_encode([
            'status' => 'ok',
            'app' => 'MkopoSafi',
            'version' => '2.0.0',
            'php_version' => phpversion(),
            'timestamp' => date('c'),
            'environment' => php_sapi_name()
        ]);
        exit;
    }

    // Root home page
    if ($path === '/' || $path === '/index.php') {
        header('Content-Type: text/html; charset=UTF-8');
        http_response_code(200);
        echo <<<'HTML'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MkopoSafi - Fast Loans to Your M-Pesa Account">
    <title>MkopoSafi - Fast Loans</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            background: white;
            padding: 60px 40px;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 700px;
            text-align: center;
        }
        h1 {
            color: #667eea;
            margin-bottom: 20px;
            font-size: 3rem;
        }
        p {
            color: #555;
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 30px;
        }
        .features {
            text-align: left;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin: 40px 0;
        }
        .feature {
            padding: 15px;
            background: #f0f4ff;
            border-radius: 8px;
            border-left: 4px solid #667eea;
        }
        .feature h3 {
            color: #667eea;
            font-size: 1rem;
            margin-bottom: 8px;
        }
        .feature p {
            color: #666;
            font-size: 0.9rem;
            margin: 0;
        }
        .status {
            background: #ECFDF5;
            color: #065F46;
            padding: 20px;
            border-radius: 8px;
            margin-top: 30px;
            font-weight: bold;
            font-size: 1.1rem;
        }
        .version {
            color: #999;
            font-size: 0.85rem;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        .links {
            margin-top: 30px;
        }
        .links a {
            display: inline-block;
            margin: 0 10px;
            color: #667eea;
            text-decoration: none;
            font-weight: bold;
        }
        .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎉 MkopoSafi</h1>
        <p><strong>Fast Loans to Your M-Pesa Account</strong></p>
        
        <div class="features">
            <div class="feature">
                <h3>⚡ Instant Approval</h3>
                <p>Get approved in minutes</p>
            </div>
            <div class="feature">
                <h3>💰 Up to Ksh 15,000</h3>
                <p>Loan amounts flexible</p>
            </div>
            <div class="feature">
                <h3>✅ No Paperwork</h3>
                <p>100% online process</p>
            </div>
            <div class="feature">
                <h3>🔒 Secure & Safe</h3>
                <p>Your data is protected</p>
            </div>
        </div>

        <div class="status">
            ✅ Application is running successfully!
        </div>

        <div class="links">
            <p>Check API status:</p>
            <a href="/health">Health Check</a>
            <a href="/test.php">Test Endpoint</a>
        </div>

        <div class="version">
            <strong>MkopoSafi v2.0.0</strong> | PHP 8.2 | Modern PHP Architecture
            <br>GitHub: <a href="https://github.com/PTTZSURV/nyoteka" style="color: #667eea;">PTTZSURV/nyoteka</a>
        </div>
    </div>
</body>
</html>
HTML;
        exit;
    }

    // 404 for all other paths
    header('Content-Type: text/html; charset=UTF-8');
    http_response_code(404);
    echo <<<'HTML'
<!DOCTYPE html>
<html>
<head>
    <title>404 Not Found</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: #f0f0f0;
            margin: 0;
        }
        .content {
            background: white;
            padding: 40px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #667eea;
            margin-bottom: 10px;
        }
        a {
            color: #667eea;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>404 - Page Not Found</h1>
        <p>The requested path does not exist.</p>
        <a href="/">Go Home</a>
    </div>
</body>
</html>
HTML;
        exit;

} catch (Throwable $e) {
    // Handle any unexpected errors gracefully
    header('Content-Type: application/json');
    http_response_code(500);
    error_log("FATAL ERROR in index.php: " . $e->getMessage() . " in " . $e->getFile() . " line " . $e->getLine());
    echo json_encode([
        'error' => 'Internal Server Error',
        'message' => $e->getMessage(),
        'file' => $e->getFile(),
        'line' => $e->getLine()
    ]);
    exit;
}
