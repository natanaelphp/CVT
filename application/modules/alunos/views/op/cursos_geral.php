<a href="<?php echo base_url('/alunos/exibir/')."/".$id_aluno; ?>" style="float:left;margin-left: 10px;">
    <img src="<?echo base_url('/asset/img/voltar.png'); ?>" align="center"> Voltar
</a>

<div style='width: 700px; '>
    <?php echo heading('Relação de Cursos',2); ?>
    <p align="left">
        <b>Aluno: </b><?php echo $aluno[0]->nome; ?>
    </p>
        
    <?php    
    echo "<table cellpadding='5'>"; 
        if ($cursos) :
            foreach ($cursos as $curso) {
                echo "<tr>";
                    echo "<td width='400'>".$curso->nome."</td>";
                    echo "<td width='400'>".$curso->situacao."</td>";

                    $img = img('asset/img/edit.png');
                    echo "<td>".anchor('alunos/operacoes/editar_situacao_curso/'.$id_aluno."/".$curso->ID_CURSO,$img)."</td>";

                    $img = img('asset/img/del.png');
                    echo "<td>".anchor('alunos/operacoes/excluir_curso/'.$id_aluno."/".$curso->ID_CURSO,$img,
                            "onclick=\"return confirm('Tem certeza que deseja excluir a relação com o Curso: $curso->nome ? ')\"")."</td>";
                echo "</tr>";  
            }
        else:
            echo "<tr><td width='700'>";
            echo "<center><br />Nao há cursos cadastrados para este aluno.<br /><br /></center>";
            echo "</td></tr>";
        endif;
    echo "</table>";
    echo br();
    ?>
    
    <a href="<?php echo base_url('alunos/operacoes/novo_curso/'.$id_aluno); ?>" style="float: left;">
        <?php echo img(array('src'=>'asset/img/add.png','align'=>'center')); ?>
        Adicionar Curso
    </a>
</div>
