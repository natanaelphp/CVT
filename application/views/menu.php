<nav>
    <?php
    //echo link_tag('asset/css/menu.css');
    //Está comentado pois ja foi declarado na view: header.php.
    ?>
    <div id='cssmenu'>
        <ul>
            <li class='active'><a href='<?php echo base_url(); ?>'><span>Home</span></a></li>
            <li class='has-sub'><a href='#'><span>Alunos</span></a>
                <ul>
                    <li><a href='<?php echo base_url('alunos/cadastrar'); ?>'><span>Cadastrar novo aluno</span></a></li>
                    <li><a href='<?php echo base_url('alunos/buscar'); ?>'><span>Consultar aluno</span></a></li>
                </ul>

            </li>
            <li><a href='<?php echo base_url('cursos'); ?>'><span>Cursos</span></a></li>
            <li><a href='<?php echo base_url('frequencia'); ?>'><span>Freqüência </span></a></li>
            <li><a href='<?php echo base_url('horarios'); ?>'><span>Horários</span></a></li>
            <li><a href='<?php echo base_url('relatorios'); ?>'><span>Relatórios</span></a></li>
        </ul>
    </div>
</nav>

<article>
    <center>