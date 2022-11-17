<?php
require_once "cabecalho.php";
?>
    <div id="exibe">
            <div class="flex-container space-between" id="topo">
                <div id="campo_pesquisa">
                    <form action="" class="flex-container">
                        <input type="search" name="busca" id="busca">
                        <button type="submit" id="lupa">
                            <span class="material-symbols-sharp">search</span>
                        </button>
                    </form>
                </div>
            </div>
        
        <div class="lista-dados">
            <table class="table table-hover" style="width: 80vw; margin: auto;">
                <thead>
                    <tr style="color: rgb(255, 255, 255);">
                        <th >ID</th>
                        <th >Nome</th>
                        <th >Email</th>
                        <th >Senha</th>
                        <th >Nivel de Acesso</th>
                        <th colspan="2"><a href="criar_usuario.php">ADICIONE</a></th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <th>1</th>
                    <td>Mark</td>
                    <td>ejuhfjberjn@gmail.com</td>
                    <td>12364567</td>
                    <td>Leitor</td>
                    <td><a href=""><span class="material-symbols-sharp" id="btn-edit">edit</span></a></td>
                    <td><a href=""><span class="material-symbols-sharp" id="btn-delete">delete_forever</span></a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>ejuhfjberjn@gmail.com</td>
                    <td>1234567</td>
                    <td>Admin</td>
                    <td><a href=""><span class="material-symbols-sharp" id="btn-edit">edit</span></a></td>
                    <td><a href=""><span class="material-symbols-sharp" id="btn-delete">delete_forever</span></a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>ejuhfjberjn@gmail.com</td>
                    <td>1234567</td>
                    <td>Jornalista</td>
                    <td><a href=""><span class="material-symbols-sharp" id="btn-edit">edit</span></a></td>
                    <td><a href=""><span class="material-symbols-sharp" id="btn-delete">delete_forever</span></a></td>
        
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Vicente</td>
                    <td>ejuhfjberjn@gmail.com</td>
                    <td>1234567</td>
                    <td>Leitor</td>
                    <td><a href=""><span class="material-symbols-sharp" id="btn-edit">edit</span></a></td>
                    <td><a href=""><span class="material-symbols-sharp" id="btn-delete">delete_forever</span></a></td>
        
                    
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Bruna</td>
                    <td>ejuhfjberjn@gmail.com</td>
                    <td>1234567</td>
                    <td>Leitor</td>
                    <td><a href=""><span class="material-symbols-sharp" id="btn-edit">edit</span></a></td>
                    <td><a href=""><span class="material-symbols-sharp" id="btn-delete">delete_forever</span></a></td>
                    
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Mike</td>
                    <td>ejuhfjberjn@gmail.com</td>
                    <td>1234567</td>
                    <td>Leitor</td>
                    <td><a href=""><span class="material-symbols-sharp" id="btn-edit">edit</span></a></td>
                    <td><a href=""><span class="material-symbols-sharp" id="btn-delete">delete_forever</span></a></td>
                    
                </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php
require_once 'rodape.php';
?>