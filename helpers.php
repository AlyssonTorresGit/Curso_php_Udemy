<?php 
function url(string $url): string
{
    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
    $ambiente = ($servidor == 'localhost' ? URL_DESENVOLVIMENTO : URL_PRODUÇÃO);


    
    return $ambiente.$url;
}

function localhost(): bool
{
    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
if( $servidor == 'localhost')
{
    return true;
}
return false;
}


/**
 * validar email
 */
function validarURL(string $url): bool
{
if(mb_strlen($url) < 10){
    return false;
}
if(!str_contains($url, '.')){
    return false;
}    
if(str_contains($url, 'http://') or str_contains($url, 'https://')){
    return true;
}
}

function validarEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * contados de tempo em relação a data de criação.
 * @param string $data
 * @param  string
 */
function contadorTempo(string $data): string
{
    $agora = strtotime(date('Y-m-d H:i:s'));
    $tempo = strtotime($data);
    $diferenca = $agora - $tempo;

    $segundos = $diferenca;
    $minutos = round($diferenca / 60);
    $horas = round($diferenca / 3600);
    $dias = round($diferenca/ 86400);
    $semanas = round($diferenca / 604800);
    $meses = round($diferenca /2419200);
    $anos = round($diferenca / 29030400);

    if($segundos <= 60){
        return 'agora';
    }elseif ($minutos <= 60 ){
        return $minutos == 1 ? 'há 1 minuto' : 'Há' . $minutos . 'minutos'; 
    }elseif($horas <= 24){
        return $horas == 1 ? 'Há 1 hora' : 'há' . $horas . 'horas';
    }elseif($dias <= 7 ){
        return $dias == 1 ? 'ontem' : 'há' . $dias . 'dias';
    }elseif($semanas <= 4 ){
        return $semanas == 1 ? 'há 1 semana' : 'há' . $semanas . 'meses';
    }elseif($meses <= 12 ){
        return $meses == 1 ? 'há 1 mês' : 'há' . $meses . 'meses';
    }elseif($anos <= 1 ){
        return $anos == 1 ? 'há 1 ano' : 'há' . $anos . 'meses';
    }else{
        return '';
    }

}

function contarTempo($data)
{
var_dump($data);
}

function formatarValor( $valor = null): string
{
return number_format(($valor?:10),2,',','.');

}

function formatarNumero($numero = null)
{
    return number_format($numero ? $numero:0,0,'.','.');
}

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