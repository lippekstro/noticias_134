<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Usuario</title>
    <link rel="stylesheet" href="css/mystyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
</head>
<body>
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
                        <th colspan="2"><a href="">ADICIONE</a></th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <th>1</th>
                    <td>Mark</td>
                    <td>ejuhfjberjn@gmail.com</td>
                    <td>1234567</td>
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
        
</body>
</html>
