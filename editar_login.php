<?php
require_once "cabecalho.php";
?>

<div id="flex">
    <div id="login">
        <form action="">
            <fieldset id="flex">
                <span id="fontcad">Editar perfil</span>
                <div>
                    <label for="nome">Email</label>
                    <input type="name" id="name" name="name" value="" placeholder="Editar email" autofocus>

                    <label for="nome">Nome</label>
                    <input type="name" id="name" name="name" value="" placeholder="Editar Nome">

                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" value="" placeholder="Trocar senha">

                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" value="" placeholder="Tonfirma senha">

                    <label for="nome">Nivel</label>
                    <input type="number" id="name" name="name" value="" placeholder="Nivel">

                    <button id="btn" type="submit">Confirma</button>

                </div>

            </fieldset>
        </form>
    </div>
</div>

<?php
require_once "rodape.php";
?>