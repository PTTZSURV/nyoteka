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
        $this->render('home', [
            'appName' => APP_NAME,
            'appVersion' => APP_VERSION,
        ]);
    }
}
