<?php
require_once "cabecalho.php";
?>
<div id="flex">
    <div id="cadastro">
        <form action="">
            <fieldset id="flex">
                <span class="material-symbols-outlined" id="fontcad">person</span>

                <div>
                    <label for="nome">NOME</label>
                    <input type="text" id="Nome" name="Nome">
                </div>


                <div>
                    <label for="e-mail">E-MAIL</label>
                    <input type="text" id="E-MAIL" name="E-MAIL">
                </div>


                <div>
                    <label for="senha">SENHA</label>
                    <input type="password" id="Senha" name="Senha">
                </div>

                <div>
                    <button id="btn" type="submit">cadastre-se</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>

</body>

</html>