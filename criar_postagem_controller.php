<?php

require_once 'postagem.php';
require_once 'usuario.php';
require_once 'conexao.php';


try{
    $postagem = new Postagem();
    $id_post= $_POST['id_post'];
    $titulo = $_POST['itulo'];
    $conteudo = $_POST['conteudo'];
    $imagem= $_POST['imagem'];
    $id_autor = $_POST['id_autor'];
    $id_categoria = $_POST['id_categoria'];
    $data= $_POST['data'];
    if (!empty($_FILES['imagem']['imagem'])){
        $imagem = file_get_contents($_FILES['imagem']['imagem']);
    }
    
    $postagem->id_post = $id_post;
    $postagem->titulo= $titulo;
    $postagem->conteudo = $conteudo;
    $postagem->imagem = $imagem;
    $postagem->id_autor  = $id_autor;
    $postagem->id_categoria = $id_categoria;
    $postagem->data = $data;
    
    $postagem->inserir();

  

    header('Location: index.php');

}catch(Exception $e){
    echo $e->getMessage();
    
    
}

?>
