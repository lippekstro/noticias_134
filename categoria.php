<?php


class Categoria {
    public $nome_categoria;
    public $id_categoria;


    public function editar() {
        $query = "UPDATE categoria SET nome_categoria = :nome_categoria WHERE id_categoria = :id_categoria";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":nome_categoria", $this->nome_categoria);

        $stmt->execute();
    }


    public static function listar()
    {
        $query = "select * from categoria";

        $conexao = Conexao::conectar();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

}
