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

<div id="flex">
    <form action="editar_categoria_controller.php" method="POST">
        <input type="hidden" name="id_categoria" value="<?= $categoria->id_categoria ?>">
        <div id="nome">
            <label for="">Nome da Categoria</label>
            <input type="text" id="categoria" name="categoria" value="<?= $categoria->nome_categoria ?>">
        </div>
        <div>
            <button id="btn" type="submit">Alterar</button>
        </div>
    </form>
</div>

<?php
require_once "rodape.php";
?>