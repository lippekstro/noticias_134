<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/gerenc_post.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
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
</body>
</html>