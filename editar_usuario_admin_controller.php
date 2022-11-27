<?php
require_once 'usuario.php';
require_once 'conexao.php';

try {
    $nome = $_POST['nome'];
    $email = $_POST["email"];
    $nivel_acesso = $_POST["nivel_acesso"];
    $id_usuario = $_POST["id_usuario"];

    $usuario = new Usuario($id_usuario);
    $usuario->nome = $nome;
    $usuario->email = $email;
    $usuario->nivel_acesso = $nivel_acesso;

    $usuario->editar_admin();

    setcookie("msg", "Usuario Atualizado");
    setcookie("EDITAR", true);
    header("Location: gerencia_usuario.php");
} catch (Exception $e) {
    echo $e->getMessage();
}
