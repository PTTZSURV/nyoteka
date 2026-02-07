<?php
/**
 * Base Controller Class
 */

declare(strict_types=1);

namespace App\Controllers;

abstract class Controller
{
    protected string $viewPath = __DIR__ . '/../../views/';

    protected function render(string $view, array $data = []): void
    {
        $viewFile = $this->viewPath . $view . '.php';

        if (!file_exists($viewFile)) {
            throw new \RuntimeException("View not found: {$view}");
        }

        extract($data);
        require $viewFile;
    }

    protected function json(array $data, int $statusCode = 200): void
    {
        http_response_code($statusCode);
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    protected function redirect(string $path): void
    {
        header("Location: {$path}");
        exit;
    }

    protected function validate(array $data, array $rules): array
    {
        $errors = [];

        foreach ($rules as $field => $fieldRules) {
            $rules_array = explode('|', $fieldRules);
            
            foreach ($rules_array as $rule) {
                $result = $this->applyRule($field, $data[$field] ?? null, $rule);
                if ($result !== true) {
                    $errors[$field] = $result;
                    break;
                }
            }
        }

        return $errors;
    }

    private function applyRule(string $field, mixed $value, string $rule): bool|string
    {
        [$ruleName, ...$params] = explode(':', $rule);

        return match ($ruleName) {
            'required' => empty($value) ? "{$field} is required" : true,
            'email' => !filter_var($value, FILTER_VALIDATE_EMAIL) ? "{$field} must be valid email" : true,
            'numeric' => !is_numeric($value) ? "{$field} must be numeric" : true,
            'min' => strlen((string)$value) < (int)$params[0] ? "{$field} must be at least {$params[0]} characters" : true,
            'max' => strlen((string)$value) > (int)$params[0] ? "{$field} must not exceed {$params[0]} characters" : true,
            default => true,
        };
    }
}
