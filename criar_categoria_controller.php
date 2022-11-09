<?php
require_once 'categoria.php';
require_once 'conexao.php';


try{
    $nome_categoria = $_POST['nome_categoria'];
    $categoria = new Categoria();
    $categoria->nome_categoria = $nome_categoria;
    $categoria->criar();
    
    setcookie("adicionar", true);
    header("Location: index.php");
}catch (PDOException $e) {
    echo $e->getMessage();
}
