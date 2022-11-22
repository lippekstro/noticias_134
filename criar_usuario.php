<?php
require_once "cabecalho.php";
?>

<div class="card-usuario">
    <div class="img-usuario">
        <img src="img/novo-usuario2.png" id="img-usuario">
    </div>
    <div class="criar-usuario">
        <form action="criar_usuario_controller.php" method="post">
            <div class="label-usuario">
                <label for="nome">Nome: </label>
                <input type="text" id="nome" name="nome">
            </div>
            <div class="label-usuario">
                <label for="email">Email: </label>
                <input type="text" id="email" name="email">
            </div>
            <div class="label-usuario">
                <label for="senha">Senha: </label>
                <input type="password" id="senha" name="senha">
            </div>
            <div>
                <input type="submit" value="CADASTRAR" id="botao_cadastrar">
            </div>
        </form>
    </div>

</div>

<?php
require_once "rodape.php";
?>