<h1 class='titulo'>Criar Categoria</h1>

<h2 class='subtitulo'>
    Crie aqui as categorias para suas tarefas e traga uma melhora na sua organização!
</h2>

<form <?php echo "action = '$caminho/categoria/salvar/{$usuarioLogado['id']}'"?> method="post">

    <div>
        <input type="hidden" name="id" value='<?php echo "{$categoria['id']}"; ?>'>
        <input type="hidden" name="id_usuario" value='<?php echo "{$usuarioLogado['id']}"; ?>'>
        <label for="descricao" class="form-label">
            Descrição
        </label>
        <input type='text' class='form-input' name='descricao' value='<?php echo "{$categoria['descricao']}"; ?>' placeholder='Descrição da categoria' required>

        <button class='botao-nova-categoria'type="submit">Criar categoria</button>
    </div>

</form>