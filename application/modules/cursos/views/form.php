<a href="<?php echo base_url('/cursos/'); ?>" style="float:left;margin-left: 10px;">
    <img src="<?echo base_url('/asset/img/voltar.png'); ?>" align="center"> Voltar
</a>

<?php

echo br(2);
echo validation_errors();
echo br();

echo form_open($form_action);

    echo form_label('Novo curso: ','curso');
    echo br(2);
    
    if (!isset($curso)) $curso[0]->nome = '';
    
    echo form_input('curso',$curso[0]->nome);
    echo br(2);
    
    echo form_submit('submit','Gravar');
    
echo form_close();

?>
