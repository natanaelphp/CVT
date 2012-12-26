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
    </style>
    <div id='dados'>
        Natanael
    </div>
    <div id='form-contato'>
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
    <?php echo br(20); ?>
    Icones: 
    <?php echo anchor('http://www.customicondesign.com/','www.customicondesign.com',array('target' => '_blank'));?>
    
    <?php
        //code..
    ?>
    
