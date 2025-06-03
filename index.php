<?php
require 'vendor/autoload.php';

$document = new \Bissolli\ValidadorCpfCnpj\CPF('03318933392');

var_dump($document->isValid());
