<?php if ($msg): ?>
    <div class="ui-state-highlight ui-corner-all" style='padding:10px;font-size:78%;width:700px;' >
        <?php echo $msg; ?>
    </div>
<?php endif; ?>

<?php
    echo br();
    $icones = array(
            array ("titulo" => "Novo Aluno","img" => img('asset/img/cad_aluno.png'),"link"=>'alunos/cadastrar'),
            array ("titulo" => "Consultar Aluno","img" => img('asset/img/consulta_aluno.png'),"link"=>'alunos/buscar'),
            array ("titulo" => "Cursos","img" => img('asset/img/cursos.png'),"link"=>'cursos'),
            array ("titulo" => "Freqüência","img" => img('asset/img/frequencia.png'),"link"=>'frequencia'),
            array ("titulo" => "Horários","img" => img('asset/img/horario.png'),"link"=>'horarios'),
            array ("titulo" => "Relatórios","img" => img('asset/img/relatorio.png'),"link"=>'relatorios')
        );

    foreach ($icones as $icone) {
        echo "<a href='".$icone['link']."'>";
            echo "<div class='icon'>";
                    echo heading($icone['titulo'],4);
                    echo $icone['img'];                  
            echo "</div>";
        echo "</a>";
        //if ($icone['titulo'] == 'Cursos') echo br(2);
    }

?>
    


