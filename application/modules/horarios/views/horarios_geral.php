<div style='width: 700px; display: table;'>
    <?php  echo heading('Horários',2); ?>
    <a href="<?php echo base_url('horarios/novo/'); ?>" style="float:left;">
        <?php echo img(array('src'=>'asset/img/add.png','align'=>'center')); ?>
        Novo horário
    </a>

    <?php 
    echo br(2);
    echo "<table cellpadding='5' >"; 
        if ($horarios){
            foreach ($horarios as $horario) {
                echo "<tr>";
                    echo "<td width='300'>".$horario->dia."</td>";
                    echo "<td width='240'>".$horario->hora."</td>";

                    $img = img('asset/img/edit.png');
                    echo "<td>".anchor('horarios/editar/'.$horario->ID_horarios,$img)."</td>";

                    $img = img('asset/img/del.png');
                    echo "<td>".anchor('horarios/excluir/'.$horario->ID_horarios,$img,
                            "onclick=\"return confirm('Confirma a exlusão do horário: $horario->dia, $horario->hora ? ')\"")."</td>";

                echo "</tr>";  
            }
        }
        else{
             echo br(2);
             echo "<tr>";
                echo "<td width='550'><center>Nenhum horário cadastrado</center></td>";
             echo "</tr>";
        }
        
        
    echo "</table>";
    
    echo br(2);
    ?>
    
</div>

