<?php
require_once "cabecalho.php";
require_once "postagem.php";
require_once "conexao.php";

try {
    $postagem = new Postagem();
    $lista = $postagem->listar();
}  catch (Exception $e) {
    Echo $e->getMessage();
}

?>

<div class="container-carrosel">
    <div class="slide">
        <div class="slides"><img src="https://source.unsplash.com/random?landscape,mountain" /></div>
        <div class="slides"><img src="https://source.unsplash.com/random?landscape,night" /></div>
        <div class="slides"><img src="https://source.unsplash.com/random?landscape,city" /></div>

        <button class="btn btn_direita"><span>&rArr;</span></button>
        <button class="btn btn_esquerda"><span>&lArr;</span></button>
    </div>
</div>

<div class="container-noticias">
    <h1>Ultimas Notícias</h1>


<div class="flex">
    <?php foreach ($lista as $item): ?>
    <div class="card">
        <a href="post_exibicao.php?id_post=<?= $item['id_post']?>">
            <img src="https://source.unsplash.com/random?landscape,mountain" alt="Noticia">
            <div class="container">
                <h4><b><?= $item['titulo'] ?></b></h4>
                <p><?= $item['conteudo']?></p>
            </div>
        </a>
    </div>
    <?php endforeach; ?>
</div>

<?php 
require_once "rodape.php";

?>
