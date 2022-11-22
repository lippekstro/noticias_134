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

<div class="container-flex">
    <h1>Cadastro de Postagem</h1>
    <form action="editar_postagem_controller.php" method="post">
        <input type="hidden" name="id_postagem" value="<?= $postagem->id_post ?>">
        <div class="container-flex">
            <div class="container-input">
                <div>
                    <label for="titulo">TITULO</label>
                    <input type="text" id="titulo" name="titulo" size="50" style="height: 30px;" value="<?= $postagem->titulo ?>">
                </div>
                <div style="display: flex; align-items:center;">
                    <label for="id_categoria" style="margin-right: 4px;">CATEGORIA</label>
                    <select name="id_categoria" id="id_categoria">
                        <?php foreach ($lista as $categoria) :
                            $verificaCat = $postagem->id_categoria == $categoria['id_categoria'];
                            $selecionaCat = $verificaCat ? "selected='select'" : "";
                        ?>
                            <option value="<?= $categoria['id_categoria'] ?>" <?= $selecionaCat ?>><?= $categoria['nome'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>

            <div>
                <label for="conteudo">CONTEUDO</label>
                <textarea id="conteudo" name="conteudo" cols="200" rows="20"><?= $postagem->conteudo ?>"</textarea>
            </div>
            <div>
                <button type="submit" class="botao">ATUALIZAR</button>
            </div>
        </div>
    </form>
</div>

<?php
require_once "rodape.php";
?>