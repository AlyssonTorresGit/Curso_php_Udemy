<?php

//Arquivo index responsável pela inicialização do sistema

use sistema\Nucleo\Helpers;

require 'vendor/autoload.php';

require 'rotas.php';

try {
    Helpers::validarCpf('12312312312');
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo "oi";
}
