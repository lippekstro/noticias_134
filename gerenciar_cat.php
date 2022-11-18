<?php
require_once "cabecalho.php";
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
                <tr>
                    <td></td>
                    <td><span class="material-symbols-outlined" id="btn_edit">edit</span></td>
                    <td><span class="material-symbols-outlined" id="btn_delete">delete</span></a></td>
                </tr>
                <tr>
                    <td></td>
                    <td><span class="material-symbols-outlined" id="btn_edit">edit</span></td>
                    <td><span class="material-symbols-outlined" id="btn_delete">delete</span></a></td>
                </tr>
                <tr>
                    <td></td>
                    <td><span class="material-symbols-outlined" id="btn_edit">edit</span></td>
                    <td><span class="material-symbols-outlined" id="btn_delete">delete</span></td>
                </tr>
            </thead>
        </table>
    </div>
</div>

<?php
require_once "rodape.php";
?>