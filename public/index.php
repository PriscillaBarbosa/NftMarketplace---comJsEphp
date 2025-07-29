<?php
// index.php - Ponto de entrada da aplicação
session_start();

// Configurações
error_reporting(E_ALL);
init_set('display_errors', 1);

//Constantes
define('ROOT_PATH', dirname(__FILE__));
define('BASE_URL', 'http://localhost:8080');
define('VIEWS_PATH', ROOT_PATH . '/views');

//Autoloader ou includes básicos
require_once 'config/database.php';
require_once 'config/config.php';

// Sistema de roteamento
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Sanitizar entrada
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';