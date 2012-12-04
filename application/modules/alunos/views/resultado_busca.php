<div style="width:600px;">
    <?php echo br(2); ?>
    <ul>
        <?php       
            foreach ($alunos as $aluno) :    
                $url = base_url('alunos/exibir/'.$aluno->ID_ALUNO);
                echo "<a href='".$url."'>";
                    echo "<li>";
                        echo img(array('src'=>'asset/img/alunos/aluno24.png','align'=>'center')).nbs(2);
                        echo $aluno->nome;
                    echo "</li>";
                echo "</a>";
            endforeach;
        ?>
    </ul>
    
    <?php echo br(2); ?>    
</div>