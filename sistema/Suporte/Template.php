<?php

namespace sistema\Suporte;

use Twig\Lexer;
use sistema\Nucleo\Helpers;

/**
 * Classe Template
 */

class Template
{
    private \Twig\Environment $twig;
    public function __construct(string $diretorio)
    {
        $loader = new \Twig\loader\FilesystemLoader($diretorio);
        $this->twig = new \Twig\Environment($loader);
    }

    public function renderizar(string $view, array $dados)
    {
        return $this->twig->render($view, $dados);
    }
}
