<?php
require_once "cabecalho.php";
require_once "postagem.php";


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
?>
<div id="flex">
    <div id="gerenc">
        <h1 id="gp">Gerenciamento De Postagem</h1>
        <button id="btn-add"><a href="cadastrar_post.php"><span class="material-symbols-outlined">add</span></a></button>
        <table>
            <thead>
                <tr>
                    <th>Tiulo</th>
                    <th>Data</th>
                    <th>Autor</th>
                    <th>Editar</th>
                    <th>Deletar</th>
                </tr>
                <?php foreach ($lista as $postagem) : ?>
                    <tr>
                        <td><?= $postagem['titulo'] ?></td>
                        <td><?= $postagem['data_pub'] ?></td>
                        <td><?= $postagem['nome_autor'] ?></td>
                        <td><a href="editar_post.php?id_post=<?= $postagem['id_post'] ?>"><span class="material-symbols-outlined" id="btn_edit">edit</span></a></td>
                        <td><a href="delete_postagem_controller.php?id_post=<?= $postagem['id_post'] ?>"><span class="material-symbols-outlined" id="btn_delete">delete</span></a></td>
                    </tr>
                <?php endforeach ?>
            </thead>
        </table>
    </div>
</div>

<?php
require_once "rodape.php";
?>