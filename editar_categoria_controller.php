<?php
require_once 'conexao.php';
require_once 'categoria.php';

$id_categoria = $_POST['id_categoria'];
$nome_categoria = $_POST['categoria'];

try {
    $categoria = new Categoria($id_categoria);
    $categoria->nome_categoria = $nome_categoria;

    $categoria->editar();

    setcookie("msg", "Categoria Editada");
    setcookie("EDITAR", true);
    header("location: gerenciar_cat.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}
