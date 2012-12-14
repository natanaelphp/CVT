<style>
    table th, table td{
        text-align: center;
    }
    table td:hover{
        background-color: #f2f2f2;
    }
</style>

<?php if ($msg): ?>
    <div class="ui-state-highlight ui-corner-all" style='padding:10px;font-size:78%;width:740px;' >
        <?php echo $msg; ?>
    </div>
    <?php echo br(); ?>
<?php endif; ?>



<?php if ($max > 0) {?>

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
<?php
} // fecha o: if ($max > 0)
else { ?>
    <br /><br />
    <table cellpadding='8'>
        <tr>
            <td width="600">
                <br />Quadro de freqüência não está disponível, pois não há nenhum horário cadastrado.
                <br /><br />
            </td>
        </tr>
    </table>
    
<?php } ?>