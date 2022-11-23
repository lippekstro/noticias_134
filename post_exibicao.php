<?php
require_once "cabecalho.php";
require_once "postagem.php";

try {
    $id_post = $_GET['id_post'];
    $postagem = new postagem();
    $lista = $postagem->listarPorid($id_post);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<?php foreach ($lista as $noticia) : ?>
    <div id="noticia-aberta">
        <div id="noticia-aberta-cabecalho">
            <h1><?= $noticia['titulo'] ?></h3>
            <h3>Por <?= $noticia['nome_autor'] ?></h3>
            <span><?= $noticia['data_pub'] ?></span>
            <hr>
        </div>

        <div id="noticia-aberta-container-imagem">
            <img id="img_post" src="data:image/jpg;charset=utf8;base64,<?= base64_encode($noticia['imagem']); ?>" alt="">
        </div>

        <div id="noticia-aberta-container-conteudo">
            <?php 
            $conteudo = $noticia['conteudo']; 
            $texto_quebrado = explode("<br />", nl2br($conteudo));
            foreach ($texto_quebrado as $paragrafo):
            ?>
            <p><?= $paragrafo ?></p>
            <?php endforeach; ?>
        </div>
    </div>
<?php endforeach; ?>


<?php
require_once "rodape.php";
?>