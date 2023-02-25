<?php
    class UsuarioController extends Controller{
        public function novo (){
            $usuario = array ();
            $usuario['id'] = 0;
            $usuario['nome'] = "";
            $usuario['senha'] = "";
            $dados = array();
            $dados['usuario'] = $usuario;
            $this->view('formularioUsuario', $dados);
        }

        public function salvar(){
            $usuario = array();
            $usuario['id'] = $_POST['id'];
            $usuario['nome'] = $_POST['nome'];
            $usuario['senha'] = md5($_POST['senha']);
            $model = new Usuario(); 
            $model->create($usuario);
            $this->redirect('login/login');
        }
    }
?>