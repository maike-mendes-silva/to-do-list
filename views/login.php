<h1 class='titulo'>Bem vindo ao To-do-list</h1>

<h2 class='subtitulo'>
    Para utilizar essa ferramenta, logue ou crie uma conta! 
</h2>

<?php
    $nome = "";
    if( isset($_COOKIE['erro'])){
        echo  $_COOKIE['erro'];
        if( isset($_COOKIE['nome'])){
            $nome = $_COOKIE['nome'];
        }
    } 
?>

<form action="<?php echo APP.'login/logar';?>" method="post">

    <div>
        <label for="nome" class="form-label">
            Nome
        </label>
        <input type='text' class='form-input' name='nome' placeholder='Digite o nome' required value=<?php echo $nome; ?>>

        <label for="senha" class="form-label">
            Senha
        </label>
        <input type="password" class="form-input" name="senha" placeholder='Digite a senha' required>

        <button class='botao-logar'type="submit">Logar</button>
    </div>

</form>