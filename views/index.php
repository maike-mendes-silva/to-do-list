
<h1 class='titulo'>Lista de Tarefas</h1>

<h2 class='subtitulo'>
    Diga adeus a desorganização! Crie aqui suas tarefas e de um check conforme for cumprindo as.
</h2>

<button class='butao nova-tarefa' type='button' onclick="window.location.href = '<?php echo APP.'tarefa/novo';?>'">
    Nova Tarefa
</button>
<div class='container-tarefas'>
<?php
    $chaves = array_keys($tarefas);
    print_r($tarefas);
    $cont = 0;
    foreach($tarefas as $tarefa){
        echo "AAAAAAAAAAAAAA";
        print_r($tarefa);
        if ($tarefa == false){
            $cont++;
            continue;
        }else{
            $chave = $chaves[$cont];
            $caminho = APP;
            $data = implode('/', array_reverse(explode('-', $tarefa['prazo'])));
            echo "
                <div class='container-categoria'>
                    <div class='categoria-nome'>
                        $chave 
                    </div>
                    <hr>
                </div>
                <div class='tarefa'>
                    <div>
                        <p class='nome-tarefa'>{$tarefa['descricao']}</p>
                        <p class='prazo-tarefa'>$data</p>
                    </div>
                    <a class='butao deletar-tarefa' type='button' href='$caminho/tarefa/excluir/{$tarefa['id']}'>
                        <p class='check-icon'>✓</p>
                    </a>
                </div>
            ";
            $cont++;
        }
    }
?>
</div>