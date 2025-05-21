<?php 

require 'sistema/configuracao.php';
include 'helpers.php';

$texto = 'texto para resumir';

echo $total = mb_strlen(trim($texto));
echo '<hr>';

echo $resumo = mb_substr($texto, 2, 15);
echo '<hr>';
echo $ocorencia = mb_strpos($texto, 'e');




// echo saudacao();
// echo '<hr>';
// echo resumoTexto($texto, 50);
?>

