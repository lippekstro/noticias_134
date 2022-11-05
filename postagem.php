<?php

class Postagem{
    public $id_post;
    public $titulo;
    public $conteudo;
    public $imagem;
    public $id_autor;
    public $id_categoria;
    public $date;
}

public function inserir(){
    $query = "INSERT INTO postagem (titulo, conteudo, imagem, id_autor, id_categoria) VALUES (:titulo, :conteudo, :imagem, :id_autor, :id_categoria)"; 
    $conexao = Conexao::conectar();
    $stmt = $conexao->prepare($query);
    $stmt->bindValue(':titulo', $this->titulo);
    $stmt->bindValue(':conteudo', $this->conteudo);
    $stmt->bindValue(':imagem', $this->imagem);
    $stmt->bindValue(':id_autor', $this->id_autor);
    $stmt->bindValue(':id_categoria', $this->id_categoria);
    $stmt->execute();
}