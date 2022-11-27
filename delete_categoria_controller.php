<?php
require_once 'categoria.php';
require_once 'conexao.php';

try{
    $id_categoria = $_GET['id_categoria'];

    $nome_categoria = new Categoria($id_categoria);

    $nome_categoria->deletar();

    setcookie("msg", "Categoria Deletada");
    setcookie("DELETAR", true);
    header('Location: gerenciar_cat.php');
}catch(Exception $e){
    echo $e->getMessage();

}
