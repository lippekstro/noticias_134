<?php
require_once 'usuario.php';
require_once 'conexao.php';

try {
    $usuario = new usuario();
    
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];      
    $senha = password_hash($senha, PASSWORD_DEFAULT);

    $usuario->nome = $nome;
    $usuario->senha = $senha;
    $usuario->email = $email;

    $usuario->criar();

    header("Location: gerencia_usuario.php");
} catch (Exception $e) {
    echo $e->getMessage();
}
