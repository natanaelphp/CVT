<center>
    <?php echo heading('Relatório de alunos',2); ?>  
    <?php echo br(); ?>
    
    <table cellpadding='5' id='al'>
    <?php
        $i = 0;
        
        echo "Total de alunos: ".count($alunos);
        echo nbs(70);
        echo escreve_data();
        echo "<hr>";
        echo br();
        echo "<tr>";
            echo "<th></th>";
            if($this->input->post('nome')) echo "<th>Nome</th>";
            if($this->input->post('CPF_RG')) echo "<th>Doocumento</th>"; 
            if($this->input->post('mae')) echo "<th>Nome da mãe</th>";
            if($this->input->post('data_nascimento')) echo "<th>Data de Nascimento</th>";
            if($this->input->post('escolaridade')) echo "<th>Escolaridade</th>";
            if($this->input->post('endereco')) echo "<th>Endereço</th>";
            if($this->input->post('bairro')) echo "<th>Bairro</th>";
            if($this->input->post('cidade')) echo "<th>Cidade</th>";
            if($this->input->post('telefone')) echo "<th>Telefone</th>";
            if($this->input->post('email')) echo "<th>E-mail</th>";
            if($this->input->post('empresa')) echo "<th>Empresa</th>";
            if($this->input->post('renda')) echo "<th>Renda</th>";
            if($this->input->post('E_D')) echo "<th>Empregado/Dependente</th>";
            if($this->input->post('ID_inclusao')) echo "<th>ID inclusão</th>";
            if($this->input->post('senhaid')) echo "<th>Senha inclusão</th>";
            if($this->input->post('data_inscricao')) echo "<th>Data de incrição</th>";
            if($this->input->post('L_R')) echo "<th>Modo de curso</th>";
        echo "</tr>";
        foreach ($alunos as $aluno):
            $i++;
            echo "<tr>";
                echo "<th>".$i."</th>";
                if($this->input->post('nome')){
                    echo "<td width=''>";
                    echo $aluno->nome.br();
                    echo "</td>";
                }
                
                if($this->input->post('CPF_RG')){
                    echo "<td width=''>";
                    echo $aluno->CPF_RG.br();
                    echo "</td>";
                }
                
                if($this->input->post('mae')){
                    echo "<td width=''>";
                    echo $aluno->mae.br();
                    echo "</td>";
                }
                
                if($this->input->post('data_nascimento')){
                    echo "<td width=''>";
                    echo $aluno->data_nascimento.br();
                    echo "</td>";
                }
                
                if($this->input->post('escolaridade')){
                    echo "<td width=''>";
                    echo $aluno->escolaridade.br();
                    echo "</td>";
                }
                
                if($this->input->post('endereco')){
                    echo "<td width=''>";
                    echo $aluno->endereco.br();
                    echo "</td>";
                }
                
                if($this->input->post('bairro')){
                    echo "<td width=''>";
                    echo $aluno->bairro.br();
                    echo "</td>";
                }
                
                if($this->input->post('cidade')){
                    echo "<td width=''>";
                    echo $aluno->cidade.br();
                    echo "</td>";
                }
                
                if($this->input->post('telefone')){
                    echo "<td width=''>";
                    echo $aluno->telefone.br();
                    echo "</td>";
                }
                
                if($this->input->post('email')){
                    echo "<td width=''>";
                    echo $aluno->email.br();
                    echo "</td>";
                }
                
                if($this->input->post('empresa')){
                    echo "<td width=''>";
                    echo $aluno->empresa.br();
                    echo "</td>";
                }
                
                if($this->input->post('renda')){
                    echo "<td width=''>";
                    echo $aluno->renda.br();
                    echo "</td>";
                }
                
                if($this->input->post('E_D')){
                    echo "<td width=''>";
                    echo $aluno->E_D.br();
                    echo "</td>";
                }
                
                if($this->input->post('ID_inclusao')){
                    echo "<td width=''>";
                    echo $aluno->ID_inclusao.br();
                    echo "</td>";
                }
                
                if($this->input->post('senhaid')){
                    echo "<td width=''>";
                    echo $aluno->senhaid.br();
                    echo "</td>";
                }
                
                if($this->input->post('data_inscricao')){
                    echo "<td width=''>";
                    echo $aluno->data_inscricao.br();
                    echo "</td>";
                }
                
                if($this->input->post('L_R')){
                    echo "<td width=''>";
                    echo $aluno->L_R.br();
                    echo "</td>";
                }
            echo "</tr>";
        endforeach;
        
        
    ?>
    </table>
<?php echo br(2); ?>

