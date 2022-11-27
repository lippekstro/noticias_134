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
    
    setcookie("msg", "Postagem Atualizada");
    setcookie("EDITAR", true);
    header("location: gerenciamento_post.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}
