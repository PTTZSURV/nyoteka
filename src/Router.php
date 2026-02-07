<?php
/**
 * Router Class for URL Routing
 */

declare(strict_types=1);

namespace App;

class Router
{
    private array $routes = [];

    public function get(string $path, string $controller, string $method): void
    {
        $this->register('GET', $path, $controller, $method);
    }

    public function post(string $path, string $controller, string $method): void
    {
        $this->register('POST', $path, $controller, $method);
    }

    private function register(string $httpMethod, string $path, string $controller, string $method): void
    {
        $this->routes[$httpMethod][$path] = ['controller' => $controller, 'method' => $method];
    }

    public function dispatch(string $method, string $path): void
    {
        if (!isset($this->routes[$method])) {
            $this->send404();
            return;
        }

        foreach ($this->routes[$method] as $pattern => $route) {
            if ($this->matches($pattern, $path, $params)) {
                $this->callController($route['controller'], $route['method'], $params);
                return;
            }
        }

        $this->send404();
    }

    private function matches(string $pattern, string $path, array &$params): bool
    {
        $pattern = preg_quote($pattern, '#');
        $pattern = preg_replace('#:(\w+)#', '(?P<$1>[^/]+)', $pattern);
        
        if (preg_match("#^{$pattern}$#", $path, $matches)) {
            $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
            return true;
        }

        return false;
    }

    private function callController(string $controllerClass, string $method, array $params): void
    {
        if (!class_exists($controllerClass)) {
            throw new \RuntimeException("Controller not found: {$controllerClass}");
        }

        $controller = new $controllerClass();
        
        if (!method_exists($controller, $method)) {
            throw new \RuntimeException("Method not found: {$controllerClass}::{$method}");
        }

        call_user_func_array([$controller, $method], $params);
    }

    private function send404(): void
    {
        http_response_code(404);
        echo "404 - Page Not Found";
    }
}
