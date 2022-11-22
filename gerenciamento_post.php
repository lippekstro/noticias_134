<?php
require_once "cabecalho.php";
require_once "postagem.php";

if(isset($_SESSION['usuario']) && $_SESSION['usuario']['nivel_acesso'] < 2){
    header('location: index.php');
}

try {
    $lista = Postagem::listar();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
<div id="flex">
    <div id="gerenc">
        <h1 id="gp">Gerenciamento De Postagem</h1>
        <table>
            <thead>
                <tr>
                    <th>Tiulo</th>
                    <th>Data</th>
                    <th>Autor</th>
                    <th>Editar</th>
                    <th>Deletar</th>
                </tr>
                <tr>
                    <td>fvgaerg</td>
                    <td>fvgaerg</td>
                    <td>fvgaerg</td>
                    <td><a href="editar.php?id_pessoa=<?= $item['id_pessoa'] ?>"><span class="material-symbols-outlined" id="btn_edit">edit</span></a></td>
                    <td><a href="delete.php?id_pessoa=<?= $item['id_pessoa'] ?>"><span class="material-symbols-outlined" id="btn_delete">delete</span></a></td>

                </tr>
            </thead>
        </table>
    </div>
</div>

<?php
require_once "rodape.php";
?>
