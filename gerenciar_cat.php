<?php
require_once "cabecalho.php";
require_once "categoria.php";

if(isset($_SESSION['usuario']) && $_SESSION['usuario']['nivel_acesso'] < 3){
    header('location: index.php');
}

try {
    $lista = Categoria::listar();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<div class="flex flex-coluna">
    <div class="flex-centralizado">
        <form action="">
            <div class="container-busca">
                <input type="search" name="busca" id="busca">
                <button type="submit">
                    <span class="material-symbols-outlined botao-busca">search</span>
                </button>
            </div>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th colspan="2"><a href="criar_usuario.php"><span class="material-symbols-outlined botao-add">add</span></a></th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($lista as $categoria) : ?>
                <tr>
                    <td><?= $categoria['nome'] ?></td>
                    <td><a href="edicao_categoria.php?id_categoria=<?= $categoria['id_categoria'] ?>"><span class="material-symbols-outlined botao-edit">edit</span></a></td>
                    <td><a href="delete_categoria_controller.php?id_categoria=<?= $categoria['id_categoria'] ?>"><span class="material-symbols-outlined botao-delete">delete_forever</span></a></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>

<?php
require_once "rodape.php";
?>