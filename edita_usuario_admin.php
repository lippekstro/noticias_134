<?php
require_once "cabecalho.php";
require_once "usuario.php";

try {
    $id_usuario = $_GET['id_usuario'];
    $usuario = new Usuario($id_usuario);
} catch (Exception $e) {
    echo $e->getMessage();
}

?>

<div class="flex">
    <div class="card">
        <form action="editar_usuario_admin_controller.php" method="post">
            <div class="container-login">
                <input type="hidden" name="id_usuario" value="<?= $usuario->id_usuario ?>">

                <div class="container-icone-login">
                    <img class="icone-pequeno icone-preto" src="img/pessoa.png" alt="">
                </div>

                <div class="campo-login">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" value="<?= $usuario->nome ?>">
                </div>

                <div class="campo-login">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?= $usuario->email ?>">
                </div>

                <div class="campo-login">
                    <label for="nivel_acesso">Nivel de Acesso</label>
                    <input type="number" id="nivel_acesso" name="nivel_acesso" value="<?= $usuario->nivel_acesso ?>">
                </div>

                <div>
                    <button class="botao" type="submit">ATUALIZAR</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
require_once "rodape.php";
?>