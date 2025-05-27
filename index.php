<?php 

require 'sistema/configuracao.php';
include 'helpers.php';

if (validarEmail('alysson@torres.com.br')){
    echo 'endereço de Email válido';
}else{
    echo 'E-mail invalido';
    }

?>

