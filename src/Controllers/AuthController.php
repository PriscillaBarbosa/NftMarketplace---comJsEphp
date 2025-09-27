<?php

class AuthController {

    public function index() {
       
        $title = 'Login | NFT Marketplace';
        $view = 'auth/login'; 

        // 2. Chama o layout ESPECÍFICO para autenticação
        require_once ROOT_PATH . '/src/Views/layouts/auth_layout.php'; // <--- MUDANÇA AQUI!
    }
}