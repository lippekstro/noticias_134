<?php
require_once 'usuario.php';
require_once 'conexao';
require_once 'categoria';
require_once 'postagem.php';

$id_categoria = $_POST('id_categoria');
$nome_categoria = $_POST('nome_categoria');

try {
    $categoria = new Categoria($id_categoria);
    $categoria->nome_categoria = $nome_categoria;
    $categoria->id_categoria = $id_categoria;

    $categoria->editar();

    setcookie("atualizado", true);
    header("location: index.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}
