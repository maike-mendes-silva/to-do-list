<h1 class='titulo'>Criar Categoria</h1>

<h2 class='subtitulo'>
    Crie aqui as categorias para suas tarefas e traga uma melhora na sua organização!
</h2>

<form action="<?php echo APP.'categoria/salvar';?>" method="post">

    <div>
        <label for="descricao" class="form-label">
            Descrição
        </label>
        <input type='text' class='form-input' name='descricao' placeholder='Descrição da categoria' required>

        <button class='botao-nova-categoria'type="submit">Criar categoria</button>
    </div>

</form>