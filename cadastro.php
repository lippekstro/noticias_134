<?php
require_once "cabecalho.php";
?>
<div id="flex">
    <div id="cadastro">
        <form action="criar_usuario_controller.php" method="POST">
            <fieldset id="flex">
                <span class="material-symbols-outlined" id="fontcad">person</span>

                <div>
                    <label for="nome">NOME</label>
                    <input type="text" id="nome" name="nome">
                </div>


                <div>
                    <label for="email">E-MAIL</label>
                    <input type="text" id="email" name="email">
                </div>


                <div>
                    <label for="senha">SENHA</label>
                    <input type="password" id="senha" name="senha">
                </div>

                <div>
                    <button id="btn" type="submit">cadastre-se</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>

<?php
require_once "rodape.php";
?>
