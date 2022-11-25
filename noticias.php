<?php
require_once "cabecalho.php";
require_once "postagem.php";


if (isset($_GET['busca'])) {
    try {
        $lista = Postagem::listarPorPalavra($_GET['busca']);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} else {
    $nome_categoria = $_GET['cat'];
    try {
        $postagem = new Postagem();
        $lista = $postagem->listarPorCategoria($_GET['id_categoria']);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}


?>
<div class="titulo_noticia_categoria">
    <?php 
    if (isset($_GET['busca'])) : 
        ?>
        <h1>
            Resultados da busca pelo termo: <?= $_GET['busca'] ?>
        </h1>
        <?php 
        else:
        ?>
    <h1>
        <?= $nome_categoria ?>
    </h1>
    <?php endif; ?>
</div>

<div class="flex flex-wrap">
    <?php foreach ($lista as $item) : ?>
        <div class="card">
            <a href="post_exibicao.php?id_post=<?= $item['id_post'] ?>">
                <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($item['imagem']); ?>" alt="Noticia">
                <div class="container">
                    <h4><b><?= $item['nome_categoria'] ?></b></h4>
                    <?php
                    $conteudo = $item['conteudo'];
                    $texto_quebrado = explode(".", nl2br($conteudo));
                    ?>
                    <p><?= $texto_quebrado[0] ?></p>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>

<?php
require_once "rodape.php";
?>