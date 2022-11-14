<?php

class Usuario
{
    public $nome;
    public $email;
    public $senha;
    public $id_usuario;
    public $nivel_acesso;

    

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
        $query = "UPDATE usuario SET nome = :nome, email = :email, senha = :senha WHERE id_usuario = :id_usuario";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":nome", $this->nome);
        $stmt->bindValue(":email", $this->email);
        $stmt->bindValue(":senha", $this->senha);
    }

    public function editar_admin()
    {
        $query = "UPDATE usuario SET nome = :nome, email = :email, senha = :senha, nivel_acesso = :nivel_acesso WHERE id_usuario = :id_usuario";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":nome", $this->nome);
        $stmt->bindValue(":email", $this->email);
        $stmt->bindValue(":senha", $this->senha);
        $stmt->bindValue(":nivel_acesso", $this->nivel_acesso);
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

    public function listar()
    {
        $query = "SELECT * FROM usuario";
        $conexao = conexao::conectar();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }
}
