<?php
require_once "cabecalho.php";
?>

<div class="flex">
    <div class="card">
        <form action="criar_categoria_controller.php" method="post">
            <div class="container-login">
                <div class="campo-login">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" autofocus>
                </div>

                <div>
                    <button class="botao" type="submit">Confirma</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
require_once "rodape.php";
?>