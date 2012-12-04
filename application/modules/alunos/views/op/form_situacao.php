<a href="<?php echo base_url('/alunos/cursos/')."/".$id_aluno; ?>" style="float:left;margin-left: 10px;">
    <img src="<?echo base_url('/asset/img/voltar.png'); ?>" align="center"> Voltar
</a>

<?php
echo br(3);
echo form_open('alunos/operacoes/editar_situacao_curso/'.$id_aluno."/".$id_curso);

    echo form_label('Escolha a nova Situação: ');
    echo br(2);
    
    $data = array (
        ' ' => '',
        'Cursando' => 'Cursando',
        'Concluído' => 'Concluído',
        'Concluído(Certificado Entregue)' => 'Concluído(Certificado Entregue)',
        'Concluído(Certificado não entrege)' => 'Concluído(Certificado n&atilde;o entrege)',
        'Abandonado' => 'Abandonado'
    );

    echo form_dropdown('situacao',$data);
    echo br(2);

    echo form_submit('submit','Gravar');

echo form_close();

?>
