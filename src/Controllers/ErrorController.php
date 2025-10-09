<?php

require_once ROOT_PATH . '/src/Core/Controller.php';

class ErrorController extends Controller 
{
    public function notFound()
    {
        // Define o cabeçalho HTTP para 404
        http_response_code(404);

        // Renderiza a view de erro
        // Este método 'view()' agora existe na classe pai 'Controller'
        $this->view('errors/404');
    }
}