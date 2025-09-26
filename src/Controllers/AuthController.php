<?php
// app/controllers/AuthController.php

class AuthController {

    /**
     * Este método é chamado pela rota '/login'.
     * Sua única responsabilidade agora é carregar a view.
     */
    public function index() {
        // Apenas carrega o arquivo HTML da view.
        // src/Controllers/AuthController.php - LINHA 12

        require_once ROOT_PATH . '/src/Views/auth/login.php';
    }
}