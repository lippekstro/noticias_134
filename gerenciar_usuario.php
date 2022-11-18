<?php
require_once "cabecalho.php";
?>
    <div id="exibe">
            <div class="flex-user espaço-entre" id="topo">
                <div id="campo_pesquisa">
                    <form action="" class="flex-user">
                        <input type="search" name="busca" id="busca">
                        <button type="submit" id="lupa_user">
                            <span class="material-symbols-sharp">search</span>
                        </button>
                    </form>
                </div>
            </div>
        
        <div class="lista-dados">
            <table class="table table-hover" style="width: 80vw; margin: auto; border: 1px solid rgba(214, 212, 212, 0.693); border-collapse: collapse; box-shadow: 8px 7px 20px rgba(83, 83, 83, 0.192); text-align: center;">
                <thead class="thead-color">
                    <tr class="borda-tabela" style="color: rgb(255, 255, 255);">
                        <th class="borda-tabela">ID</th>
                        <th class="borda-tabela">Nome</th>
                        <th class="borda-tabela">Email</th>
                        <th class="borda-tabela">Senha</th>
                        <th class="borda-tabela">Nivel de Acesso</th>
                        <th class="borda-tabela" colspan="2"><a class="adicionar" href="criar_usuario.php">ADICIONE</a></th>
                    </tr>
                </thead>
                <tbody>
                <tr class="borda-tabela">
                    <th class="borda-tabela">1</th>
                    <td class="borda-tabela">Mark</td>
                    <td class="borda-tabela">ejuhfjberjn@gmail.com</td>
                    <td class="borda-tabela">1234567</td>
                    <td class="borda-tabela">Leitor</td>
                    <td class="borda-tabela"><a href=""><span class="material-symbols-sharp" id="butao-edit">edit</span></a></td>
                    <td class="borda-tabela"><a href=""><span class="material-symbols-sharp" id="butao-delete">delete_forever</span></a></td>
                </tr>
                <tr class="borda-tabela">
                    <th class="borda-tabela">1</th>
                    <td class="borda-tabela">Mark</td>
                    <td class="borda-tabela">ejuhfjberjn@gmail.com</td>
                    <td class="borda-tabela">1234567</td>
                    <td class="borda-tabela">Leitor</td>
                    <td class="borda-tabela"><a href=""><span class="material-symbols-sharp" id="butao-edit">edit</span></a></td>
                    <td class="borda-tabela"><a href=""><span class="material-symbols-sharp" id="butao-delete">delete_forever</span></a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php
require_once 'rodape.php';
?>