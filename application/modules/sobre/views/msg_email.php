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
            padding-top: 110px;
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
        
        <?php if ($msg == 'sucesso'): ?>
        
            <div class="ui-state-highlight ui-corner-all" style='padding: 10px;font-size: 78%;' >
                Seu e-mail foi enviado com sucesso
            </div>
        
        <?php elseif ($msg == 'falha'): ?>
        
            <div class="ui-state-error ui-corner-all" style='padding: 10px;font-size: 78%;' >
                Ocorreu um erro ao enviar o e-mail.
                <br /><br />
                Verifique se preencheu todos os dados corretamente.
                <a href="javascript:history.back()">Voltar</a>
            </div>
            <br />
            <a href="javascript:history.back()">
                <img src="<?echo base_url('/asset/img/voltar.png'); ?>" align=""><br />Voltar
            </a>
            
        <?php endif; ?>
          
    </div>
    
    <div id="creditos">
    Icones: 
    <?php echo anchor('http://www.customicondesign.com/','www.customicondesign.com',array('target' => '_blank'));?>
    </div>
    
    
