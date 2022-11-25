<?php

class Usuario
{
    public $nome;
    public $email;
    public $senha;
    public $id_usuario;
    public $nivel_acesso;

    public function __construct($id_usuario = false)
    {
        if ($id_usuario) {
            $this->id_usuario = $id_usuario;
            $this->carregar();
        }
    }

    public function carregar()
    {
        $query = "SELECT nome, email, senha, nivel_acesso FROM usuario WHERE id_usuario = :id_usuario";
        $conexao = conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id_usuario', $this->id_usuario);
        $stmt->execute();

        $lista = $stmt->fetch();

        $this->nome = $lista['nome'];
        $this->email = $lista['email'];
        $this->senha = $lista['senha'];
        $this->nivel_acesso = $lista['nivel_acesso'];
    }

    public function deletar()
    {
        $query = "DELETE FROM usuario WHERE id_usuario=:id_usuario";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":id_usuario", $this->id_usuario);
        $stmt->execute();
    }

    public function editar_usuario()
    {
        $query = "UPDATE usuario SET nome = :nome, email = :email WHERE id_usuario = :id_usuario";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":nome", $this->nome);
        $stmt->bindValue(":email", $this->email);
        $stmt->bindValue(":id_usuario", $this->id_usuario);
        $stmt->execute();
    }

    public function editar_admin()
    {
        $query = "UPDATE usuario SET nome = :nome, email = :email, nivel_acesso = :nivel_acesso WHERE id_usuario = :id_usuario";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":nome", $this->nome);
        $stmt->bindValue(":email", $this->email);
        $stmt->bindValue(":nivel_acesso", $this->nivel_acesso);
        $stmt->bindValue(":id_usuario", $this->id_usuario);
        $stmt->execute();
    }

    public function criar()
    {
        $query = "INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':senha', $this->senha);

        $stmt->execute();
    }

    public static function listar()
    {
        $query = "SELECT * FROM usuario";
        $conexao = conexao::conectar();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public static function listarPorUsuario($palavra)
    {
        $palavra = "%" . $palavra . "%";
        $query = "select * from usuario where nome like :palavra";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":palavra", $palavra);
        $stmt->execute();
        $lista = $stmt->fetchAll();
        return $lista;
    }
}
