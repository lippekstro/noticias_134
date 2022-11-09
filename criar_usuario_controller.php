<?php
require_once 'usuario.php';
require_once 'conexao.php';

try {
    $usuario = new usuario();
    
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];     

    $usuario->nome = $nome;
    $usuario->senha = $senha;
    $usuario->email = $email;

    $usuario->criar();

    header("Location: index.php");
} catch (Exception $e) {
    echo $e->getMessage();
}



?>