<?php
    class TarefaController extends Controller {
        public function listar($id_usuario) {
            $modelTarefa = new Tarefa();
            $modelCategoria = new Categoria();
            $categorias = $modelCategoria->getByIdUsuario($id_usuario);

            foreach($categorias as $categoria){
                $valor = $modelTarefa->getByIdCategoria($categoria['id']);
                if(!empty($valor)){
                    $tarefas[$categoria['descricao']] = $valor;
                }
            }

            $dados = array();
            if(isset($tarefas)){
                $dados['tarefasCategorizadas'] = $tarefas;
            } else{
                $dados['tarefasCategorizadas'] = "";
            }
            $this->view("index", $dados);
            }

        public function novo($id_usuario) {
            $tarefa = array();
            $tarefa['descricao'] = "";
            $tarefa['prazo'] = "";
            $model = new Categoria();
            $categorias = $model->getByIdUsuario($id_usuario);

            $dados = array();
            $dados['tarefa'] = $tarefa;
            $dados['categorias'] = $categorias;
            $this->view("formularioTarefa", $dados);
        }

        public function excluir($id, $id_usuario) {
            $model = new Tarefa();
            $model->delete($id);
            $this->redirect("tarefa/listar/$id_usuario");
        }

        public function salvar($id_usuario) {
            $tarefa = array();
            $tarefa['descricao'] = $_POST['descricao'];
            $tarefa['prazo'] = $_POST['prazo'];
            $tarefa['id_categoria'] = $_POST['id_categoria'];
            $model = new Tarefa();
            /* Se tiver a funcao update, não esquecer de fazer uma condição se o ID está setado ou não aqui */
            $model->create($tarefa);
            $this->redirect("tarefa/listar/$id_usuario");
        }
    }
?>
