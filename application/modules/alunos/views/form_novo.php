<div id="form">
    <?php
        echo heading('Cadastrar novo aluno',2);
        echo br();

        echo validation_errors();

        echo br();
        echo form_open();

        echo form_label('Nome: ', 'nome');
        echo form_input('nome');
        echo br(2);

        echo form_label('CPF/RG: ', 'documento');
        echo form_input('documento');
        echo br(2);

        echo form_label('Nome da mãe: ','mae');
        echo form_input('mae');
        echo br(2);

        $class = 'class="date-long"';
        echo form_label('Data de nascimento: ','data_nasc');
        echo form_input('data_nasc','',$class);
        echo br(2);

        echo form_label('Escolaridade: ', 'escolaridade');
        $options = array(
                '' => '',
                'Ensino Fundamental' => 'Ensino Fundamental',
                'Ensino Médio' => 'Ensino Médio',
                'Superior Incompleto' => 'Superior Incompleto',
                'Superior Completo' => 'Superior Completo'
            );
        echo form_dropdown('escolaridade',$options,'');
        echo br(3);

        echo form_label('Endereço : ', 'endereco');
        echo form_input('endereco');
        echo br(2);

        echo form_label('Bairro: ', 'bairro');
        echo form_input('bairro');
        echo br(2);

        echo form_label('Cidade: ', 'cidade');
        echo form_input('cidade');
        echo br(3);

        echo form_label('Telefone: ', 'telefone');
        echo form_input('telefone');
        echo br(2);

        echo form_label('Email: ', 'email');
        echo form_input('email');
        echo br(3);

        echo form_label('Empresa: ', 'empresa');
        echo form_input('empresa');
        echo br(2); 

        echo form_label('Renda: ', 'renda');
        $options = array(
            '' => '',
            '(sem renda)' => '(sem renda)',
            'menos de R$600' => 'menos de R$600',
            'de R$600 a R$1000' => 'de R$600 a R$1000',
            'de R$1000 a R$1500' => 'de R$1000 a R$1500',
            'de R$1500 a R$2000' => 'de R$1500 a R$2000',
            'acima de R$2000' => 'acima de R$2000'
        );
        echo form_dropdown('renda',$options,'');
        echo br(2);

        echo form_label('Empregado ou dependente', 'E_D');
        $options = array('' => '', 'Empregado' => 'Empregado', 'Dependente' => 'Dependente');
        echo form_dropdown('E_D',$options,'');
        echo br(3);

        echo form_label('Numero da ID: ', 'id_inclusao');
        echo form_input('id_inclusao');
        echo br(2); 

        echo form_label('Senha: ', 'senha');
        echo form_input('senha');
        echo br(2); 


        echo form_label('Data da inscrição: ', 'data_inscricao');
        $hoje = date('d/m/Y');
        $class = 'class="date"';
        echo form_input('data_inscricao', $hoje,$class);
        echo br(2); 

        echo form_label('Local ou remoto: ', 'L_R');
        $options = array('' => '', 'Local' => 'Local', 'Remoto' => 'Remoto');
        echo form_dropdown('L_R',$options,'');
        echo br(2);


        echo form_submit('cadastra_aluno', 'Cadastrar Aluno');
        echo br(3); 
        echo form_close();
    ?>
</div>
