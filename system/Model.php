<?php
    abstract class Model {
        protected $conexao;
        protected $tabela="";
        protected $query="";
        protected $ordem="id";
        // construtor
        public function __construct() {
            try {
                $opcoes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
                $this->conexao = new PDO('pgsql:host=localhost; dbname=to-do-list', "postgres", "admin", $opcoes);
            } catch (PDOException $e) {
                $this->conexao = null;
            }
        }

        public function create($dados) {
            if (isset($dados['id'])) {
                unset($dados['id']);
            }
            $chaves = array_keys($dados);
            $campos = implode(", ", $chaves);
            $valores = ":".implode(", :", $chaves);
            $sql = "INSERT INTO $this->tabela ($campos) VALUES($valores)";
            $sentenca = $this->conexao->prepare($sql);
            foreach ($chaves as $chave) {
                $sentenca->bindParam(":$chave", $dados[$chave]);
            }
            $sentenca->execute();

            return $this->conexao->lastInsertId();
        }

        public function read() {
            if ($this->query == "") {
                $this->query = "SELECT * FROM $this->tabela ORDER BY $this->ordem ";
            }
            $sentenca = $this->conexao->query($this->query);
            $sentenca->setFetchMode(PDO::FETCH_ASSOC);
            $consulta = $sentenca->fetchAll();
            return $consulta;
        }

        public function delete($id) {
            $sql = "DELETE FROM $this->tabela WHERE id = :id";
            $sentenca = $this->conexao->prepare($sql);
            $sentenca->bindParam(":id", $id);
            $sentenca->execute();
        }

    }
?>
