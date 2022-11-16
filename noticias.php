<?php
require_once "cabecalho.php";
$nome_categoria = $_GET['cat'];


?>
<div class="titulo_noticia_categoria">   <h1>
    <?= $nome_categoria ?>
    </h1>
</div>
 
    <div class="flex">
        <div class="card">
            <a href="post_exibicao.php?id_postagem=#">
                <img src="https://source.unsplash.com/random?landscape,mountain" alt="Noticia">
                <div class="container">
                    <h4><b>ESPORTES</b></h4>
                    <p>Notícia</p>
                </div>
            </a>
        </div>
    </div>

    <?php
        require_once "rodape.php";
    ?>