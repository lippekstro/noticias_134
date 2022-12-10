<?php
require_once 'usuario.php';
require_once 'conexao.php';
session_start();

try {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST["email"]);
    $id_usuario = $_POST["id_usuario"];

    $usuario = new Usuario($id_usuario);
    $usuario->nome = $nome;
    $usuario->email = $email;

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $usuario->editar_usuario();

        $_SESSION['usuario']['nome'] = $nome;
        $_SESSION['usuario']['email'] = $email;

        setcookie("msg", "Usuario Atualizado");
        setcookie("EDITAR", true);
        header("Location: index.php");
    } else {
        setcookie("msg", "ERRO");
        header("Location: index.php");
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
