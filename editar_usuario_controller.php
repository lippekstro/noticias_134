<?php

require_once 'usuario.php';
require_once 'conexao.php';

try {
    $nome = $_POST['nome'];
    $email = $_POST["email"];
    $id_usuario = $_POST["id_usuario"];

    $usuario = new Usuario($id_usuario);
    $usuario->nome = $nome;
    $usuario->email = $email;

    $usuario->editar_usuario();

    header("Location: index.php");
} catch (Exception $e) {
    echo $e->getMessage();
}
