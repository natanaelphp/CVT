<a href="<?php echo base_url('/alunos/exibir/')."/".$id_aluno; ?>" style="float:left;margin-left: 10px;">
    <img src="<?echo base_url('/asset/img/voltar.png'); ?>" align="center"> Voltar
</a>

<?php
echo br(3);
echo form_open($form_action);

    echo form_label('Novo horário: ');
    echo br(2);
    
    $data[' '] = ''; //Posição vazia no primeiro registro do vetor
    foreach ($horarios as $horario):
        $data[$horario->ID_horarios] = $horario->dia.", ".$horario->hora;
    endforeach;
        
    $marcado = $horario_aluno[0]->horario;
    echo form_dropdown('horario',$data,$marcado);
    echo br(2);

    echo form_submit('submit','Gravar');

echo form_close();

?>