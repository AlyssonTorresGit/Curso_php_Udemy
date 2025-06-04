<?php

namespace Sistema\Controlador;

use sistema\Nucleo\Controlador;

class SiteControlador extends Controlador
{

    public function index(): void
    {
        echo 'página index';
    }
    public function sobre(): void
    {
        echo 'sobre';
    }
}
