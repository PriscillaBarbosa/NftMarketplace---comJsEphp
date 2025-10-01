
<?php
class Router {
    private $routes = [];
    
    public function get($path, $handler) {
        $this->routes['GET'][$path] = $handler;
    }
    
    public function post($path, $handler) {
        $this->routes['POST'][$path] = $handler;
    }
    
    public function dispatch() {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        
        // Remover trailing slash
        $path = rtrim($path, '/') ?: '/';
        
        if (isset($this->routes[$method][$path])) {
            $handler = $this->routes[$method][$path];
            $this->handleRequest($handler);
        } else {
            http_response_code(404);
            echo "404 - Página não encontrada";
        }
    }
    
    private function handleRequest($handler) {
        list($controller, $method) = explode('@', $handler);
        
        if (class_exists($controller)) {
            $controllerInstance = new $controller();
            if (method_exists($controllerInstance, $method)) {
                $controllerInstance->$method();
            }
        }
    }
}