
<h1 class='titulo'>Lista de Tarefas</h1>

<h2 class='subtitulo'>
    Diga adeus a desorganização! Crie aqui suas tarefas e de um check conforme for cumprindo as.
</h2>

<button class='butao nova-tarefa' type='button' onclick="window.location.href = '<?php echo APP.'tarefa/novo';?>'">
    Nova Tarefa
</button>

<div class='container-tarefas'>
    <div class='tarefa'>
        <div>
            <p class='nome-tarefa'>Lavar a louça</p>
            <p class='prazo-tarefa'>#15-02-2023</p>
        </div>
        <button class='butao deletar-tarefa' type='button' onclick="window.location.href = '<?php echo APP.'tarefa/deletar'?>'">
            <p class='check-icon'>✓</p>
        </button>
    </div>
</div>