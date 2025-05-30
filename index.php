<?php

// require 'sistema/configuracao.php';
// include 'helpers.php';
include './sistema/Nucleo/Mensagem.php';
include './sistema/Nucleo/controlador.php';

use sistema\Nucleo\controlador;

$controlador = new controlador('admin');
echo '<hr>';
var_dump($controlador);
