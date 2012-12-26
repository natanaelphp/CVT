<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pdf{
    
    public function __construct() {
        //$CI =& get_instance();
    }
    
    public function exibe($html,$filename = NULL){        
        
        require_once("application/libraries/dompdf/dompdf_config.inc.php");

        $dompdf = new DOMPDF();
        $dompdf->load_html($html);

        //Define posição do papel
        //$dompdf->set_paper("a4", "landscape");
        //$dompdf->set_paper("a4");
        $dompdf->render();
        
        if (!$filename) $filename = 'arquivo';
        
        // para gerar visualização do PDF
        $dompdf->stream($filename . ".pdf", array('Attachment' => 0));
        
    }
    
    
}