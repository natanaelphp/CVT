<a href="<?php echo base_url('/horarios/'); ?>" style="float:left;margin-left: 10px;">
    <img src="<?echo base_url('/asset/img/voltar.png'); ?>" align="center"> Voltar
</a>

<?php

echo br(2);
echo validation_errors();
echo br();

//Se não vier dados para editar...preencher com vazio os campos.
if (!isset($horario)) {
    $horario[0]->dia = '';
    $horario[0]->hora = '';
}

echo form_open($form_action);

    echo form_label('Novo horário: ');
    echo br(2);

    $dias = array(
        '' => '',
        'Segunda-feira' => 'Segunda-feira',
        'Terça-feira' => 'Terça-feira',
        'Quarta-feira' => 'Quarta-feira',
        'Quinta-feira' => 'Quinta-feira',
        'Sexta-feira' => 'Sexta-feira',
        'Sábado' => 'Sábado',
        'Terça-feira e Quinta-feira' => 'Terça-feira e Quinta-feira',
        'Quarta-feira e Sexta-feira' => 'Quarta-feira e Sexta-feira'
    );
    echo form_label('Dia: ','dia');
    echo nbs(6);
    echo form_dropdown('dia',$dias,$horario[0]->dia);
    echo br(2);
   
    echo form_label('Hora: ','hora');
    echo nbs(4);
    echo form_input('hora',$horario[0]->hora);
    echo br(2);

    echo form_submit('submit','Gravar');

echo form_close();

?>