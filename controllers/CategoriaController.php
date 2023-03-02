<?php
    class CategoriaController extends Controller {
        public function listar($id_usuario) {
            $model = new Categoria();
            $categorias = $model->getByIdUsuario($id_usuario);
            $dados = array();
            $dados['categorias'] = $categorias;
            $this->view("listagemCategoria", $dados);
            }

        public function novo() {
            $categoria = array();
            $categoria['id'] = 0;
            $categoria['descricao'] = "";
            $categoria['id_usuario'] = "";
            $dados = array();
            $dados['categoria'] = $categoria;
            $this->view("formularioCategoria", $dados);
        }

        public function editar($id) {
            $model = new Categoria();
            $categoria = $model->getById($id);
            $dados = array();
            $dados['categoria'] = $categoria;
            $this->view("formularioCategoria", $dados);
        }

        public function excluir($id, $id_usuario) {
            $model = new Categoria();
            $model->delete($id);
            $this->redirect("categoria/listar/$id_usuario");
        }

        public function salvar($id_usuario) {
            $categoria = array();
            $categoria['id'] = $_POST['id'];
            $categoria['descricao'] = $_POST['descricao'];
            $categoria['id_usuario'] = $_POST['id_usuario'];
            $model = new Categoria();
            if ($categoria['id']==0) {
                $model->create($categoria);
              } else {
                $model->update($categoria);
              }
            $this->redirect("categoria/listar/$id_usuario");
        }
    }
?>
