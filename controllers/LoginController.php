<?php
    class LoginController extends Controller{
        
        public function login() {
            $dados = array();
            if( !isset($_COOKIE['erro'])) {
                setcookie('nome');
            }
            $this->view("login", $dados);
        }

        public function logar() {
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];
            $model = new Usuario();
            $usuario = $model->getByNome($nome);
            if ($usuario == null) {
                setcookie("erro", "Usuário não encontrado, tente novamente!");
                setcookie('nome', $nome);
                $this->redirect('login/login');
            } else{
                if(md5($senha) != $usuario['senha']){
                    setcookie('erro', 'Senha incorreta, tente novamente!');
                    setcookie('nome', $nome);
                    $this->redirect('login/login');
                } else {
                    setcookie('conectado', "");
                    if(!isset($_SESSION)) {
                        session_start();
                    }
                    $_SESSION['id_usuario'] = $usuario['id'];
                    $_SESSION['nome'] = $usuario['nome'];
                    setcookie("erro", "");
                    $this->redirect("tarefa/listar/{$usuario['id']}");
                }
            }
        }

        public function logout() {
            if(!isset($_SESSION)){
                session_start();
            }
            session_destroy();
            $this->redirect('login/login');
        }
    }
?>