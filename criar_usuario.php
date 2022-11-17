<?php
require_once "cabecalho.php";
?>

<div class="card-usuario">
    <div class="img-usuario">
        <img src="img/novo-usuario2.png" id="img-usuario">
    </div>
    <div class="criar-usuario">
        <form action="" method="post">
            <div class="label-usuario">
                <label for="nome">Nome: </label>
                <input type="text" id="nome" name="nome">
            </div>
            <div class="label-usuario">
                <label for="idade">Email: </label>
                <input type="text" id="email" name="email">
            </div>
            <div class="label-usuario">
                <label for="idade">Senha: </label>
                <input type="number" id="senha" name="senha">
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