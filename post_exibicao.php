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

<div style="display: flex;" id="centro">
    <?php foreach ($lista as $noticia) : ?>
        <div class="post">
            <div style="width: 60vw; margin: auto; text-align: justify;">
                <h3 style="margin: 1.5 0; font-size:36px; text-align: justify;"><?= $noticia['titulo'] ?></h3>

                <h3 style="color: black; font-size:19px; margin-top: 20px ;">Por <?= $noticia['nome_autor'] ?></h3>
                <p style="margin-bottom: 20px;"><?= $noticia['data_pub'] ?></p>
                <hr><br>
            </div>

            <div style="width: 50vw; margin: auto; padding-top: 1cm;">
                <img id="img_post" src="data:image/jpg;charset=utf8;base64,<?= base64_encode($noticia['imagem']); ?>" alt="">
                <p class="text_post" style="text-align: justify; margin: 2cm;"><?= $noticia['conteudo'] ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php
require_once "rodape.php";
?>