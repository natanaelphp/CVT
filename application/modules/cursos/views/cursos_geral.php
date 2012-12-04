<div style='width: 700px; display: table;'>
    <?php  echo heading('Cursos',2); ?>
    <a href="<?php echo base_url('cursos/novo/'); ?>" style="float:left;">
        <?php echo img(array('src'=>'asset/img/add.png','align'=>'center')); ?>
        Novo curso
    </a>

    <?php 
    echo br(2);
    echo "<table cellpadding='5'>"; 
       
        foreach ($cursos as $curso) {
            echo "<tr>";
                echo "<td width='550'>".$curso->nome."</td>";
                
                $img = img('asset/img/edit.png');
                echo "<td>".anchor('cursos/editar/'.$curso->ID_CURSO,$img)."</td>";
                
                $img = img('asset/img/del.png');
                echo "<td>".anchor('cursos/excluir/'.$curso->ID_CURSO,$img,
                        "onclick=\"return confirm('Confirma a exlusão do curso: $curso->nome ? ')\"")."</td>";
                
            echo "</tr>";  
        }
    echo "</table>";
    
    echo br(2);
    ?>
    
</div>

