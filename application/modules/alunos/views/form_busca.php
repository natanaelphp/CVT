<div id="form-busca">
    <?php
        echo br();
        echo form_open('/alunos/buscar');

        echo form_label('Nome do aluno: ', 'busca');
        echo form_input('busca');
        echo nbs(4);
        echo form_submit('busca_aluno', 'Pesquisar');
        
        echo form_close();

    ?>
    
</div>