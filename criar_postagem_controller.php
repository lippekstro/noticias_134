<?php

require_once 'postagem.php';
require_once 'conexao.php';


try{
    $postagem = new Postagem();
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    //$id_autor = $_POST['id_autor'];
    $id_autor = 1;
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

  

    header('Location: index.php');

}catch(Exception $e){
    echo $e->getMessage();
    
    
}

?>
