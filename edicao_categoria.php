<?php
require_once "cabecalho.php";
require_once "categoria.php";

try {
    $id_categoria = $_GET['id_categoria'];
    $categoria = new Categoria($id_categoria);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<div class="flex">
    <div class="card">
        <form action="editar_categoria_controller.php" method="post">
        <input type="hidden" name="id_categoria" value="<?= $categoria->id_categoria ?>">
            <div class="container-login">
                <div class="campo-login">
                    <label for="categoria">Nome</label>
                    <input type="text" id="categoria" name="categoria" value="<?= $categoria->nome_categoria ?>">
                </div>

                <div>
                    <button class="botao" type="submit">Alterar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
require_once "rodape.php";
?>