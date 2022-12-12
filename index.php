<?php
require_once "cabecalho.php";
require_once "postagem.php";

try {
    $postagem = new Postagem();
    $lista = $postagem->listar();
} catch (Exception $e) {
    echo $e->getMessage();
}

try {
    $imgs = Postagem::listarPorData();
} catch (Exception $e) {
    echo $e->getMessage();
}

?>

<div class="container-carrosel">
    <div class="slide">
        <?php foreach ($imgs as $imagem) : ?>
            <div class="slides">
                <a href="post_exibicao.php?id_post=<?= $imagem['id_post'] ?>">
                    <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($imagem['imagem']); ?>" />
                    <h4 class="texto-carrossel"><?= $imagem['titulo'] ?></h4>
                </a>
            </div>
        <?php endforeach; ?>

     
        <button class="btn btn_direita"><span>&raquo;</span></button>
        <button class="btn btn_esquerda"><span>&laquo;</span></button>
    </div>
</div>

<div class="container-noticias">
    <h1>Últimas Notícias</h1>

    <div class="flex flex-wrap">
        <?php foreach ($lista as $item) : ?>
            <div class="card">
                <a href="post_exibicao.php?id_post=<?= $item['id_post'] ?>">
                    <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($item['imagem']); ?>" alt="Noticia">
                    <div class="container">
                        <h4><b><?= $item['titulo'] ?></b></h4>
                        <?php
                        $conteudo = $item['conteudo'];
                        $texto_quebrado = explode(".", nl2br($conteudo));
                        $parag_card = explode(" ", $texto_quebrado[0]);
                        if (count($parag_card) > 25) {
                            for ($i=1; $i<26; $i++){
                                $parag_card[0] .= " " . $parag_card[$i];
                            }
                        } else {
                            for ($i=1; $i<count($parag_card); $i++){
                                $parag_card[0] .= " " . $parag_card[$i];
                            }
                        }
                        ?>
                        <p><?= $parag_card[0] ?></p>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
require_once "rodape.php";
?>