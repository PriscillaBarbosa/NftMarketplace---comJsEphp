<!--
================================
ARQUIVO: public/index.php
================================
-->

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Servir arquivos estáticos para o servidor embutido do PHP
if (php_sapi_name() === 'cli-server') {
    $url = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    
    // Se o arquivo existe (CSS, JS, imagens), serve diretamente
    if (is_file($file)) {
        return false;
    }
}

// Definir constantes globais
define('BASE_URL', 'http://localhost:8000/'); 
define('ROOT_PATH', dirname(__DIR__)); // Caminho raiz do projeto

require_once '../src/Core/Router.php';
require_once '../src/Core/Database.php';
require_once '../src/Controllers/HomeController.php';
require_once '../src/Controllers/RegisterController.php';
require_once '../src/Controllers/NFTController.php'; 
require_once '../src/Controllers/AuthController.php';

// Inicializar o roteador
$router = new Router();

// Definir rotas
$router->get('/', 'HomeController@index');
$router->get('/home', 'HomeController@index');
$router->get('/register', 'RegisterController@index');        // ← nova rota (mostra o form)
$router->post('/register', 'RegisterController@store');       // ← nova rota (processa os dados)
$router->get('/login', 'AuthController@index');
$router->post('/login/processar', 'AuthController@login');
$router->get('/logout', 'AuthController@logout');
$router->get('/password/forgot', 'AuthController@forgotPasswordPage');
// Novas rotas para NFTs
$router->get('/nft', 'NFTController@index');        // Galeria
$router->get('/nfts', 'NFTController@index');       // Alternativa
$router->get('/galeria', 'NFTController@index');    // Alternativa em português


// Processar a requisição
$router->dispatch();