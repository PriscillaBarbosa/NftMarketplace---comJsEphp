<?php
// src/Core/Controller.php

abstract class Controller 
{
    // Podemos definir o layout padrão para todos os controllers
    public string $layout = 'app'; // O nome do arquivo em /src/Views/layouts/

    public function view($view, $data = [])
    {
        // 1. Encontra o caminho para a view específica (ex: home/index.php)
        $viewPath = $this->findViewPath($view);

        if ($viewPath) {
            // 2. Extrai os dados para serem usados na view
            extract($data);

            // 3. Inicia o buffer: tudo que seria impresso (echo) a partir de agora
            // é guardado em uma memória interna, em vez de ir para o navegador.
            ob_start();

            // 4. Carrega a view específica. O HTML dela vai para o buffer.
            require_once $viewPath;

            // 5. Limpa o buffer e pega todo o conteúdo guardado para uma variável.
            $content = ob_get_clean();

            // 6. Carrega o layout principal, que agora tem acesso à variável $content.
            require_once ROOT_PATH . "/src/Views/layouts/{$this->layout}.php";

        } else {
            echo "Erro: Visualização não encontrada: {$view}";
        }
    }

    // Função auxiliar para encontrar o caminho da view (lógica da resposta anterior)
    private function findViewPath($view)
    {
        $path1 = ROOT_PATH . "/src/Views/{$view}.php";
        $path2 = ROOT_PATH . "/src/Views/{$view}/index.php";

        if (file_exists($path1)) {
            return $path1;
        } elseif (file_exists($path2)) {
            return $path2;
        }
        return null;
    }
}