<?php
require_once "cabecalho.php";
require_once "usuario.php";

if (isset($_SESSION['usuario']) && $_SESSION['usuario']['nivel_acesso'] < 3) {
    header('location: index.php');
}
if (isset($_GET["busca"])){
    try{
        $lista = Usuario::listarPorUsuario($_GET["busca"]);
    }catch (Exception $e) {
        echo $e->getMessage();
    }
}else {
    try {
        $lista = Usuario::listar();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
 }

?>

<div class="flex flex-coluna">
    <div class="flex-centralizado">
        <h1>Gerenciamento de Usuários</h1>
        <form action="">
            <div class="container-busca">
                <input type="search" name="busca" id="busca" class="campos-busca">
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
                <th>Email</th>
                <th>Nivel de Acesso</th>
                <th colspan="2"><a href="criar_usuario.php"><span class="material-symbols-outlined botao-add">add</span></a></th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($lista as $usuario) : ?>
                <tr>
                    <td><?= $usuario['nome'] ?></td>
                    <td><?= $usuario['email'] ?></td>
                    <td><?= $usuario['nivel_acesso'] ?></td>

                    <td><a href="edita_usuario_admin.php?id_usuario=<?= $usuario['id_usuario'] ?>"><span class="material-symbols-outlined botao-edit">edit</span></a></td>
                    <td><a href="delete_usuario_controller.php?id_usuario=<?= $usuario['id_usuario'] ?>"><span class="material-symbols-outlined botao-delete">delete_forever</span></a></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>

<?php
require_once 'rodape.php';
?>
