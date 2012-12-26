<style>
a img {
    float: right;
    padding: 4px;
}

</style>

<article>
<center>
    
    <?php echo heading('Relatório de alunos',2); ?>
    
    <a href='<?php echo base_url();?>relatorios/pdfAlunos' target='_blank'>
        <?php echo img('asset/img/relatorios/printer.png'); ?>
    </a>

    
    <?php echo br(3); ?>
    
    <table cellpadding='5' id='al'>
    <?php
        $i = 0;
        
        echo "Total de alunos: ".count($alunos);
        echo nbs(60);
        echo escreve_data().br(2);
        
        foreach ($alunos as $aluno):
            $i++;
            echo "<tr>";
                echo "<td width='600'>";
                echo $i." - ".$aluno->nome.br();
                echo "</td>";
            echo "</tr>";
        endforeach;
        
        
    ?>
    </table>
<?php echo br(2); ?>

