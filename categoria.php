<?php


class Categoria
{
    public $nome_categoria;
    public $id_categoria;


   

    public function editar()
    {
        $query = "UPDATE categoria SET nome_categoria = :nome_categoria WHERE id_categoria = :id_categoria";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":nome_categoria", $this->nome_categoria);

        $stmt->execute();
    }


    public static function listar()
    {
        $query = "select nome_categoria";

        $conexao = Conexao::conectar();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }


public function deletar(){
    $query = "DELETE FROM categoria WHERE id_categoria = :id_categoria";
    $conexao = Conexao::conectar();
    $stmt = $conexao->prepare($query);
    $stmt->binValue(':id_categoria' , $this->id_categoria);
    $stmt->execute();
}
}
?>
