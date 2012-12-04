<div style='width: 700px; display: table;'>
    
    <?php if ($aluno[0]->contFaltas == 2): ?>
        <div class="ui-state-highlight ui-corner-all" style='padding: 10px;font-size: 78%;' >
            <?php echo img(array('src'=>'asset/img/alunos/amarelo16.png','align'=>'center')).nbs(4); ?>
            <b>Alerta:</b> Este aluno possui duas faltas consecutivas,
            se faltar mais uma vez perderá a vaga e será retirado do horário.
        </div>
    <?php endif; ?>
    
        <?php if ($aluno[0]->contFaltas == 3): ?>
        <div class="ui-state-highlight ui-corner-all" style='padding: 10px;font-size: 78%;' >
            <?php echo img(array('src'=>'asset/img/alunos/vermelho16.png','align'=>'center')).nbs(4); ?>
            <b>Alerta:</b> Este aluno faltou 3 vezes consecutivas e foi retirado do horário.
        </div>
    <?php endif; ?>
    
    <div style='text-align: left;float: left;'>    
        <?php
            echo br();
            echo '<b>ID(numero de cadastro): </b>'.$aluno[0]->ID_ALUNO.br(2);
            echo '<b>Nome: </b>'.$aluno[0]->nome.br();
            echo '<b>CPF/RG: </b>'.$aluno[0]->CPF_RG.br();
            echo '<b>Nome da mãe: </b>'.$aluno[0]->mae.br();
            echo '<b>Data de Nascimento: </b>'.$aluno[0]->data_nascimento.br();
            echo '<b>Escolaridade: </b>'.$aluno[0]->escolaridade.br(2);
            echo '<b>Endereço: </b>'.$aluno[0]->endereco.br();
            echo '<b>Bairro: </b>'.$aluno[0]->bairro.br();
            echo '<b>Cidade: </b>'.$aluno[0]->cidade.br(2);    
            echo '<b>Telefone: </b>'.$aluno[0]->telefone.br();    
            echo '<b>Email: </b>'.$aluno[0]->email.br(2);
            echo '<b>Empresa: </b>'.$aluno[0]->empresa.br();
            echo '<b>Renda: </b>'.$aluno[0]->renda.br();
            echo '<b>Empregado ou Dependente: </b>'.$aluno[0]->E_D.br(2); 
            echo '<b>ID inclusão: </b>'.$aluno[0]->ID_inclusao.br();
            echo '<b>Senha inclusão: </b>'.$aluno[0]->senhaid.br();    
            echo '<b>Data de incrição: </b>'.$aluno[0]->data_inscricao.br();    
            echo '<b>Modo de curso: </b> '.$aluno[0]->L_R.br();  
            echo br();
        ?>
    </div>
    
    
    <div style='text-align: left;float: right;width:215px;'>
        
        <?php echo br(); ?>
        
        <b>Situação do Aluno:</b>
        <?php
            echo nbs(4);
            switch($aluno[0]->contFaltas){
                case 0: echo img(array('src'=>'asset/img/alunos/verde.png','align'=>'center'));break;
                case 1: echo img(array('src'=>'asset/img/alunos/verde.png','align'=>'center'));break;
                case 2: echo img(array('src'=>'asset/img/alunos/amarelo.png','align'=>'center'));break;
                case 3: echo img(array('src'=>'asset/img/alunos/vermelho.png','align'=>'center'));break;
            }
            echo br(2);
        ?>
        
        <div style="border-bottom: 1px dotted #e5e5e5; "></div>
        <?php echo br(); ?>
        
        <b>Faltas consecutivas:</b>
        <?php echo $aluno[0]->contFaltas.br(2); ?> 
        <b>Horário:</b>
        <?php
        if ($aluno[0]->ID_horarios) echo $aluno[0]->dia.", ".$aluno[0]->hora; 
        else echo "Nenhum";
        ?>
        <?php echo br(2); ?>
        
        <div style="border-bottom: 1px dotted #e5e5e5;"></div>
        
        <ul>
            <a href='<?php echo base_url('alunos/alterarhorario/')."/".$aluno[0]->ID_ALUNO; ?>'>
                <li style="padding:10px">
                    <?php echo img(array('src'=>'asset/img/alunos/horario32.png','align'=>'center')).nbs(2);?>
                    Alterar Horário
                </li>
            </a>
            <a href='<?php echo base_url('alunos/faltas/')."/".$aluno[0]->ID_ALUNO; ?>'>
                <li style="padding:10px">
                    <?php echo img(array('src'=>'asset/img/alunos/freq32.png','align'=>'center')).nbs(2);?>
                     Ver historico de faltas
                </li>
            </a>
            <a href='<?php echo base_url('alunos/cursos/')."/".$aluno[0]->ID_ALUNO; ?>'>
                <li style="padding:10px">
                    <?php echo img(array('src'=>'asset/img/alunos/cursos32.png','align'=>'center')).nbs(2);?>
                    Relação de cursos
                </li>
            </a>
            <a href='<?php echo base_url('alunos/editar/')."/".$aluno[0]->ID_ALUNO; ?>'>
                <li style="padding:10px">
                    <?php echo img(array('src'=>'asset/img/alunos/edit32.png','align'=>'center')).nbs(2);?>
                    Editar Aluno
                </li>
            </a>
            <a href='<?php echo base_url('alunos/excluir/')."/".$aluno[0]->ID_ALUNO; ?>' 
               onclick="return confirm('Tem certeza que deseja excluir este aluno?')">
                <li style="padding:10px">
                    <?php echo img(array('src'=>'asset/img/alunos/del32.png','align'=>'center')).nbs(2);?>
                    Excluir Aluno
                </li>
            </a>
            
        </ul>
        <div style="border-bottom: 1px dotted #e5e5e5;"></div>
        
    </div>
    
</div>
