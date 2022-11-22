<?php
require_once "cabecalho.php";
?>

<div id="flex">
    <div id="login">
        <form action="">
            <fieldset id="flex">
                <span class="material-symbols-outlined" id="fontcad">person</span>
                <div>
                    <label for="nome">Email</label>
                    <input type="name" id="name" name="name" value="" placeholder="seu email" autofocus>

                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" value="" placeholder="Digite sua Senha">

                    <button id="btn" type="submit">Confirma</button>
                    <p>Ainda não tem uma conta?</p>
                    <a href="cadastro.php">Criar conta</a>
                </div>
            </fieldset>
        </form>
    </div>
</div>
</body>

</html>