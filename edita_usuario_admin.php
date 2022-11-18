<?php
require_once "cabecalho.php";
require_once "usuario.php";

try {
    $id_usuario = $_GET['id_usuario'];
    $usuario = new Usuario($id_usuario);

}catch (Exception $e) {
    echo $e->getMessage();
}

?>

<div class="card-usuario">
    <div class="img-usuario">
        <img src="img/novo-usuario2.png" id="img-usuario">
    </div>
    <div class="criar-usuario">
        <form action="editar_usuario_admin_controller.php" method="post">
            <input type="hidden" name="is_usuario" value="<?= $usuario->id_usuario ?>">
            <div class="label-usuario">
                <label for="nome">Nome: </label>
                <input type="text" id="nome" name="nome" value="<?= $usuario->nome ?>">
            </div>
            <div class="label-usuario">
                <label for="email">Email: </label>
                <input type="text" id="email" name="email" value="<?= $usuario->email ?>">
            </div>
            <div class="label-usuario">
                <label for="nivel_acesso">Nivel de Acesso: </label>
                <input type="number" id="nivel_acesso" name="nivel_acesso" value="<?= $usuario->nivel_acesso ?>">
            </div>
            <div>
                <input type="submit" value="ATUALIZAR" id="bottom-cadastrar">
            </div>
        </form>
    </div>

</div>

<?php
require_once "rodape.php";
?>