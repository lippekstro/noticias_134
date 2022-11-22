<?php
require_once 'conexao.php';
require_once 'postagem.php';

$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];
$id_categoria = $_POST['id_categoria'];
$id_postagem = $_POST['id_postagem'];

try {
    $postagem = new Postagem($id_postagem);
    $postagem->titulo = $titulo;
    $postagem->conteudo = $conteudo;
    $postagem->id_categoria = $id_categoria;

    $postagem->editar_postagem();
    
    //setcookie("atualizado", true);
    header("location: index.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}
