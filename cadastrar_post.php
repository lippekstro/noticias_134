<?php
require_once "cabecalho.php";
require_once "categoria.php";

try {
    $lista = Categoria::listar();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<div class="flex flex-coluna flex-centro">
    <h1>Cadastro de Postagem</h1>
    <form action="criar_postagem_controller.php" method="post" enctype="multipart/form-data">
        <div class="flex flex-coluna">
            <div class="criar-post-input">
                <input type="file" name="imagem" id="imagem">
            </div>

            <div class="criar-post-input">
                <label for="titulo">TITULO</label>
                <input type="text" id="titulo" name="titulo" size="50">
            </div>

            <div class="criar-post-input">
                <label for="id_categoria">CATEGORIA</label>
                <select name="id_categoria" id="id_categoria">
                    <?php foreach ($lista as $categoria) : ?>
                        <option value="<?= $categoria['id_categoria'] ?>"><?= $categoria['nome'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="criar-post-input">
                <label for="conteudo">CONTEUDO</label>
                <textarea id="conteudo" name="conteudo" cols="200" rows="20"></textarea>
            </div>

            <div class="flex-autoalinhado-direita">
                <button type="submit" class="botao">POSTAR</button>
            </div>
        </div>
    </form>
</div>

<?php
require_once "rodape.php";
?>