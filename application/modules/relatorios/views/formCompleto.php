<article>
<center>

<?php echo heading('Relatório Completo de alunos',2); 

echo br(2);
echo "Escolha os campos a serem exibidos no relatório.";
echo br(2);
echo form_open();
    echo "<table cellpadding='5'>";
    
    echo "<tr>";
        echo "<td>";
            echo form_checkbox('nome', 'mostrar',TRUE);
        echo "</td>";
        echo "<td>";
            echo form_label('Nome');
        echo "</td>";
    echo "</tr>";
    
    echo "<tr>";
        echo "<td>";
            echo form_checkbox('CPF_RG', 'mostrar');
        echo "</td>";    
        echo "<td>";
            echo form_label('CPF/RG');
        echo "</td>";
    echo "</tr>";
    
    echo "<tr>";
        echo "<td>";
            echo form_checkbox('mae', 'mostrar');
        echo "</td>";
        echo "<td>";
            echo form_label('Nome da mãe');
        echo "</td>";
    echo "</tr>";
   
    echo "<tr>";
        echo "<td>";
            echo form_checkbox('data_nascimento', 'mostrar');
        echo "</td>";
        echo "<td>";
            echo form_label('Data de nascimento');
        echo "</td>";
    echo "</tr>";
    
    echo "<tr>";
        echo "<td>";
            echo form_checkbox('escolaridade', 'mostrar');
        echo "</td>";
        echo "<td>";
            echo form_label('Escolaridade');
        echo "</td>";    
    echo "</tr>";
    
    echo "<tr>";
        echo "<td>";
            echo form_checkbox('endereco', 'mostrar');
        echo "</td>";    
        echo "<td>";
            echo form_label('endereço');
        echo "</td>";
    echo "</tr>";
    
    echo "<tr>";
        echo "<td>";
            echo form_checkbox('bairro', 'mostrar');
        echo "</td>";
        echo "<td>";
            echo form_label('Bairro');
        echo "</td>";
    echo "</tr>";
    
    echo "<tr>";
        echo "<td>";
            echo form_checkbox('cidade', 'mostrar');
        echo "</td>";
        echo "<td>";
            echo form_label('Cidade');
        echo "</td>";
    echo "</tr>";
    
    echo "<tr>";
        echo "<td>";
            echo form_checkbox('telefone', 'mostrar');
        echo "</td>";
        echo "<td>";
            echo form_label('Telefone');
        echo "</td>";
    echo "</tr>";
    
    echo "<tr>";
        echo "<td>";
            echo form_checkbox('email', 'mostrar');
        echo "</td>";
        echo "<td>";
            echo form_label('Email');
        echo "</td>";
    echo "</tr>";
    
    echo "<tr>";
        echo "<td>";
            echo form_checkbox('empresa', 'mostrar');
        echo "</td>";
        echo "<td>";
            echo form_label('Empresa');
        echo "</td>";
    echo "</tr>";
    
    echo "<tr>";
        echo "<td>";
            echo form_checkbox('renda', 'mostrar');
        echo "</td>";
        echo "<td>";
            echo form_label('Renda');
        echo "</td>"; 
    echo "</tr>";
    
    echo "<tr>";
        echo "<td>";
            echo form_checkbox('E_D', 'mostrar');
        echo "</td>";
        echo "<td>";
            echo form_label('Empregado/Dependente');
        echo "</td>";
    echo "</tr>";
    
    echo "<tr>";
        echo "<td>";
            echo form_checkbox('ID_inclusao', 'mostrar');
        echo "</td>";
        echo "<td>";
            echo form_label('ID_inclusao');
        echo "</td>";
    echo "</tr>";
    
    echo "<tr>";
        echo "<td>";
            echo form_checkbox('senhaid', 'mostrar');
        echo "</td>"; 
        echo "<td>";
            echo form_label('Senha ID');
        echo "</td>";
    echo "</tr>";
    
    echo "<tr>";
        echo "<td>";
            echo form_checkbox('data_inscricao', 'mostrar');
        echo "</td>";
        echo "<td>";
            echo form_label('Data de incrição');
        echo "</td>";
    echo "</tr>";
    
    echo "<tr>";
        echo "<td>";
            echo form_checkbox('L_R', 'mostrar');
        echo "</td>";
        echo "<td>";
            echo form_label('Local/Remoto');
        echo "</td>";
    echo "</tr>";
    echo "</table>";
    
    echo br();
    echo form_checkbox('pdf', 'mostrar');
    echo form_label('Gerar em PDF');
    echo br(2);
    
    echo form_submit('formCompleto','Gerar relatório');
    
    
echo form_close();

echo br(2); ?>

