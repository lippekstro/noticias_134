<?php
require_once "cabecalho.php";
?>

<div class="container-flex">
    <h1>Cadastro de Postagem</h1>
    <form action="editar_postagem_controller.php" method="post">
        <div class="container-flex">
            <div class="container-input">
                <div>
                    <label for="titulo">TITULO</label>
                    <input type="text" id="titulo" name="titulo" size="50" style="height: 30px;">
                </div>
                <div style="display: flex; align-items:center;">
                    <label for="categoria" style="margin-right: 4px;">CATEGORIA</label>
                    <select name="categoria" id="categoria">
                        <option value="asda">adasdasdas</option>
                        <option value="asda">adas</option>
                        <option value="asda">adas</option>
                    </select>
                </div>
            </div>

            <div>
                <label for="conteudo">CONTEUDO</label>
                <textarea id="conteudo" cols="200" rows="20"></textarea>
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