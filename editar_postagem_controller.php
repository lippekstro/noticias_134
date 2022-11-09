<?php

require_once 'usuario.php';
require_once 'conexao.php';

$nome_servidor = "localhost";
$usuario = "root";
$senha = "";
$nome_banco = "";

$id_usuario = $_POST['id_usuario'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

try {
    $usuario = new Usuario($id_usuario);
    $usuario->nome = $nome;
    $usuario->email = $email;
    $usuario->senha = $senha;

    $usuario->atualizar();
    
    setcookie("atualizado", true);
    header("location: index.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>