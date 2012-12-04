<style>
    table th, table td{
        text-align: center;
    }
    table td:hover{
        background-color: #f2f2f2;
    }
</style>

<table  cellpadding='8' >
    <tr>
        <th width="110">Segunda-feira</th>
        <th width="110">Terça-feira</th>
        <th width="110">Quarta-feira</th>
        <th width="110">Quinta-feira</th>
        <th width="110">Sexta-feira</th>
        <th width="110">Sábado</th>
    </tr>
<?php
    $dias_semana = array(
        'segunda',
        'terça',
        'quarta',
        'quinta',
        'sexta',
        'sábado'
    );
    
    for ($i=0; $i<$max; $i++ ):
        echo "<tr>";
           
            foreach ($dias_semana as $dia):
                if (isset($horarios[$dia][$i]->hora)){
                    echo "<td>";
                        $texto = "<div id='cell'>".$horarios[$dia][$i]->hora."</div>";
                        echo anchor('frequencia/horario/'.$horarios[$dia][$i]->ID_horarios, $texto);
                    echo "</td>";
                }
                else
                    echo "<td></td>";                
            endforeach;
            
        echo "</tr>";
    endfor;
   
?>
</table>