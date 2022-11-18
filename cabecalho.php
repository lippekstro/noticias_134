<?php
require_once 'categoria.php';
require_once 'conexao.php';

try {
    $lista_categorias = Categoria::listar();
} catch (Exception $e) {
    echo $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cabecalho.css">
    <link rel="stylesheet" href="css/cards.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/gerenc_post.css">
    <link rel="stylesheet" href="css/gerenc_cat.css">
    <link rel="stylesheet" href="css/carrosel.css">
    <link rel="stylesheet" href="css/rodape.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="css/edicao_categoria.css">
    <title>Noticias 134</title>
</head>

<body>
    <header>
        <div class="navbar">
            <div class="container-barra">
                <div>
                    <a href="index.php"><img id="container-logo" src="img/logo-removebg-preview.png" alt=""></a>
                </div>

                <div>
                    <div class="conteiner-search">
                        <form id="pesquisa" action="">
                            <div class="conteiner-form-input-btn">
                                <input size="40" type="search" name="busca" id="busca">
                                <button type="submit"><span class="material-symbols-outlined">search</span></button>
                            </div>
                        </form>

                        <div class="dropdown">
                            <a href="login.php"><span id="account_circle" class="material-symbols-outlined">account_circle</span></a>
                            <div class="dropdown-content">
                                <ul id="menu-login-icone">
                                    <li><a href="">Editar perfil</a></li>
                                    <li><a href="gerenciar_cat.php">GER. categorias</a></li>
                                    <li><a href="gerencia_usuario.php">GER. usuário</a></li>
                                    <li><a href="gerenciamento_post.php">GER. postagem</a></li>
                                    <li><a href="">Sair</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-menu-global">
                <ul class="menu-global">
                    <li><a href="index.php">Início</a></li>
                    <div class="dropdown">
                        <li>Categoria</li>
                        <div class="dropdown-content">
                            <ul id="links-global">
                                <?php foreach ($lista_categorias as $categoria) : ?>
                                    <li><a href="noticias.php?cat=<?= $categoria['nome'] ?>&id_categoria=<?= $categoria['id_categoria'] ?>"><?= $categoria['nome'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <li><a href="sobre.php">Sobre nós</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>