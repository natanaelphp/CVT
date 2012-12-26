<style>
.icon{
    width: 600px;
    padding: 10px;
}
img{
    vertical-align: middle; 
}
</style>
<?php echo heading('Relatórios',2); ?>

<?php
echo br();
    $icones = array(
        array ("titulo" => "Relatório de alunos",
               "img" => img('asset/img/relatorios/rel_man.png'),"link" => base_url().'relatorios/alunos'),
        array ("titulo" => "Relatório completo de Alunos",
               "img" => img('asset/img/relatorios/rel_man.png'),"link" => base_url().'relatorios/'),
        array ("titulo" => "Relatório de empresas",
               "img" => img('asset/img/relatorios/rel_man.png'),"link" => base_url().'relatorios/'),
        array ("titulo" => "Relatório de empresas separando empregados e dependentes",
               "img" => img('asset/img/relatorios/rel_man.png'),"link" => base_url().'relatorios/'),
    );

    echo "<ul>";
    foreach ($icones as $icone) {
        echo "<a href='".$icone['link']."'>";    
            echo "<li class='icon'>";
                    echo $icone['img'];                  
                    echo $icone['titulo'];
            echo "</li>";
        echo "</a>";
    }
    echo "</ul>";
?>