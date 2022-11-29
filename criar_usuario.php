<?php
require_once "cabecalho.php";
?>

<div class="flex">
    <div class="card">
        <form action="criar_usuario_controller.php" method="post">
            <div class="container-login">
                <div class="container-icone-login">
                    <img class="icone-pequeno icone-preto" src="img/person_add.png" alt="">
                </div>

                <div class="campo-login">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" autofocus>
                </div>

                <div class="campo-login">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                </div>

                <div class="campo-login">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha">
                </div>

                <div>
                    <button class="botao" type="submit">CADASTRAR</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
require_once "rodape.php";
?>