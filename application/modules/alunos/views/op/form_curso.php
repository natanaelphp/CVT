<a href="<?php echo base_url('/alunos/cursos/')."/".$id_aluno; ?>" style="float:left;margin-left: 10px;">
    <img src="<?echo base_url('/asset/img/voltar.png'); ?>" align="center"> Voltar
</a>

<?php
echo br(3);
echo form_open('alunos/operacoes/novo_curso/'.$id_aluno);

    echo form_label('Novo Curso: ');
    echo br(2);
    
    $data[' '] = ''; //Posição vazia no primeiro registro do vetor
    foreach ($cursos as $curso):
        $data[$curso->ID_CURSO] = $curso->nome;
    endforeach;

    echo form_dropdown('curso',$data);
    echo br(2);

    echo form_submit('submit','Gravar');

echo form_close();

?>
