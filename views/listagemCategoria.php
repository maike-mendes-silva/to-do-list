<h1 class='titulo'>Lista de Categorias</h1>

<h2 class='subtitulo'>
    Crie, edite ou adicione categorias nessa página!
</h2>

<button class='butao nova-categoria' type='button' onclick="window.location.href = '<?php echo APP.'categoria/novo';?>'">
    Nova Categoria
</button>

<div class='container-categorias'>
    <div class='categoria'>
        <p class='nome-categoria'>Escola</p>
        <div class='container-buttons'>
            <a class='butao editar-categoria' type='button' href='$caminho/categoria/editar/{$categoria['id']}'>
                <p class='buton-icon'>*</p>
            </a>
            <a class='butao deletar-categoria' type='button' href='$caminho/categoria/excluir/{$categoria['id']}'>
                <p class='buton-icon'>X</p>
            </a>
        </div>
    </div>
</div>

