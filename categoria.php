<?php


class Categoria {
    public $nome_categoria;
    public $id_categoria;


    public static function listar()
    {
        $query = "select nome_categoria";

        $conexao = Conexao::conectar();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

}