/*--------------------------------------------------
    Documento: Jquery CVT
    Criado em : 15/10/2012, 11:02        
    Funções jquery/javascript do projeto
    Autor: Natanael
--------------------------------------------------*/  

$(document).ready(function(){

    $('input[type=submit]').button();
    
    $('.date').datepicker({
            dateFormat: 'dd/mm/yy',
            dayNames: [
            'Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'
            ],
            dayNamesMin: [
            'D','S','T','Q','Q','S','S','D'
            ],
            dayNamesShort: [
            'Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'
            ],
            monthNames: [
            'Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro',
            'Outubro','Novembro','Dezembro'
            ],
            monthNamesShort: [
            'Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set',
            'Out','Nov','Dez'
            ],
            nextText: 'Próximo',
            prevText: 'Anterior'
    });
   
   
    $('.date-long').datepicker({
        changeMonth: true,
        changeYear: true,
        defaultDate: "-15y",
        
        dateFormat: 'dd/mm/yy',
        dayNames: [
        'Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'
        ],
        dayNamesMin: [
        'D','S','T','Q','Q','S','S','D'
        ],
        dayNamesShort: [
        'Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'
        ],
        monthNames: [
        'Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro',
        'Outubro','Novembro','Dezembro'
        ],
        monthNamesShort: [
        'Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set',
        'Out','Nov','Dez'
        ],
        nextText: 'Próximo',
        prevText: 'Anterior' 
    });
    

});




