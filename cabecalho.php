<?php
require_once 'categoria.php';
require_once 'conexao.php';
session_start();

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
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cabecalho.css">
    <link rel="stylesheet" href="css/cards.css">
    <link rel="stylesheet" href="css/carrosel.css">
    <link rel="stylesheet" href="css/rodape.css">
    <link rel="stylesheet" href="css/tables.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/noticia_aberta.css">
    <link rel="stylesheet" href="css/sobre.css">
    <link rel="stylesheet" href="css/toast.css">
    <title>Global News</title>
</head>

<body id="corpo">
    <header>
        <div class="navbar">
            <div class="container-barra">
                <div class="container-logo-div">
                    <a href="index.php">
                        <img id="container-logo" src="img/globallogo.png" alt="">
                    </a>
                </div>

                <div>
                    <div class="conteiner-search">
                        <form id="pesquisa" action="noticias.php">
                            <div class="conteiner-form-input-btn">
                                <input size="40" type="search" name="busca" id="busca" class="campos-busca">
                                <button type="submit">
                                    <img class="icone-branco icone-pequeno" src="img/lupa.png" alt="lupa de pesquisa">
                                </button>
                            </div>
                        </form>

                        <div class="dropdown">
                            <?php if (!isset($_SESSION['usuario'])) : ?>
                                <a href="login.php">
                                    <img class="icone-branco icone-pequeno" src="img/conta_circulo.png" alt="">
                                </a>
                            <?php else : ?>
                                <div style="display: flex; align-items: center;">
                                    <span style="color: white;">Olá, <?= $_SESSION['usuario']['nome'] ?></span>
                                    <img class="icone-branco icone-pequeno" src="img/pessoa.png" alt="">
                                </div>
                            <?php endif; ?>
                            <?php if (isset($_SESSION['usuario'])) : ?>
                                <div class="dropdown-content">
                                    <ul id="menu-login-icone">
                                        <li><a href="edita_usuario.php">Editar Perfil</a></li>
                                        <?php if ($_SESSION['usuario']['nivel_acesso'] >= 2) : ?>
                                            <li><a href="gerenciamento_post.php">GER. Postagem</a></li>
                                        <?php endif; ?>
                                        <?php if ($_SESSION['usuario']['nivel_acesso'] >= 3) : ?>
                                            <li><a href="gerenciar_cat.php">GER. Categorias</a></li>
                                            <li><a href="gerencia_usuario.php">GER. Usuário</a></li>
                                        <?php endif; ?>
                                        <li><a href="logout.php">Sair</a></li>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-menu-global">
                <ul class="menu-global">
                    <li><a href="index.php">Início</a></li>
                    <div class="dropdown">
                        <li>Notícias</li>
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
        <div id="toast"></div>