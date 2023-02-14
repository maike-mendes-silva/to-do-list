<?php
  class TarefaController extends Controller {
    public function listar() {
      $model = new Tarefa();
      $tarefas = $model->read();
      $dados = array();
      $dados['tarefas'] = $tarefas;
      $this->view("index", $dados);
    }

    public function novo() {
      $tarefa = array();
      $tarefa['id'] = 0;
      $tarefa['descricao'] = "";
      $tarefa['prazo'] = "";
      $dados = array();
      $dados['tarefa'] = $tarefa;
      $this->view("formularioJogador", $dados);
    }

    public function excluir($id) {
      $model = new Tarefa();
      $model->delete($id);
      $this->redirect("tarefa/listar");

    }

    public function salvar() {
      $tarefa = array();
      $tarefa['id'] = $_POST['id'];
      $tarefa['descricao'] = $_POST['descricao'];
      $tarefa['prazo'] = $_POST['prazo'];

      $model = new Tarefa();
      /* Se tiver a funcao update, não esquecer de fazer uma condição se o ID está setado ou não aqui */
      $model->create($tarefa);
      $this->redirect("tarefa/listar");
    }
  }
?>
