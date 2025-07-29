?php
// ================================
// ARQUIVO: public/index.php
// ================================
<?php
require_once '../src/Core/Router.php';
require_once '../src/Core/Database.php';
require_once '../src/Controllers/HomeController.php';

// Inicializar o roteador
$router = new Router();

// Definir rotas
$router->get('/', 'HomeController@index');
$router->get('/home', 'HomeController@index');

// Processar a requisição
$router->dispatch();