<?php
require_once "cabecalho.php";
require_once "categoria.php";

if (!isset($_SESSION['usuario'])) {
    header('location: index.php');
}

if (isset($_SESSION['usuario']) && $_SESSION['usuario']['nivel_acesso'] < 3) {
    header('location: index.php');
}

if (isset($_GET["busca"])) {
    try {
        $lista = Categoria::listarPorNome($_GET["busca"]);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} else {
    try {
        $lista = Categoria::listar();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

?>

<div class="flex flex-coluna">
    <div class="flex-centralizado">
        <h1>Gerenciamento de Categorias</h1>
        <form action="gerenciar_cat.php">
            <div class="container-busca">
                <input type="search" name="busca" id="busca" class="campos-busca">
                <button type="submit">
                    <img class="icone-preto icone-pequeno" src="img/lupa.png" alt="lupa de pesquisa">
                </button>
            </div>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th colspan="2">
                    <a href="criar_categoria.php">
                        <img class="icone-pequeno icone-verde" src="img/add.png" alt="adicionar">
                    </a>
                </th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($lista as $categoria) : ?>
                <tr>
                    <td><?= $categoria['nome'] ?></td>
                    <td>
                        <a href="edicao_categoria.php?id_categoria=<?= $categoria['id_categoria'] ?>">
                            <img class="icone-pequeno icone-azul" src="img/editar.png" alt="editar">
                        </a>
                    </td>
                    <td>
                        <a href="delete_categoria_controller.php?id_categoria=<?= $categoria['id_categoria'] ?>">
                            <img class="icone-pequeno icone-vermelho" src="img/deletar.png" alt="deletar">
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
require_once "rodape.php";
?>