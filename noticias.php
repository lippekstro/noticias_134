<?php
require_once "cabecalho.php";
require_once "postagem.php";
$nome_categoria = $_GET['cat'];

try {
    $postagem = new Postagem();
    $lista = $postagem->listarPorCategoria($_GET['id_categoria']);
} catch (Exception $e) {
    echo $e->getMessage();
}


?>
<div class="titulo_noticia_categoria">   <h1>
    <?= $nome_categoria ?>
    </h1>
</div>
 
    <div class="flex">
        <?php foreach ($lista as $item) : ?>
        <div class="card">
            <a href="post_exibicao.php?id_postagem=#">
                <img src="https://source.unsplash.com/random?landscape,mountain" alt="Noticia">
                <div class="container">
                    <h4><b><?= $item['nome_cateoria']?></b></h4>
                    <p><?= $item['conteudo'] ?></p>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>

    <?php
        require_once "rodape.php";
    ?>