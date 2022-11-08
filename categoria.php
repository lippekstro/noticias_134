<?php


class Categoria {
    public $nome_categoria;
    public $id_categoria;

}
   
public function DELETAR(){
    $query = "DELETE FROM categoria WHERE id_categoria = :id_categoria";
    $conexao = Conexao::conectar();
    $stmt = $conexao->prepare($query);
    $stmt->binValue(':id_categoria' , $this->id_pessoa);
    $stmt->execute();

}





public function INSERIR(){
    $query = "INSERT INTO categoria (nome_categoria, id_categoria)
    VALUES (:nome, :id)";
    $conexao = Conexao::conectar();
    $stmt = $conexao->prepare($query);
    $stmt->bindValue(':nome', $this->nome_categoria);
    $stmt->bindValue(':idade', $this->id_categoria);
    $stmt->execute();


}
   