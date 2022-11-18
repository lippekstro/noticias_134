<?php
require_once "cabecalho.php";
require_once "usuario.php";

try {
    $lista = Usuario::listar();
} catch (Exception $e) {
    echo $e->getMessage();
}

?>
<div id="exibe">
    <div class="flex-container space-between" id="topo">
        <div id="campo_pesquisa">
            <form action="" class="flex-usuario">
                <input type="search" name="busca" id="busca">
                <button type="submit" id="lupa">
                    <span class="material-symbols-sharp">search</span>
                </button>
            </form>
        </div>
    </div>

    <div class="lista-dados">
        <table class="table table-hover" style="width: 80vw; margin: auto;">
            <thead>
                <tr style="color: rgb(255, 255, 255);">
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Nivel de Acesso</th>
                    <th colspan="2"><a href="criar_usuario.php">ADICIONE</a></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($lista as $usuario) : ?>
                    <tr>
                        <td><?= $usuario['nome'] ?></td>
                        <td><?= $usuario['email'] ?></td>
                        <td><?= $usuario['nivel_acesso'] ?></td>

                        <td><a href="edita_usuario_admin.php?id_usuario=<?= $usuario['id_usuario'] ?>"><span class="material-symbols-outlined" id="btn-edit">edit</span></a></td>
                        <td><a href="delete_usuario_controller.php?id_usuario=<?= $usuario['id_usuario'] ?>"><span class="material-symbols-outlined" id="btn-delete">delete_forever</span></a></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>

<?php
require_once 'rodape.php';
?>