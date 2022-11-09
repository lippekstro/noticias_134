<?php

class Postagem
{
    public $id_post;
    public $titulo;
    public $conteudo;
    public $imagem;
    public $id_autor;
    public $id_categoria;
    public $data_pub;

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
        $query = "UPDATE postagem SET titulo = :titulo, conteudo = :conteudo, imagem = :imagem, id_autor = :id_autor, id_categoria = :id_categoria, data_pub = :data_pub WHERE id_postagem = :id_postagem";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':titulo', $this->titulo);
        $stmt->bindValue(':conteudo', $this->conteudo);
        $stmt->bindValue(':imagem', $this->imagem);
        $stmt->bindValue(':id_autor', $this->id_autor);
        $stmt->bindValue(':id_categoria', $this->id_categoria);
        $stmt->bindValue(':data_pub', $this->data_pub);
        $stmt->bindValue(':id_postagem', $this->id_postagem);

        $stmt->execute();
    }

    public static function listar()
    {
        $query = "SELECT titulo, nome_categoria, conteudo, imagem, id_autor, id_categoria, data_pub, id_postagem FROM Postagem ";
        $conexao = Conexao::conectar();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }



    public function deletar()
    {
        $query = "DELETE FROM Postagem WHERE id_postagem=:id_postagem";
        //deleta pelo id
        $conexao = Conexao::conectar();
        // cria conexao
        $stmt = $conexao->prepare($query);
        // prepara a query
        $stmt->bindValue("id_postagem", $this->id_postagem);
        // vincula o valor
        $stmt->execute();
        // executa
    }
}
