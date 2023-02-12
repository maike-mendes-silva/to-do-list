<?php
    abstract class Controller {
        public function view($visao, $dados) {
            // extrai as variaveis dentro do array $dados
            extract($dados);
            $arquivo = "views/$visao.php";
            require_once "views/template.php";
        }

        public function redirect($visao) {
            header('location: '.APP.$visao);
        }
    }
?>
