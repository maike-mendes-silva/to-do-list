<h1 class='titulo'>Cadastro de Usuário</h1>

<h2 class='subtitulo'>
    Preencha os campos e crie seu usuário!
</h2>

<form action="<?php echo APP.'usuario/salvar';?>" method="post">

    <div>
        <input type="hidden" name="id" value='<?php echo "{$usuario['id']}"; ?>'>
        <label for="nome" class="form-label">
            Nome
        </label>
        <input type='text' class='form-input' name='nome' placeholder='Digite seu nome' required>

        <label for="senha" class="form-label">
            Senha
        </label>
        <input type='password' class='form-input' name='senha' placeholder="Digite sua senha" required>

        <button class='botao-novo-usuario'type="submit">Cadastrar Usuário</button>
    </div>

</form>