<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if(isset($_SESSION['id_usuario'])){
        $id_usuario = $_SESSION['id_usuario'];
        $model = new Usuario();
        $usuarioLogado = $model->getById($id_usuario);
    } else {
        if($arquivo != "views/login.php") {
            header("location: ".APP."login/login");
            exit(0);
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do-list</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo APP . "styles/reset.css"; ?>">
    <link rel="stylesheet" href="<?php echo APP . "styles/template.css"; ?>">

    <!--Pegando o nome do arquivo para poder relacionar seu respectivo css-->
    <?php
    $nomeArquivo = explode('/', $arquivo);
    $nomeArquivo = explode('.', $nomeArquivo[1]);
    ?>
    <link rel="stylesheet" href="<?php echo APP . "styles/$nomeArquivo[0].css"; ?>">
</head>

<body>

    <div class="container">

        <?php
            if(isset($usuarioLogado)){
                $caminho = APP;
                echo "
                    <div class='container-login'>
                        <p class='nome-usuario'>Usuário: @{$usuarioLogado['nome']}</p>
                        <button class='sair' type='button' onclick='window.location.href = $caminho.'login/logout''>
                            Sair
                        </button>
                    </div>
                ";
            }
        ?>
        <?php
        require_once $arquivo;
        ?>
    </div>
</body>

</html>