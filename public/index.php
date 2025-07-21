<?php
require_once '../vendor/autoload.php';

// Carregar variáveis de ambiente
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

// Iniciar sessão
session_start();

// Importar classes principais
use App\Core\Router;

// Criar roteador
$router = new Router();

// Definir rotas
$router->get('/', 'HomeController@index');
$router->get('/login', 'AuthController@showLogin');
$router->post('/login', 'AuthController@login');
$router->get('/register', 'AuthController@showRegister');
$router->post('/register', 'AuthController@register');

// Rotas protegidas
$router->middleware('auth')->get('/profile', 'UserController@profile');
$router->middleware('auth')->get('/nft/create', 'NFTController@create');

// Rotas admin
$router->middleware(['auth', 'admin'])->get('/admin', 'DashboardController@index');

// Executar rota
$router->dispatch();
?>