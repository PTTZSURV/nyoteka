<?php
/**
 * Home Controller
 */

declare(strict_types=1);

namespace App\Controllers;

class HomeController extends Controller
{
    public function index(): void
    {
        header('Content-Type: text/html; charset=UTF-8');
        echo <<<'HTML'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MkopoSafi - Fast Loans</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            text-align: center;
            background: white;
            padding: 60px 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            max-width: 600px;
        }
        h1 {
            color: #564FF9;
            margin-bottom: 20px;
            font-size: 2.5rem;
        }
        p {
            color: #666;
            font-size: 1.1rem;
            line-height: 1.6;
        }
        .status {
            background: #ECFDF5;
            color: #065F46;
            padding: 15px;
            border-radius: 8px;
            margin-top: 30px;
            font-weight: bold;
        }
        .version {
            color: #999;
            font-size: 0.9rem;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎉 MkopoSafi is Live!</h1>
        <p>Welcome to MkopoSafi - Fast loans to your M-Pesa account.</p>
        <div class="status">✅ Application is running successfully</div>
        <p style="margin-top: 30px; color: #999;">Check back soon for the full loan application interface.</p>
        <div class="version">Version 2.0.0 | PHP 8.2</div>
    </div>
</body>
</html>
HTML;
    }
}
