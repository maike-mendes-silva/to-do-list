
<h1 class='titulo'>Lista de Tarefas</h1>

<h2 class='subtitulo'>
    Diga adeus a desorganização! Crie aqui suas tarefas e de um check conforme for cumprindo as.
</h2>

<div class='container-botoes'>
    <a class='butao novo' type='button' <?php echo "href = '$caminho/tarefa/novo/{$usuarioLogado['id']}'"?>>
        Nova Tarefa
    </a>

    <a class='butao novo' type='button' <?php echo "href = '$caminho/categoria/listar/{$usuarioLogado['id']}'"?>>
        Menu Categoria
    </a>
</div>

<div class='container-tarefas'>
<?php
    if($tarefasCategorizadas != ""){
        $chaves = array_keys($tarefasCategorizadas);
        $cont = 0;
        foreach($tarefasCategorizadas as $tarefas){
            $chave = $chaves[$cont];
            echo "
                <div class='container-categoria'>
                    <div class='categoria-nome'>
                        $chave 
                    </div>
                    <hr>
                </div>
            ";
            foreach($tarefas as $tarefa){
                if ($tarefa == false){
                    $cont++;
                    continue;
                }else{
                    $caminho = APP;
                    $data = implode('/', array_reverse(explode('-', $tarefa['prazo'])));
                    echo "
                        <div class='tarefa'>
                            <div>
                                <p class='nome-tarefa'>{$tarefa['descricao']}</p>
                                <p class='prazo-tarefa'>$data</p>
                            </div>
                            <a class='butao deletar-tarefa' type='button' href='$caminho/tarefa/excluir/{$tarefa['id']}/{$usuarioLogado['id']}'>
                                <p class='check-icon'>✓</p>
                            </a>
                        </div>
                    ";
                }   
            }
            $cont++;
        }
    } else{
        echo "<p>Nenhuma tarefa cadastrada</p>";
    }
?>
</div>