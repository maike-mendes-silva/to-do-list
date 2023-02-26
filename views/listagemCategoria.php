<h1 class='titulo'>Lista de Categorias</h1>

<h2 class='subtitulo'>
    Crie, edite ou exclua categorias nessa página!
</h2>

<div class='container-botoes'>
    <button class='butao novo' type='button' onclick="window.location.href = '<?php echo APP.'categoria/novo';?>'">
        Nova Categoria
    </button>

    <button class='butao novo' type='button' onclick="window.location.href = '<?php echo APP.'tarefa/listar';?>'">
        Menu Tarefas
    </button>
</div>

<div class='container-categorias'>
    <?php
        foreach($categorias as $categoria){
            $caminho = APP;
            echo "
                <div class='categoria'>
                    <p class='nome-categoria'>{$categoria['descricao']}</p>
                    <div class='container-buttons'>
                        <a class='butao editar-categoria' type='button' href='$caminho/categoria/editar/{$categoria['id']}'>
                            <p class='buton-icon'>*</p>
                        </a>
                        <a class='butao deletar-categoria' type='button' href='$caminho/categoria/excluir/{$categoria['id']}'>
                            <p class='buton-icon'>X</p>
                        </a>
                    </div>
                </div>
            ";
        }
    ?>
</div>

