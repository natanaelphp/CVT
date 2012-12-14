<h2>Controle de Frequência</h2>

<p align="right"><?php echo escreve_data(); ?></p>

<?php
if ($alunos){ ?>
    
    <? echo form_open('frequencia/processaFaltas'); ?>
    Marque os alunos faltosos.
    <?php echo br(2);?>
    <table  cellpadding='5' >

        <?php
            foreach ($alunos as $aluno):

                echo "<tr>";
                echo "<td width='400'>".$aluno->nome."</td>";
                echo "<td>";
                echo form_checkbox('aluno'.$aluno->ID_ALUNO, $aluno->ID_ALUNO);
                echo "</td>";
                echo "</tr>";
            endforeach;
        ?>
    </table>        
    <?php    
    echo br(); 
    echo form_hidden('horario', $horario);
    echo form_submit('', 'Processar faltas');
    
    echo form_close();
}
else {
    echo br(4)."Nenhum aluno cadastrado neste horário";
}
?>

