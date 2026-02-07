<?php
/**
 * Main Application Class
 */

declare(strict_types=1);

namespace App;

class Application
{
    private Database $database;
    private Router $router;

    public function __construct()
    {
        $this->initializeDatabase();
        $this->initializeRouter();
    }

    private function initializeDatabase(): void
    {
        $this->database = new Database(
            DB_HOST,
            DB_USER,
            DB_PASSWORD,
            DB_NAME
        );
    }

    private function initializeRouter(): void
    {
        $this->router = new Router();
        $this->registerRoutes();
    }

    private function registerRoutes(): void
    {
        // Home page
        $this->router->get('/', Controllers\HomeController::class, 'index');

        // Eligibility check
        $this->router->post('/check-eligibility', Controllers\EligibilityController::class, 'check');

        // Loan application
        $this->router->post('/apply-loan', Controllers\LoanController::class, 'apply');

        // M-Pesa callback
        $this->router->post('/mpesa-callback', Controllers\MpesaController::class, 'callback');
        $this->router->post('/mpesa-validation', Controllers\MpesaController::class, 'validation');
        $this->router->post('/mpesa-confirmation', Controllers\MpesaController::class, 'confirmation');

        // Query transaction
        $this->router->get('/query/:id', Controllers\TransactionController::class, 'query');
    }

    public function run(): void
    {
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);

        // Remove trailing slash
        $path = rtrim($path, '/') ?: '/';

        try {
            $this->router->dispatch($method, $path);
        } catch (\Exception $e) {
            $this->handleException($e);
        }
    }

    private function handleException(\Exception $e): void
    {
        http_response_code(500);
        
        if (DEBUG_MODE) {
            echo "<pre>";
            echo "Error: " . htmlspecialchars($e->getMessage()) . "\n";
            echo "File: " . htmlspecialchars($e->getFile()) . "\n";
            echo "Line: " . $e->getLine() . "\n";
            echo "</pre>";
        } else {
            echo "An error occurred. Please try again later.";
        }

        error_log($e->getMessage() . " in " . $e->getFile() . ":" . $e->getLine());
    }

    public function getDatabase(): Database
    {
        return $this->database;
    }
}
