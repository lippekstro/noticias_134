<?php

class Postagem
{
    public $id_post;
    public $titulo;
    public $conteudo;
    public $imagem;
    public $id_autor;
    public $id_categoria;
    public $date;

    public function inserir()
    {
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




    public function editar_postagem()
    {
        $query = "update postagem set titulo = :titulo, conteudo = :conteudo, imagem = :imagem, id_autor = :id_autor, id_categoria = :id_categoria, date = :date, id_postagem = :id_postagem";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':titulo', $this->titulo);
        $stmt->bindValue(':conteudo', $this->conteudo);
        $stmt->bindValue(':imagem', $this->imagem);
        $stmt->bindValue(':id_autor', $this->id_autor);
        $stmt->bindValue(':id_categoria', $this->id_categoria);
        $stmt->bindValue(':date', $this->date);
        $stmt->bindValue(':id_postagem', $this->id_postagem);

        $stmt->execute();
    }

    public static function listar()
    {
        $query = "select titulo, nome_categoria, date";

        $conexao = Conexao::conectar();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }
}
