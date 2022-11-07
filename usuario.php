<?php 

class Usuario{
    public $nome;
    public $email;
    public $senha;
    public $id_usuario;
    public $nivel_acesso;

    public function criar() {
        $query = "INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue (':nome', $this->nome);
        $stmt->bindValue (':email', $this->email);
        $stmt->bindValue (':senha', $this->senha);

        $stmt->execute();
        
    }

}