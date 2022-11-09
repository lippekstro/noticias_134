<?php
require_once 'categoria.php';
require_once 'conexao.php';

try{
    $id_categoria = $_GET['id_categoria'];

    $nome_categoria = new Categoria($id_categoria);

    $nome_categoria->deletar();

    
    header('Location: index.php');
}catch(Exception $e){
    echo $e->getMessage();

}


?>