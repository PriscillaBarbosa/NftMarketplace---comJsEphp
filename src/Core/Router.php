
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
        $path = rtrim($path, '/') ?: '/';
        
        if (isset($this->routes[$method][$path])) {
            $handler = $this->routes[$method][$path];
            $this->handleRequest($handler);
        } else {
 
            require_once ROOT_PATH . '/src/Controllers/ErrorController.php';
            $errorController = new ErrorController();
            $errorController->notFound();
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