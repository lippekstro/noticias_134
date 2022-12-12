<?php
require_once "cabecalho.php";
require_once "postagem.php";

if (!isset($_SESSION['usuario'])) {
    header('location: index.php');
}

if (isset($_SESSION['usuario']) && $_SESSION['usuario']['nivel_acesso'] < 2) {
    header('location: index.php');
}

if (isset($_SESSION['usuario']) && $_SESSION['usuario']['nivel_acesso'] == 2) {
    try {
        $lista = Postagem::listarPorAutor($_SESSION['usuario']['id_usuario']);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} else {
    try {
        $lista = Postagem::listar();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

if (isset($_GET["busca"])) {

    if ($_SESSION['usuario']['nivel_acesso'] == 2) {
        try {
            $lista = Postagem::listarPorAutorPalavra($_SESSION['usuario']['id_usuario'], $_GET["busca"]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    } else {
        try {
            $lista = Postagem::listarPorPalavra($_GET["busca"]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

?>

<div class="flex flex-coluna">
    <div class="flex-centralizado">
        <h1>Gerenciamento de Postagem</h1>
        <form action="">
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
                <th>Título</th>
                <th>Data</th>
                <th>Autor</th>
                <th colspan="2">
                    <a href="cadastrar_post.php">
                        <img class="icone-pequeno icone-verde" src="img/add.png" alt="adicionar">
                    </a>
                </th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($lista as $postagem) : ?>
                <tr>
                    <td><?= $postagem['titulo'] ?></td>
                    <td><?= $postagem['data_pub'] ?></td>
                    <td><?= $postagem['nome_autor'] ?></td>
                    <td>
                        <a href="editar_post.php?id_post=<?= $postagem['id_post'] ?>">
                            <img class="icone-pequeno icone-azul" src="img/editar.png" alt="editar">
                        </a>
                    </td>
                    <td>
                        <a href="delete_postagem_controller.php?id_post=<?= $postagem['id_post'] ?>">
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