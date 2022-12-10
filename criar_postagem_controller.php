<?php

require_once 'postagem.php';
require_once 'conexao.php';
session_start();


try{
    $postagem = new Postagem();

    $titulo = htmlspecialchars($_POST['titulo']);
    $conteudo = htmlspecialchars($_POST['conteudo']);
    $id_autor = $_SESSION['usuario']['id_usuario'];
    $id_categoria = $_POST['id_categoria'];
    if (!empty($_FILES['imagem']['tmp_name'])){
        $imagem = file_get_contents($_FILES['imagem']['tmp_name']);
    }
    
    $postagem->titulo= $titulo;
    $postagem->conteudo = $conteudo;
    $postagem->imagem = $imagem;
    $postagem->id_usuario  = $id_autor;
    $postagem->id_categoria = $id_categoria;
    
    $postagem->inserir();

  
    setcookie("msg", "Nova Postagem Publicada");
    setcookie("CRIAR", true);

    header('Location: gerenciamento_post.php');

}catch(Exception $e){
    echo $e->getMessage();
    
    
}
