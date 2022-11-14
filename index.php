<?php
require_once "cabecalho.php";
?>

<div class="container-carrosel">
    <div class="slide">
        <div class="slides"><img src="https://source.unsplash.com/random?landscape,mountain" /></div>
        <div class="slides"><img src="https://source.unsplash.com/random?landscape,night" /></div>
        <div class="slides"><img src="https://source.unsplash.com/random?landscape,city" /></div>

        <button class="btn btn_direita">&rArr;</button>
        <button class="btn btn_esquerda">&lArr;</button>
    </div>
</div>

<h1 class="h1">Ultimas Notícias</h1>


<div class="flex">
    <div class="card" style="width: 13%">
        <a href="post_exibicao.php?id_postagem=#">
            <img src="https://source.unsplash.com/random?landscape,mountain" alt="Noticia">
            <div class="container">
                <h4><b>TÍTULO</b></h4>
                <p>Notícia</p>
            </div>
        </a>
    </div>
</div>
</main>

<script src="js/carrosel.js"></script>
</body>

</html>