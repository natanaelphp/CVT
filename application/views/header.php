<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Sistema CVT</title>
        <meta charset="UTF-8">
        <?php echo link_tag("asset/css/reset.css"); ?>
        <?php echo link_tag("asset/css/estilo.css"); ?>
        <?php echo link_tag("asset/css/menu.css");?>
        
        <!-- jquery -->
        <?php echo link_tag("asset/js/jquery/css/smoothness/jquery-ui-1.9.0.custom.css"); ?>
        <script src="<?php echo base_url('asset/js/jquery/js/jquery-1.8.2.js'); ?>"></script>
	<script src="<?php echo base_url('asset/js/jquery/js/jquery-ui-1.9.0.custom.js'); ?>"></script>
        
        <script src="<?php echo base_url('asset/js/jquery.cvt.js'); ?>"></script>
        <!-- jquery -->
        
    </head>
    <body>
        <div id="corpo">
        <header>
            <?php echo img(array('src'=>'asset/img/logo.png','align'=>'center'));?>
            <h1 style="display: inline;">
                <?php echo nbs(2);?> 
                <?php echo anchor(base_url(), 'Sistema CVT'); ?>
            </h1>
            <div style="float:right">
                Centro Vocacional Tecnológico de Três Corações
            </div>
        </header>

       

