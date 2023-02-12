<?php

    class IndexController extends Controller {
        public function index() {
            $dados = array();
            $this->view("index", $dados);
        }
    }

?>
