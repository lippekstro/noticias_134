<?php
require_once "cabecalho.php";
require_once "usuario.php";

if(isset($_SESSION['usuario']) && $_SESSION['usuario']['nivel_acesso'] < 3){
    header('location: index.php');
}

try {
    $lista = Usuario::listar();
} catch (Exception $e) {
    echo $e->getMessage();
}

?>
<div id="exibe">
    <div class="flex-user espaço-entre" id="topo">
        <div id="campo_pesquisa">
            <form action="" class="flex-user">
                <input type="search" name="busca" id="busca">
                <button type="submit" id="lupa">
                    <span class="material-symbols-outlined">search</span>
                </button>
            </form>
        </div>
    </div>

    <div class="lista-dados">
        <table class="table table-hover" style="width: 80vw; margin: auto; border: 1px solid rgba(214, 212, 212, 0.693); border-collapse: collapse; box-shadow: 8px 7px 20px rgba(83, 83, 83, 0.192); text-align: center;">
            <thead class="thead-color">
                <tr class="borda-tabela" style="color: rgb(255, 255, 255);">
                    <th class="borda-tabela">Nome</th>
                    <th class="borda-tabela">Email</th>
                    <th class="borda-tabela">Nivel de Acesso</th>
                    <th class="borda-tabela" colspan="2"><a href="criar_usuario.php">ADICIONE</a></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($lista as $usuario) : ?>
                    <tr class="borda-tabela">
                        <td class="borda-tabela"><?= $usuario['nome'] ?></td>
                        <td class="borda-tabela"><?= $usuario['email'] ?></td>
                        <td class="borda-tabela"><?= $usuario['nivel_acesso'] ?></td>

                        <td class="borda-tabela"><a href="edita_usuario_admin.php?id_usuario=<?= $usuario['id_usuario'] ?>"><span class="material-symbols-outlined" id="botaoedit">edit</span></a></td>
                        <td class="borda-tabela"><a href="delete_usuario_controller.php?id_usuario=<?= $usuario['id_usuario'] ?>"><span class="material-symbols-outlined" id="botaodelete">delete_forever</span></a></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>

<?php
require_once 'rodape.php';
?>