<?php


class Categoria
{
    public $nome_categoria;
    public $id_categoria;


    public function __construct($id_categoria=false)
    {
        if($id_categoria){
            $this->id_categoria = $id_categoria;
            $this->carregar();
        }
    }
    

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
        $query = "select * from categoria";
        $conexao = Conexao::conectar();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }


    public function criar()
    {
        $query = "INSERT INTO  categoria (nome) VALUES (:nome)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome_categoria);
        $stmt->execute();
    }

    public function deletar()
    {
        $query = "DELETE FROM categoria WHERE id_categoria = :id_categoria";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id_categoria', $this->id_categoria);
        $stmt->execute();
    }
}
