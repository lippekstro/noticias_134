<?php
require_once 'usuario.php';
require_once 'conexao.php';


try {
    $id_usuario = $_GET['id_usuario'];

    $nome = new usuario($id_usuario); 
    $nome->deletar();

    setcookie("msg", "Usuario Deletado");
    setcookie("DELETAR", true);
    header("Location: gerencia_usuario.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}
