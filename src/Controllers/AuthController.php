<?php

class AuthController {

    public function index() {
       
        $title = 'Login | Shibu Marketplace';
        $view = 'auth/login'; 

        // 2. Chama o layout ESPECÍFICO para autenticação
        require_once ROOT_PATH . '/src/Views/layouts/auth_layout.php'; 
    }

    public function forgotPasswordPage() {

        $title = 'Recuperar Senha | Shibu Marketplace';
        $view = 'auth/forgot-password';

        require_once ROOT_PATH . '/src/Views/layouts/auth_layout.php';
    }
}