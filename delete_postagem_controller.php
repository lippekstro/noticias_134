<?php
require_once 'postagem.php';
require_once 'conexao.php';

$id_post = $_GET['id_post'];


try {
    $post = new Postagem($id_post);
    $post->deletar();
    
    setcookie("msg", "Postagem Deletada");
    setcookie("DELETAR", true);
    header("Location: gerenciamento_post.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}
