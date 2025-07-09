<?php

namespace Sistema\Modelo;

use sistema\Nucleo\Conexao;


class PostModelo
{
    public function ler()
    {
        $query = "SELECT * FROM posts WHERE id = 3 ";
        $stmt = Conexao::getInstancia()->query($query);
        $resultado = $stmt->fetchAll();
        return $resultado;
    }
}
