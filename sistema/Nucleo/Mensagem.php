<?php

namespace sistema\Nucleo;

class Mensagem
{
    private $texto;
    private $css;

    public function renderizar()
    {
        return $this->texto = $this->filtrar('mensagem de teste');
    }
    public function filtrar(string $mensagem)
    {
        return filter_var($mensagem, FILTER_DEFAULT);
    }
}
