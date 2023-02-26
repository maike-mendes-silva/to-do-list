<?php
    class Categoria extends Model {
        protected $tabela="categoria";
        protected $ordem="id";

        public function getByIdUsuario($id_usuario){
            $sql = "SELECT * FROM $this->tabela WHERE id_usuario = :id_usuario";
            $sentenca = $this->conexao->prepare($sql);
            $sentenca->bindParam(":id_usuario", $id_usuario);
            $sentenca->execute();
            $dados = $sentenca->fetchAll();
            return $dados;
        }
    }
?>
