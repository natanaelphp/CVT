<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*------------------------------------
 * 
 * Função que escreve Data por extenso 
 * Exemplo de saída: 
 *      Segunda-feira, 3 de Dezembro de 2012
 * 
 ------------------------------------*/
function escreve_data(){

    $semana = date('D');
    switch ($semana){
        case 'Mon': $data = "Segunda-feira";Break;
        case 'Tue': $data = "Terçaa-feira";break;
        case 'Wed': $data = "Quarta-feira";break;
        case 'Thu': $data = "Quinta-feira";break;
        case 'Fri': $data = "Sexta-feira";break;
        case 'Sat': $data = "Sabado";break;
        case 'Sun': $data = "Domingo";break;
    }
    $data .= ", ";
    $data .= date('j');  // dia do mês
    $data .= " de ";
    
    $mes = date('m');
    switch ($mes){
            case 1:  $data .= "Janeiro";break;
            case 2:  $data .= "Fevereiro";break;
            case 3:  $data .= "Março";break;
            case 4:  $data .= "Abril";break;
            case 5:  $data .= "Maio";break;
            case 6:  $data .= "Junho";break;
            case 7:  $data .= "Julho";break;
            case 8:  $data .= "Agosto";break;
            case 9:  $data .= "Setembro";break;
            case 10: $data .= "Outubro";break;
            case 11: $data .= "Novembro";break;
            case 12: $data .= "Dezembro";break;
    }
    $data .= " de ";
    $data .= date('Y');

    return $data;
}
?>
