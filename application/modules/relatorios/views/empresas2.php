<style>
a img {
    float: right;
    padding: 4px;
}
table td, table th{
    text-align: center;
}
</style>

<article>
<center>
    
    <?php echo heading('Relatório de empresas',2); ?>
    
    <?php echo br(); ?>    
    
    <table cellpadding='5'>
        <th> </th>
        <th>Empresa</th>
        <th>Empregado ou Dependente</th>
        <th>Total de alunos cadastrados</th>
        <?php
            $i = 0;
            foreach ($empresas as $empresa):
                 $i++;
                echo "<tr>";
                    echo "<td>".$i."</td>";
                    echo "<td width='300'>";
                        echo $empresa->empresa.br();
                    echo "</td>";
                    echo "<td width='200'>";
                        echo $empresa->E_D;
                    echo "</td>";
                    echo "<td width='200'>";
                        echo $empresa->total;
                    echo "</td>";
                echo "</tr>";
            endforeach;
        
        ?>
    
    </table>
    <?php echo br(2); ?>
    Este relatório mostra a quantidade de alunos cadastrados por empresa<br />
    agrupados pela relação de Empregados e Dependentes.
<?php echo br(2); ?>

