<?php
require_once "cabecalho.php";
require_once "postagem.php";
require_once "categoria.php";

try {
    $lista = Categoria::listar();
} catch (Exception $e) {
    echo $e->getMessage();
}

try {
    $id_post = $_GET['id_post'];
    $postagem = new Postagem($id_post);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<div class="flex flex-coluna flex-centro">
    <h1>Edição de Postagem</h1>
    <form action="editar_postagem_controller.php" method="post">
        <div class="flex flex-coluna">
            <input type="hidden" name="id_postagem" value="<?= $postagem->id_post ?>">

            <div class="criar-post-input">
                <label for="titulo">TITULO</label>
                <input type="text" id="titulo" name="titulo" size="50" value="<?= $postagem->titulo ?>">
            </div>

            <div class="criar-post-input">
                <label for="id_categoria">CATEGORIA</label>
                <select name="id_categoria" id="id_categoria">
                    <?php foreach ($lista as $categoria) :
                        $verificaCat = $postagem->id_categoria == $categoria['id_categoria'];
                        $selecionaCat = $verificaCat ? "selected='select'" : "";
                    ?>
                        <option value="<?= $categoria['id_categoria'] ?>" <?= $selecionaCat ?>><?= $categoria['nome'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="criar-post-input">
                <label for="conteudo">CONTEUDO</label>
                <textarea id="conteudo" name="conteudo" cols="200" rows="20"><?= $postagem->conteudo ?></textarea>
            </div>

            <div class="flex-autoalinhado-direita">
                <button type="submit" class="botao">ATUALIZAR POST</button>
            </div>
        </div>
    </form>
</div>

<?php
require_once "rodape.php";
?>