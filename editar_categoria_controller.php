<?php
require_once 'usuario.php';
require_once 'conexao.php';
require_once 'categoria.php';
require_once 'postagem.php';

$id_categoria = $_POST['id_categoria'];
$nome_categoria = $_POST['categoria'];

try {
    $categoria = new Categoria($id_categoria);
    $categoria->nome_categoria = $nome_categoria;
    
    $categoria->editar();

    //setcookie("atualizado", true);
    header("location: index.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}
