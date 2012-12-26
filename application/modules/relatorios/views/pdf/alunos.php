<center>
    <?php echo heading('Relatório de alunos',2); ?>
    <?php echo br(); ?>
    
    <table cellpadding=''>
    <?php
        $i = 0;
        echo "Total de alunos: ".count($alunos);
        echo nbs(70);
        echo escreve_data();
        echo "<hr>".br();
        foreach ($alunos as $aluno):
            $i++;
            echo "<tr>";
                echo "<td>";
                echo $i." - ".$aluno->nome.br();
                echo "</td>";
            echo "</tr>";
        endforeach;
        
        
    ?>
    </table>
<?php echo br(2); ?>

