<?php
require_once "cabecalho.php";
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
                <tr>
                    <td>fvgaerg</td>
                    <td>fvgaerg</td>
                    <td>fvgaerg</td>
                    <td><a href="editar_post.php?id_post=<?= $post['id_post'] ?>"><span class="material-symbols-outlined" id="btn_edit">edit</span></a></td>
                    <td><a href="delete_postagem_controller.php?id_post=<?= $post['id_post'] ?>"><span class="material-symbols-outlined" id="btn_delete">delete</span></a></td>

                </tr>
            </thead>
        </table>
    </div>
</div>

<?php
require_once "rodape.php";
?>
