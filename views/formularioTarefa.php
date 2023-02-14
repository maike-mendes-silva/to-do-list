<h1 class='titulo'>Criar tarefa</h1>

<h2 class='subtitulo'>
    Crie aqui suas tarefas a fazer! Informe uma breve descricao e um prazo para realização. 
</h2>

<form action="<?php echo APP.'tarefa/salvar';?>" method="post">

    <div>
        <label for="id" class="form-label">
            ID
        </label>
        <input readonly type="text" class="form-input" name="id" value="<?php echo "{$tarefa['id']}"; ?>">
        
        <label for="descricao" class="form-label">
            Descrição
        </label>
        <input readonly type="text" class="form-input" name="descricao" value="<?php echo "{$tarefa['descricao']}"; ?>">

        <label for="prazo" class="form-label">
            Prazo
        </label>
        <input type="date" class="form-input" name="descricao" value="<?php echo "{$tarefa['prazo']}"; ?>">
    </div>

</form>