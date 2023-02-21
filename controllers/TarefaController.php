<?php
    class TarefaController extends Controller {
        public function listar() {
            $modelTarefa = new Tarefa();
            $modelCategoria = new Categoria();
            $categorias = $modelCategoria->read();

            foreach($categorias as $categoria){
                $valor = $modelTarefa->getByIdCategoria($categoria['id']);
                if(!empty($valor)){
                    $tarefas[$categoria['descricao']] = $valor;
                }
            }

            $dados = array();
            $dados['tarefasCategorizadas'] = $tarefas;
            $this->view("index", $dados);
            }

        public function novo() {
            $tarefa = array();
            $tarefa['descricao'] = "";
            $tarefa['prazo'] = "";
            $model = new Categoria();
            $categorias = $model->read();

            $dados = array();
            $dados['tarefa'] = $tarefa;
            $dados['categorias'] = $categorias;
            $this->view("formularioTarefa", $dados);
        }

        public function excluir($id) {
            $model = new Tarefa();
            $model->delete($id);
            $this->redirect("tarefa/listar");
        }

        public function salvar() {
            $tarefa = array();
            $tarefa['descricao'] = $_POST['descricao'];
            $tarefa['prazo'] = $_POST['prazo'];
            $tarefa['id_categoria'] = $_POST['id_categoria'];
            $model = new Tarefa();
            /* Se tiver a funcao update, não esquecer de fazer uma condição se o ID está setado ou não aqui */
            $model->create($tarefa);
            $this->redirect("tarefa/listar");
        }
    }
?>
