<?php
    class Usuario extends Model {
        protected $tabela="usuario";
        protected $ordem="id";

        public function getByNome ($nome){
            $sql = "SELECT * FROM $this->tabela WHERE nome = :nome";
            $sentenca = $this->conexao->prepare($sql);
            $sentenca->bindParam(":nome", $nome);
            $sentenca->execute();
            $dados = $sentenca->fetch();
            return $dados;
        }
    }
?>
