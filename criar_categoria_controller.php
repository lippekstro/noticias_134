<?php
require_once 'categoria.php';
require_once 'conexao.php';


try {
    $nome_categoria = htmlspecialchars($_POST['nome']);

    $categoria = new Categoria();
    $categoria->nome_categoria = $nome_categoria;
    $categoria->criar();

    setcookie("msg", "Categoria Criada com Sucesso");
    setcookie("CRIAR", true);
    header("Location: gerenciar_cat.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}
