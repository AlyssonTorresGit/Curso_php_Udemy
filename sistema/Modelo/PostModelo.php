<?php

namespace Sistema\Modelo;

use sistema\Nucleo\Conexao;


class PostModelo
{
    public function busca()
    {
        $query = "SELECT * FROM posts ";
        $stmt = Conexao::getInstancia()->query($query);
        $resultado = $stmt->fetchAll();
        return $resultado;
    }

    public function buscaPorId(int $id)
    {
        $query = "SELECT * FROM posts WHERE id = {$id} ";
        $stmt = Conexao::getInstancia()->query($query);
        $resultado = $stmt->fet();
        return $resultado;
    }
}
}