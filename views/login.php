<h1 class='titulo'>Bem vindo ao To-do-list</h1>

<h2 class='subtitulo'>
    Para utilizar essa ferramenta, logue ou crie uma conta! 
</h2>

<?php
    if(isset($_SESSION)){
        session_destroy();
    }
    $nome = "";
    if( isset($_COOKIE['erro'])){
        if( isset($_COOKIE['nome'])){
            $nome = $_COOKIE['nome'];
        }
    } 
?>

<button class='butao novo' type='button' onclick="window.location.href = '<?php echo APP.'usuario/novo';?>'">
    Cadastrar-me
</button>

<form action="<?php echo APP.'login/logar';?>" method="post">

    <div>
        <label for="nome" class="form-label">
            Nome
        </label>
        <input type='text' class='form-input' name='nome' placeholder='Digite o nome' <?php echo "value = '$nome'"?> required>

        <label for="senha" class="form-label">
            Senha
        </label>
        <input type="password" class="form-input" name="senha" placeholder='Digite a senha' required>

        <div class='formulario-bottom'>
            <button class='botao-logar'type="submit">Logar</button>
            <?php
                if(isset($_COOKIE['erro'])){
                    echo "<p class='msg-erro'>{$_COOKIE['erro']}</p>";
                }
            ?>
        </div>
    </div>

</form>