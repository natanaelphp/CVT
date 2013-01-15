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
    
    <?php echo br(2); ?>
    <?php
    $grafico = "";
    foreach ($empresas as $empresa):        
        $grafico .= "['".$empresa->empresa."', ".$empresa->total."],";
    endforeach;
    
    ?>
    
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Empresa', 'Alunos'],
          <?php echo $grafico; ?>
        ]);

        var options = {
          title: 'Quantidade de alunos por empresa'
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  
    <div id="chart_div" style="width: 850px; height: 400px;"></div>
    
     <?php echo br(4); ?>
    Este relatório mostra a quantidade de alunos cadastrados por empresa.
    
    <?php echo br(2); ?>
    <table cellpadding='5'>
        <th> </th>
        <th>Empresa</th>
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
                    echo "<td width='300'>";
                        echo $empresa->total;
                    echo "</td>";
                echo "</tr>";
            endforeach;
        
        ?>
    
    </table>
<?php echo br(2); ?>

