<a href="<?php echo base_url('/alunos/exibir/')."/".$id_aluno; ?>" style="float:left;margin-left: 10px;">
    <img src="<?echo base_url('/asset/img/voltar.png'); ?>" align="center"> Voltar
</a>

<div style='width: 700px; '>

    <?php echo heading('Histórico de faltas',2); ?>
    <p align="left">
        <b>Aluno: </b><?php echo $aluno[0]->nome; ?>
    </p>
    
    <div class="date" style="float:left;font-size: 90%;"></div>
    <table cellpadding="5">  
        <th style="text-align: center;"> Faltas </th>
        
        <?php if ($faltas) : ?>
            <?php foreach ($faltas as $falta) :  ?>
                <tr>
                    <td width="380" style="text-align: center;">
                        <?php echo $falta->dataHora; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
             <tr>
                <td width="380" style="text-align: center;">
                    Nenhuma falta registrada para este aluno.
                </td>
            </tr>
        <?php endif; ?>
        
        
     
        
    </table>
       
    </div>
    <!--<div class="date" style="float:right;font-size: 90%;"></div>-->
    
    
</div>