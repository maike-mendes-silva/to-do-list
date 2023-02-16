
<h1 class='titulo'>Lista de Tarefas</h1>

<h2 class='subtitulo'>
    Diga adeus a desorganização! Crie aqui suas tarefas e de um check conforme for cumprindo as.
</h2>

<button class='butao nova-tarefa' type='button' onclick="window.location.href = '<?php echo APP.'tarefa/novo';?>'">
    Nova Tarefa
</button>

<?php
    foreach($tarefas as $tarefa){
        $caminho = APP;
        $data = implode('/', array_reverse(explode('-', $tarefa['prazo'])));
        echo "
            <div class='container-tarefas'>
                <div class='tarefa'>
                    <div>
                        <p class='nome-tarefa'>{$tarefa['descricao']}</p>
                        <p class='prazo-tarefa'>#$data</p>
                    </div>
                    <a class='butao deletar-tarefa' type='button' href='$caminho/tarefa/excluir/{$tarefa['id']}'>
                        <p class='check-icon'>✓</p>
                    </a>
                </div>
            </div>
        ";
    }
?>
