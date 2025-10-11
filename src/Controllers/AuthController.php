<?php

class AuthController extends Controller {

    public function index() {
        
        $data = [
            'title' => 'Login | Shibu Marketplace'
        ];

        $this->layout = 'auth_layout'; 

        $this->view('auth/login', $data);
    }

    public function forgotPasswordPage() {
        $data = [
            'title' => 'Recuperar Senha | Shibu Marketplace'
        ];
        
        $this->layout = 'auth_layout';
        
        $this->view('auth/forgot-password', $data);
    }
}