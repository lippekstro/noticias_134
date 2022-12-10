<?php
require_once 'usuario.php';
require_once 'conexao.php';

try {
    $usuario = new usuario();

    $nome = htmlspecialchars($_POST['nome']);
    $senha = $_POST['senha'];
    $email = htmlspecialchars($_POST['email']);
    $senha = password_hash($senha, PASSWORD_DEFAULT);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $usuario->nome = $nome;
        $usuario->senha = $senha;
        $usuario->email = $email;

        $usuario->criar();

        setcookie("msg", "Usuario Cadastrado com Sucesso");
        setcookie("CRIAR", true);
        header("Location: gerencia_usuario.php");
    } else {
        setcookie("msg", "ERRO");
        setcookie("CRIAR", true);
        header("Location: gerencia_usuario.php");
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
