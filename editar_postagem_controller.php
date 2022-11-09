<?php

require_once 'usuario.php';
require_once 'conexao.php';
require_once 'categoria.php';
require_once 'postagem.php';

$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];
$imagem = $_POST['imagem'];
$id_autor = $_POST['id_autor'];
$id_categoria = $_POST['id_categoria'];
$data = $_POST['data'];
$id_postagem = $_POST['id_postagem'];

try {
    $postagem = new Postagem($id_postagem);
    $postagem->titulo = $titulo;
    $postagem->conteudo = $conteudo;
    $postagem->imagem = $imagem;
    $postagem->id_autor = $id_autor;
    $postagem->id_categoria = $id_categoria;
    $postagem->data = $data;

    $usuario->atualizar();
    
    setcookie("atualizado", true);
    header("location: index.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>