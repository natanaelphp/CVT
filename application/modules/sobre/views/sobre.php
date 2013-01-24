<article>
    <center>
    <style>
        article{
            width: 1000px;
        }
        #dados{
            padding: 20px;
            width: 450px;
            float: left;
            
        }
        #form-contato{
            padding: 20px;
            width: 450px;
            float: right;
        }
        #form-contato input,#form-contato textArea{
            width: 340px;
            float: right;
        }
        #form-contato label{
            float: left;
        }
        #form-contato input[type=submit]{
            width: 200px;
        }
        #creditos{
            clear: both;
        }
        
        a:hover{
            text-decoration: underline;
        }
    </style>
    <div id='dados'>
        Sistema desenvolvido por <a target="_blank" href="http://natanael.net/">Natanael Colacino</a>
        <?php echo br(3); ?>
        <img src="<?php echo base_url('/asset/img/sobre/responsive.png'); ?>">
        <?php echo br(2); ?>
        <a target="_blank" href="http://natanael.net/">natanael.net</a>
    </div>
    <div id='form-contato'>
        Entre em contato com o desenvolvedor.
        <?php echo br(3);?>
        <?php
            echo form_open('sobre/enviaEmail');
                echo form_label('Nome :','nome');
                echo form_input('nome').br(2);
                
                echo form_label('Seu email :','email');
                echo form_input('email').br(2);
                
                echo form_label('Assunto :','assunto');
                echo form_input('assunto').br(2);
                
                echo form_label('Mensagem :','msg');
                echo form_textarea('msg').br(2);
                
                echo form_submit('enviar', 'Enviar');
            echo form_close('');
        ?>
    </div>
    <div id="creditos">
    Icones: 
    <?php echo anchor('http://www.customicondesign.com/','www.customicondesign.com',array('target' => '_blank'));?>
    </div>
    
    
