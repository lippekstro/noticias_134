<?php

class Postagem
{
    public $id_post;
    public $titulo;
    public $conteudo;
    public $imagem;
    public $id_usuario;
    public $id_categoria;
    public $data_pub;

    public function __construct($id_post = false)
    {
        if ($id_post) {
            $this->id_post = $id_post;
            $this->carregar();
        }
    }

    public function carregar()
    {
        $query = "SELECT titulo, conteudo, imagem, id_usuario, id_categoria, data_pub FROM Postagem where id_post = :id_post";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":id_post", $this->id_post);
        $stmt->execute();
        $lista = $stmt->fetch();
        $this->titulo = $lista['titulo'];
        $this->conteudo = $lista['conteudo'];
        $this->imagem = $lista['imagem'];
        $this->id_usuario = $lista['id_usuario'];
        $this->id_categoria = $lista['id_categoria'];
        $this->data_pub = $lista['data_pub'];
    }

    public function inserir()
    {
        $query = "INSERT INTO postagem (titulo, conteudo, imagem, id_usuario, id_categoria) VALUES (:titulo, :conteudo, :imagem, :id_usuario, :id_categoria)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':titulo', $this->titulo);
        $stmt->bindValue(':conteudo', $this->conteudo);
        $stmt->bindValue(':imagem', $this->imagem);
        $stmt->bindValue(':id_usuario', $this->id_usuario);
        $stmt->bindValue(':id_categoria', $this->id_categoria);
        $stmt->execute();
    }



    public function editar_postagem()
    {
        $query = "UPDATE postagem SET titulo = :titulo, conteudo = :conteudo, imagem = :imagem, id_usuario = :id_usuario, id_categoria = :id_categoria, data_pub = :data_pub WHERE id_post = :id_post";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':titulo', $this->titulo);
        $stmt->bindValue(':conteudo', $this->conteudo);
        $stmt->bindValue(':imagem', $this->imagem);
        $stmt->bindValue(':id_usuario', $this->id_usuario);
        $stmt->bindValue(':id_categoria', $this->id_categoria);
        $stmt->bindValue(':data_pub', $this->data_pub);
        $stmt->bindValue(':id_post', $this->id_post);

        $stmt->execute();
    }

    public static function listar()
    {
        $query = "SELECT id_post, titulo, conteudo, imagem, data_pub, id_usuario, id_categoria FROM postagem ";
        $conexao = Conexao::conectar();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }


    public function deletar()
    {
        $query = "DELETE FROM Postagem WHERE id_post=:id_post";
        //deleta pelo id
        $conexao = Conexao::conectar();
        // cria conexao
        $stmt = $conexao->prepare($query);
        // prepara a query
        $stmt->bindValue("id_post", $this->id_post);
        // vincula o valor
        $stmt->execute();
        // executa
    }
}
