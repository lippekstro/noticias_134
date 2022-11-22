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

<div id="flex">
    <div id="gerenciamento">
        <h1 id="categorias">Gerenciamento de Categoria</h1>
        <button id="btn-add"><a href="criar_categoria.php"><span class="material-symbols-outlined">add</span></a></button>
        <table class="tabela">
            <thead>
                <tr>
                    <th class="nome">Nome</th>
                    <th>Editar</th>
                    <th>Deletar</th>
                </tr>
                <?php foreach ($lista as $categoria) : ?>
                    <tr>
                        <td><?= $categoria['nome'] ?></td>
                        <td><a href="edicao_categoria.php?id_categoria=<?= $categoria['id_categoria'] ?>"><span class="material-symbols-outlined" id="btn_edit">edit</span></a></td>
                        <td><a href="delete_categoria_controller.php?id_categoria=<?= $categoria['id_categoria'] ?>"><span class="material-symbols-outlined" id="btn_delete">delete</span></a></td>
                    </tr>
                <?php endforeach; ?>
            </thead>
        </table>
    </div>
</div>

<?php
require_once "rodape.php";
?>