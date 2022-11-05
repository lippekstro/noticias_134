<?php 

class Usuario{
    public $nome;
    public $email;
    public $senha;
    public $id_usuario;
    public $nivel_acesso;

}

public function deletar(){
    $query = "DELETE FROM usuario WHERE id_usuario=:id_usuario";
    $conexao = Conexao::conectar();
    $stmt = $conexao->prepare($query);
    $stmt->bindValue(":id_usuario", $this->id_usuario);
    $stmt->execute();
}
public function editar(){
    $query = "UPDATE usuario SET nome = :nome, email = :email, senha = :senha WHERE id_usuario = :id_usuario";
}