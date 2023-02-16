<h1 class='titulo'>Criar tarefa</h1>

<h2 class='subtitulo'>
    Crie aqui suas tarefas a fazer! Informe uma breve descricao e um prazo para realização. 
</h2>

<form action="<?php echo APP.'tarefa/salvar';?>" method="post">

    <div>
        <label for="descricao" class="form-label">
            Descrição
        </label>
        <input type='text' class='form-input' name='descricao' placeholder='Descrição da tarefa' required>

        <label for="prazo" class="form-label">
            Prazo
        </label>
        <input type="text" class="form-input" name="prazo" placeholder='Prazo de cumprimento (dd-mm-yyyy)' pattern='\d{1,2}\/\d{1,2}\/\d{4}' required>

        <button class='botao-nova-tarefa'type="submit">Criar tarefa</button>
    </div>

</form>