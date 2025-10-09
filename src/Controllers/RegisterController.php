<?php
//Inclui a classe de validação
require_once '../src/Utils/CpfValidator.php';

class RegisterController extends Controller
{
    /**
     * Exibe o formulário de registro
     */

    public function index()
    {
        $data = [
            'title' => 'NFT Marketplace - Cadastro',
            'page_title' => 'Criar Nova Conta',
            'errors' => [], //Para mostrar erros se houver
            'old_data' => [], //Para manter dados preenchidos
        ];

        //$this->render('register/index', $data);
        $this->view('register/index', $data); 
    }

    /**
     * Processa o formulário
     */

    public function store()
    {
        //Só aceita POST
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /register');
            exit;
        }

        echo "DEBUG: Dados recebidos:<br>";
        echo "<pre>" . print_r($_POST, true) . "</pre>";

        //Validar dados
        $validator = $this->validarDados($_POST);

        if (!$validator['valido']) {
            echo "Erros encontrados:<br>";
            foreach ($validator['erros'] as $erro) {
                echo "_ " . $erro . "<br>";
            }

            //mostrar o formulário novamente com os erros
            $data = [
                'title' => 'NFT Marketplace - Cadastro',
                'page_title' => 'Criar Nova Conta',
                'errors' => $validator['erros'],
                'old_data' => $_POST
            ];

            $this->render('register/index', $data);
            return;
        }

        echo "Todos os dados estão válidos!<br>";
        echo "Aqui salvaria no banco de dados<br>";
    
        // TODO: Salvar no banco de dados
        // $this->salvarUsuario($_POST);
        
        // Por enquanto, só mostrar sucesso
        echo "🎉 Cadastro realizado com sucesso!";
    }

    /**
     * Valida todos os dados do formulário
     */

    private function validarDados($dados) 
    {
        $erros = [];

        //Validar nome
        if (empty($dados['name'])) {
            $erros[] = 'Nome é obrigatório';
        } elseif (strlen(trim($dados['name'])) < 2) {
            $erros[] = 'Nome deve ter pelo menos 2 caracteres';
        } elseif (!preg_match('/^[a-zA-ZÀ-ÿ\s]+$/', $dados['name'])) {
            $erros[] = 'Nome deve conter apenas letras';
        }

        //Validar email
        if (empty($dados['email'])) {
            $erros[] = 'Email é obrigatório';
        } elseif (!filter_var($dados['email'],FILTER_VALIDATE_EMAIL)) {
            $erros[] = 'Email inválido';
        }

        //Validar CPF usando a classe criada
        if (empty($dados['cpf'])) {
            $erros[] = 'CPF é obrigatório';
        } elseif (!CpfValidator::validar($dados['cpf'])) {
            $erros[] = 'CPF inválido';
        }

        //Validar senha
        if (empty($dados['password'])) {
            $erros[] = 'Senha é obrigatória';
        } elseif (strlen($dados['password']) < 6) {
            $error[] = 'Senha deve ter no mínimo 6 caracteres';
        }

        //Confirmar senha
        if (empty($dados['password_confirm'])) {
            $erros[] = 'Confirmação de senha é obrigatória';
        } elseif ($dados['password'] !== $dados['password_confirm']) {
            $erros[] = 'Senhas não coincidem';
        }

        return [
            'valido' => empty($erros),
            'erros' => $erros
        ];
    }

    /**
     * Renderiza uma view (mesmo método do HomeController) por que? 
     */
    private function render($view, $data = []) 
    {
        extract($data);
        $view = $view;
        
        $layoutPath = "../src/Views/layouts/app.php";
        
        if (file_exists($layoutPath)) {
            include $layoutPath;
        } else {
            echo "Layout não encontrado: {$layoutPath}";
        }
    }
}