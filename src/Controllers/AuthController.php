<?php

class AuthController extends Controller {

    public function index() {
        // 1. Definimos os dados que a view vai precisar (como o título)
        $data = [
            'title' => 'Login | Shibu Marketplace'
        ];

        // 2. Trocamos o layout padrão ('app') pelo de autenticação
        //    (O nome do arquivo sem a extensão .php)
        $this->layout = 'auth_layout'; 

        // 3. Chamamos o método view(), passando o nome da view e os dados
        $this->view('auth/login', $data);
    }

    public function forgotPasswordPage() {
        // Mesma lógica para a outra página
        $data = [
            'title' => 'Recuperar Senha | Shibu Marketplace'
        ];
        
        $this->layout = 'auth_layout';
        
        $this->view('auth/forgot-password', $data);
    }
}