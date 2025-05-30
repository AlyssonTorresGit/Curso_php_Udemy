<?php

// require 'sistema/configuracao.php';
// include 'helpers.php';
include './sistema/Nucleo/Mensagem.php';

$msg = new Mensagem();
echo $msg->texto = 'texto de teste';
echo '<hr>'

var_dump($msg);