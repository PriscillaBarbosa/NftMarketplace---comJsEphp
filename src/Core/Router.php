<?php
namespace App\Core;

class Router {
    private $routes = [];
    private $middlewares = [];

    public function get($uri, $controller) {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller) {
        $this->routes['POST'][$uri] = $controller;
    }

    public function middleware($middleware) {
        $this->middlewares[] = $middleware;
        return $this;
    }

    public function dispatch() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];
        
        if (isset($this->routes[$method][$uri])) {
            //$this->executeMiddlewares();
            $this->executeController($this->routes[$method][$uri]);
        } else {
            http_response_code(404);
            echo "Página não encontrada";
        }
    }

    private function executeController($controller) {
        [$class, $method] = explode('@', $controller);
        $class = "App\\Controllers\\$class";
        (new $class)->$method();
    }
}