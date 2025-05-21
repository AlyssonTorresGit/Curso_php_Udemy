<?php 

function saudacao():string
{
    $hora = date('H');
    
    if($hora >= 0 && $hora < 6){
        $saudacao = 'Boa madrugada';
    }
    elseif($hora >= 6 && $hora <=12){
        $saudacao = 'bom dia';
    }
    elseif($hora >= 13 && $hora <=18){
        $saudacao = 'Boa tarde';

    }
    else{
        $saudacao = 'Boa noite';
    }
    return $saudacao;
}


function resumoTexto(string $texto, int $limite, string $continue = '...'):string
{
    return $texto;

}



?>