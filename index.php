<?php
    // cria a constante APP
    define("APP", "http://localhost/to-do-list/");

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once "autoload.php";

    if (!isset($_GET['url'])) {
        $url = "login/login";
    } else {
        $url = $_GET['url'];
    }
    $separador = explode('/', $url);

    // controlador contém a String com o nome do controlador a ser acionado
    $controlador = ucfirst($separador[0]).'Controller';
    $acao = $separador[1];

    // controller é o objeto controlador que foi acionado
    $controller = new $controlador();
    if (isset($separador[2])) {
        $controller->$acao($separador[2]);
    } else {
        $controller->$acao();
    }
?>
