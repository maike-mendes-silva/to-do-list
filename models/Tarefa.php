<?php
    class Tarefa extends Model {
        protected $tabela="tarefa";
        protected $ordem="id";

        public function getByIdCategoria($id_categoria){
            $sql = "SELECT * FROM $this->tabela WHERE id_categoria = :id_categoria ORDER BY prazo";
            $sentenca = $this->conexao->prepare($sql);
            $sentenca->bindParam(":id_categoria", $id_categoria);
            $sentenca->execute();
            $dados = $sentenca->fetchAll();
            return $dados;
        }
    }
?>
