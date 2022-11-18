<?php
require_once "cabecalho.php";
?>

<div class="card">
    <div class="criar-usuario">
        <h2 class="criar-cat">Criar uma nova Categoria</h2>

        <form action="#" method="post">
            <div class="label-usuario">
                <label for="nome"></label>
                <input type="text" id="categoria" name="nome">
            </div>

            <div>
                <input type="submit" value="CADASTRAR" id="bottom-cadastrar">
            </div>

        </form>
    </div>
</div>

<?php
require_once "rodape.php";
?>